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
            $document->field0('updating'.mt_rand(11111, 99999));
            $repository->save($document);
        }
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        $repository = \Model\SimpleDocument::repository();
        for ($i = 0; $i < $nb; $i++) {
            $document = $repository->query()->one();
            $repository->delete($document);
        }
    }

}
