<?php

require_once(__DIR__.'/../../lib/TestSuite.php');
require_once(__DIR__.'/Document/SimpleDocument.php');

$di = new Phalcon\DI();

$di->set('mongo', function() {
    $mongo = new MongoClient();
    return $mongo->selectDB("db_name"); //database name in MongoDB
}, true);

$di->set('collectionManager', function(){
    return new Phalcon\Mvc\Collection\Manager();
}, true);

class PhalconTestSuite extends TestSuite
{
    protected function insertSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = new \Document\PhalconSimpleDocument();
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
            $document->save();
        }
    }

    protected function updateSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = \Document\PhalconSimpleDocument::findFirst(array(
                "skip" => $i
            ));
            $document->setField0('updating'.mt_rand(11111, 99999));
            $document->save();
        }
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = \Document\PhalconSimpleDocument::findFirst();
            $document->delete();
        }
    }

}
