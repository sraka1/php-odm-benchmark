<?php

require_once(__DIR__.'/../../vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Doctrine\ODM\MongoDB' => __DIR__.'/../../vendor/doctrine_mongo',
    'Doctrine\MongoDB'     => __DIR__.'/../../vendor/doctrine_mongo/vendor/doctrine-mongodb/lib',
    'Doctrine\Common'      => __DIR__.'/../../vendor/doctrine_mongo/vendor/doctrine-common/lib',
    'Document'             => __DIR__,
));
$loader->register();

class DoctrineMongoTestSuite extends TestSuite
{
    protected $dm;

    protected function initialize()
    {
        $config = new \Doctrine\ODM\MongoDB\Configuration();

        // proxy
        $config->setProxyDir(__DIR__ . '/cache');
        $config->setProxyNamespace('Proxies');

        // hydrator
        $config->setHydratorDir(__DIR__ . '/cache');
        $config->setHydratorNamespace('Hydrators');

        // metadata
        $annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();
        $annotationReader->setDefaultAnnotationNamespace('Doctrine\ODM\MongoDB\Mapping\\');
        $annotation = new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($annotationReader, __DIR__.'/Documents');
        $metadataCache = new \Doctrine\Common\Cache\MemcacheCache();
        $memcache = new \Memcache();
        $memcache->connect('127.0.0.1', 11211);
        $metadataCache->setMemcache($memcache);
        $config->setMetadataDriverImpl($annotation);
        $config->setMetadataCacheImpl($metadataCache);

        foreach ($metadataCache->getIds() as $id) {
            $metadataCache->delete($id);
        }

        $config->setAutoGenerateProxyClasses(false); // no code generation in production
        $config->setDefaultDB($this->db);

        $this->dm = Doctrine\ODM\MongoDB\DocumentManager::create(new Doctrine\MongoDB\Connection(), $config);
    }

    protected function insertSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = new \Document\SimpleDocument();
            $document->field0 = 'value';
            $document->field1 = 'value';
            $document->field2 = 'value';
            $document->field3 = 'value';
            $document->field4 = 'value';
            $document->field5 = 'value';
            $document->field6 = 'value';
            $document->field7 = 'value';
            $document->field8 = 'value';
            $document->field9 = 'value';
            $this->dm->persist($document);
        }
        $this->dm->flush();
    }

    protected function updateSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->dm->createQueryBuilder('Document\SimpleDocument')->limit(1)->skip($i)->getQuery()->getSingleResult();
            $document->field0 = 'updating'.mt_rand(11111, 99999);
            $this->dm->persist($document);
            $this->dm->flush();
        }
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->dm->createQueryBuilder('Document\SimpleDocument')->limit(1)->getQuery()->getSingleResult();
            $this->dm->remove($document);
            $this->dm->flush();
        }
    }
}
