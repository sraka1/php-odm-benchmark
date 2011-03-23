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
        $memcache->connect('localhost', 11211);
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

    protected function updateSimpleDocumentGroupTest($nb)
    {
        $documents = $this->dm->createQueryBuilder('Document\SimpleDocument')->limit($nb)->getQuery()->execute();
        foreach ($documents as $document) {
            $document->field0 = 'updating'.mt_rand(11111, 99999);
            $this->dm->persist($document);
        }
        $this->dm->flush();
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->dm->createQueryBuilder('Document\SimpleDocument')->limit(1)->getQuery()->getSingleResult();
            $this->dm->remove($document);
            $this->dm->flush();
        }
    }

    protected function deleteSimpleDocumentGroupTest($nb)
    {
        $documents = $this->dm->createQueryBuilder('Document\SimpleDocument')->limit($nb)->getQuery()->execute();
        foreach ($documents as $document) {
            $this->dm->remove($document);
        }
        $this->dm->flush();
    }

    protected function hydrateSimpleDocumentTest($nb)
    {
        $documents = iterator_to_array($this->dm->createQueryBuilder('Document\SimpleDocument')->limit($nb)->getQuery()->execute());
    }

    protected function insertComplexDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = new \Document\ComplexDocument();
            $document->field00 = 'value';
            $document->field01 = 'value';
            $document->field02 = 'value';
            $document->field03 = 'value';
            $document->field04 = 'value';
            $document->field05 = 'value';
            $document->field06 = 'value';
            $document->field07 = 'value';
            $document->field08 = 'value';
            $document->field09 = 'value';
            $document->field10 = 'value';
            $document->field11 = 'value';
            $document->field12 = 'value';
            $document->field13 = 'value';
            $document->field14 = 'value';
            $document->field15 = 'value';
            $document->field16 = 'value';
            $document->field17 = 'value';
            $document->field18 = 'value';
            $document->field19 = 'value';
            $document->field20 = 'value';
            $document->field21 = 'value';
            $document->field22 = 'value';
            $document->field23 = 'value';
            $document->field24 = 'value';
            $document->field25 = 'value';
            $document->field26 = 'value';
            $document->field27 = 'value';
            $document->field28 = 'value';
            $document->field29 = 'value';
            $document->embeddedOne = $this->createEmbeddedDocument();
            $document->embeddedOneDeep = $this->createDeepEmbeddedDocument();
            $embeddedMany = $document->embeddedMany;
            for ($z = 0; $z < 3; $z++) {
                $embeddedMany->add($this->createEmbeddedDocument());
            }
            $this->dm->persist($document);
        }
        $this->dm->flush();
    }

    protected function insertComplexDocumentMinimumTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = new \Document\ComplexDocument();
            $document->field00 = 'value';
            $this->dm->persist($document);
        }
        $this->dm->flush();
    }

    protected function updateComplexDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->dm->createQueryBuilder('Document\ComplexDocument')->limit(1)->getQuery()->getSingleResult();
            $document->field00 = 'updating'.mt_rand(11111, 99999);
            $this->dm->persist($document);
            $this->dm->flush();
        }
    }

    protected function updateComplexDocumentGroupTest($nb)
    {
        $documents = $this->dm->createQueryBuilder('Document\ComplexDocument')->limit($nb)->getQuery()->execute();
        foreach ($documents as $document) {
            $document->field00 = 'updating'.mt_rand(11111, 99999);
            $this->dm->persist($document);
        }
        $this->dm->flush();
    }

    protected function deleteComplexDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->dm->createQueryBuilder('Document\ComplexDocument')->limit(1)->skip($i)->getQuery()->getSingleResult();
            $this->dm->remove($document);
            $this->dm->flush();
        }
    }

    protected function deleteComplexDocumentGroupTest($nb)
    {
        $documents = $this->dm->createQueryBuilder('Document\ComplexDocument')->limit($nb)->getQuery()->execute();
        foreach ($documents as $document) {
            $this->dm->remove($document);
        }
        $this->dm->flush();
    }

    protected function hydrateComplexDocumentTest($nb)
    {
        $documents = $this->dm->createQueryBuilder('Document\ComplexDocument')->limit($nb)->getQuery()->execute();
        foreach ($documents as $document) {
            $document->embeddedMany->initialize();
        }
    }

    protected function hydrateComplexDocumentQueryCache2FieldsTest($nb)
    {
        $documents = iterator_to_array($this->dm->createQueryBuilder('Document\ComplexDocument')->limit($nb)->getQuery()->execute());
    }

    protected function createEmbeddedDocument()
    {
        $document = new \Document\EmbeddedDocument();
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

        return $document;
    }

    protected function createDeepEmbeddedDocument()
    {
        $document = new \Document\DeepEmbeddedDocument();
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
        $document->embeddedOne = $this->createEmbeddedDocument();

        return $document;
    }
}
