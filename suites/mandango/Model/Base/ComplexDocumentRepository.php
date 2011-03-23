<?php

namespace Model\Base;

/**
 * Base class of repository of Model\ComplexDocument document.
 */
abstract class ComplexDocumentRepository extends \Mandango\Repository
{
    protected $documentClass = 'Model\\ComplexDocument';
    protected $isFile = false;
    protected $connectionName;
    protected $collectionName = 'model_complex_document';

    /**
     * Save documents.
     *
     * @param mixed $documents A document or an array of documents.
     */
    public function save($documents)
    {
        if (!is_array($documents)) {
            $documents = array($documents);
        }

        $identityMap =& $this->identityMap->allByReference();
        $collection = $this->collection();

        $inserts = array();
        $updates = array();
        foreach ($documents as $document) {
             if ($document->isNew()) {
                $inserts[spl_object_hash($document)] = $document;
            } else {
                $updates[] = $document;
            }
        }

        // insert
        if ($inserts) {
            $a = array();
            foreach ($inserts as $oid => $document) {
                $a[$oid] = $document->queryForSave();
            }

            if ($a) {
                $collection->batchInsert($a);

                foreach ($a as $oid => $data) {
                    $document = $inserts[$oid];

                    $document->setId($data['_id']);
                    $document->clearModified();
                    $identityMap[$data['_id']->__toString()] = $document;
                }
            }
        }

        // updates
        foreach ($updates as $document) {
            if ($query = $document->queryForSave()) {
                $collection->update(array('_id' => $document->getId()), $query);
                $document->clearModified();
            }
        }
    }

    /**
     * Delete documents.
     *
     * @param mixed $documents A document or an array of documents.
     */
    public function delete($documents)
    {
        if (!is_array($documents)) {
            $documents = array($documents);
        }

        $identityMap =& $this->identityMap->allByReference();

        $ids = array();
        foreach ($documents as $document) {
            $ids[] = $id = $document->getAndRemoveId();
            unset($identityMap[$id->__toString()]);
        }

        $this->collection()->remove(array('_id' => array('$in' => $ids)));
    }

    /**
     * Ensure the inexes.
     */
    public function ensureIndexes()
    {
    }
}