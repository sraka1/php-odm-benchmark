<?php

$mandangoDir = __DIR__.'/../../vendor/mandango';

require_once(__DIR__.'/../../vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Mandango' => $mandangoDir.'/src',
    'Model'    => __DIR__,
));
$loader->register();

class MandangoTestSuite extends TestSuite
{
    protected $mandango;
    protected $connection;

    protected function initialize()
    {
        $this->mandango = new \Mandango\Mandango(new \Model\Info\Metadata(), new \Mandango\Cache\ArrayCache());
        $this->connection = new \Mandango\Connection($this->server, $this->dbName);
        $this->mandango->setConnection('default', $this->connection);
        $this->mandango->setDefaultConnectionName('default');

        \Mandango\Container::set('default', $this->mandango);
        \Mandango\Container::setDefaultName('default');
    }

    protected function insertSimpleDocumentTest($nb)
    {
        $documents = array();
        for ($i = 0; $i < $nb; $i++) {
            $documents[] = $document = new \Model\SimpleDocument();
            $document->setField0('value');
            $document->setField1('value');
            $document->setField2('value');
            $document->setField3('value');
            $document->setField4('value');
            $document->setField5('value');
            $document->setField6('value');
            $document->setField7('value');
            $document->setField8('value');
            $document->setField9('value');
        }
        \Model\SimpleDocument::repository()->save($documents);
    }

    protected function updateSimpleDocumentTest($nb)
    {
        $repository = \Model\SimpleDocument::repository();
        for ($i = 0; $i < $nb; $i++) {
            $document = $repository->query()->skip($i)->one();
            $document->setField0('updating'.mt_rand(11111, 99999));
            $repository->save($document);
        }
    }

    protected function updateSimpleDocumentGroupTest($nb)
    {
        $documents = \Model\SimpleDocument::query()->limit($nb)->one();
        foreach ($documents as $document) {
            $document->setField0('updating'.mt_rand(11111, 99999));
        }
        \Model\SimpleDocument::repository()->save($documents);
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        $repository = \Model\SimpleDocument::repository();
        for ($i = 0; $i < $nb; $i++) {
            $document = $repository->query()->one();
            $repository->delete($document);
        }
    }

    protected function deleteSimpleDocumentGroupTest($nb)
    {
        $repository = \Model\SimpleDocument::repository();
        $documents = $repository->query()->limit($nb)->all();
        $repository->delete($documents);
    }

    protected function hydrateSimpleDocumentTest($nb)
    {
        $documents = \Model\SimpleDocument::query()->fields(array())->limit($nb)->all();
    }

    protected function insertComplexDocumentTest($nb)
    {
        $documents = array();
        for ($i = 0; $i < $nb; $i++) {
            $documents[] = $document = new \Model\ComplexDocument();
            $document->setField00('value');
            $document->setField01('value');
            $document->setField02('value');
            $document->setField03('value');
            $document->setField04('value');
            $document->setField05('value');
            $document->setField06('value');
            $document->setField07('value');
            $document->setField08('value');
            $document->setField09('value');
            $document->setField10('value');
            $document->setField11('value');
            $document->setField12('value');
            $document->setField13('value');
            $document->setField14('value');
            $document->setField15('value');
            $document->setField16('value');
            $document->setField17('value');
            $document->setField18('value');
            $document->setField19('value');
            $document->setField20('value');
            $document->setField21('value');
            $document->setField22('value');
            $document->setField23('value');
            $document->setField24('value');
            $document->setField25('value');
            $document->setField26('value');
            $document->setField27('value');
            $document->setField28('value');
            $document->setField29('value');
            $document->setEmbeddedOne($this->createEmbeddedDocument());
            $document->setEmbeddedOneDeep($this->createDeepEmbeddedDocument());
            $embeddedMany = $document->getEmbeddedMany();
            for ($z = 0; $z < 3; $z++) {
                $embeddedMany->add($this->createEmbeddedDocument());
            }
        }
        \Model\ComplexDocument::repository()->save($documents);
    }

    protected function insertComplexDocumentMinimumTest($nb)
    {
        $documents = array();
        for ($i = 0; $i < $nb; $i++) {
            $documents[] = $document = new \Model\ComplexDocument();
            $document->setField00('value');
        }
        \Model\ComplexDocument::repository()->save($documents);
    }

    protected function updateComplexDocumentTest($nb)
    {
        $repository = \Model\ComplexDocument::repository();
        for ($i = 0; $i < $nb; $i++) {
            $document = $repository->query()->one();
            $document->setField00('updating'.mt_rand(11111, 99999));
            $repository->save($document);
        }
    }

    protected function updateComplexDocumentGroupTest($nb)
    {
        $repository = \Model\ComplexDocument::repository();
        $documents = $repository->query()->limit($nb)->one();
        foreach ($documents as $document) {
            $document->setField00('updating'.mt_rand(11111, 99999));
        }
        $repository->save($documents);
    }

    protected function deleteComplexDocumentTest($nb)
    {
        $repository = \Model\ComplexDocument::repository();
        for ($i = 0; $i < $nb; $i++) {
            $document = $repository->query()->one();
            $repository->delete($document);
        }
    }

    protected function deleteComplexDocumentGroupTest($nb)
    {
        $repository = \Model\ComplexDocument::repository();
        $documents = $repository->query()->limit($nb)->all();
        $repository->delete($documents);
    }

    protected function hydrateComplexDocumentTest($nb)
    {
        $documents = \Model\ComplexDocument::query()->fields(array())->limit($nb)->all();
        foreach ($documents as $document) {
            $document->getEmbeddedMany()->saved();
        }
    }

    protected function hydrateComplexDocumentQueryCache2FieldsTest($nb)
    {
        $documents = \Model\ComplexDocument::query()->fields(array(
            'field00' => 1,
            'field01' => 1,
        ))->limit($nb)->all();
    }

    protected function createEmbeddedDocument()
    {
        $document = new \Model\EmbeddedDocument();
        $document->setField0('value');
        $document->setField1('value');
        $document->setField2('value');
        $document->setField3('value');
        $document->setField4('value');
        $document->setField5('value');
        $document->setField6('value');
        $document->setField7('value');
        $document->setField8('value');
        $document->setField9('value');

        return $document;
    }

    protected function createDeepEmbeddedDocument()
    {
        $document = new \Model\DeepEmbeddedDocument();
        $document->setField0('value');
        $document->setField1('value');
        $document->setField2('value');
        $document->setField3('value');
        $document->setField4('value');
        $document->setField5('value');
        $document->setField6('value');
        $document->setField7('value');
        $document->setField8('value');
        $document->setField9('value');
        $document->setEmbeddedOne($this->createEmbeddedDocument());

        return $document;
    }
}
