<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

class MongoTestSuite extends TestSuite
{
    protected function initialize()
    {
    }

    protected function insertSimpleDocumentTest($nb)
    {
        $documents = array();
        for ($i = 1; $i <= $nb; $i++) {
            $documents[$i] = array(
                'field0' => 'value',
                'field1' => 'value',
                'field2' => 'value',
                'field3' => 'value',
                'field4' => 'value',
                'field5' => 'value',
                'field6' => 'value',
                'field7' => 'value',
                'field8' => 'value',
                'field9' => 'value',
            );
        }
        $this->db->simple->batchInsert($documents);
    }

    protected function updateSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->db->simple->find()->skip($i)->next();
            $document['field0'] = 'updating'.mt_rand(11111, 99999);
            $this->db->simple->save($document);
        }
    }

    protected function deleteSimpleDocumentTest($nb)
    {
        for ($i = 0; $i < $nb; $i++) {
            $document = $this->db->simple->find()->skip($i)->next();
            $this->db->simple->remove(array('_id' => $document['_id']));
        }
    }
}
