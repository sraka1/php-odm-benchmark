<?php

namespace Model\Info;

class MetadataInfo
{
    public function getModelSimpleDocumentClassInfo()
    {
        return array(
            'is_embedded' => false,
            'mandango' => null,
            'connection' => null,
            'collection' => 'model_simple_document',
            'fields' => array(
                'field0' => array(
                    'type' => 'string',
                ),
                'field1' => array(
                    'type' => 'string',
                ),
                'field2' => array(
                    'type' => 'string',
                ),
                'field3' => array(
                    'type' => 'string',
                ),
                'field4' => array(
                    'type' => 'string',
                ),
                'field5' => array(
                    'type' => 'string',
                ),
                'field6' => array(
                    'type' => 'string',
                ),
                'field7' => array(
                    'type' => 'string',
                ),
                'field8' => array(
                    'type' => 'string',
                ),
                'field9' => array(
                    'type' => 'string',
                ),
            ),
            'references_one' => array(

            ),
            'references_many' => array(

            ),
            'embeddeds_one' => array(

            ),
            'embeddeds_many' => array(

            ),
            'relations_one' => array(

            ),
            'relations_many_one' => array(

            ),
            'relations_many_many' => array(

            ),
            'relations_many_through' => array(

            ),
            'indexes' => array(

            ),
        );
    }

    public function getModelComplexDocumentClassInfo()
    {
        return array(
            'is_embedded' => false,
            'mandango' => null,
            'connection' => null,
            'collection' => 'model_complex_document',
            'fields' => array(
                'field00' => array(
                    'type' => 'string',
                ),
                'field01' => array(
                    'type' => 'string',
                ),
                'field02' => array(
                    'type' => 'string',
                ),
                'field03' => array(
                    'type' => 'string',
                ),
                'field04' => array(
                    'type' => 'string',
                ),
                'field05' => array(
                    'type' => 'string',
                ),
                'field06' => array(
                    'type' => 'string',
                ),
                'field07' => array(
                    'type' => 'string',
                ),
                'field08' => array(
                    'type' => 'string',
                ),
                'field09' => array(
                    'type' => 'string',
                ),
                'field10' => array(
                    'type' => 'string',
                ),
                'field11' => array(
                    'type' => 'string',
                ),
                'field12' => array(
                    'type' => 'string',
                ),
                'field13' => array(
                    'type' => 'string',
                ),
                'field14' => array(
                    'type' => 'string',
                ),
                'field15' => array(
                    'type' => 'string',
                ),
                'field16' => array(
                    'type' => 'string',
                ),
                'field17' => array(
                    'type' => 'string',
                ),
                'field18' => array(
                    'type' => 'string',
                ),
                'field19' => array(
                    'type' => 'string',
                ),
                'field20' => array(
                    'type' => 'string',
                ),
                'field21' => array(
                    'type' => 'string',
                ),
                'field22' => array(
                    'type' => 'string',
                ),
                'field23' => array(
                    'type' => 'string',
                ),
                'field24' => array(
                    'type' => 'string',
                ),
                'field25' => array(
                    'type' => 'string',
                ),
                'field26' => array(
                    'type' => 'string',
                ),
                'field27' => array(
                    'type' => 'string',
                ),
                'field28' => array(
                    'type' => 'string',
                ),
                'field29' => array(
                    'type' => 'string',
                ),
            ),
            'references_one' => array(

            ),
            'references_many' => array(

            ),
            'embeddeds_one' => array(
                'embedded_one' => array(
                    'class' => 'Model\\EmbeddedDocument',
                ),
                'embedded_one_deep' => array(
                    'class' => 'Model\\DeepEmbeddedDocument',
                ),
            ),
            'embeddeds_many' => array(
                'embedded_many' => array(
                    'class' => 'Model\\EmbeddedDocument',
                ),
            ),
            'relations_one' => array(

            ),
            'relations_many_one' => array(

            ),
            'relations_many_many' => array(

            ),
            'relations_many_through' => array(

            ),
            'indexes' => array(

            ),
        );
    }

    public function getModelEmbeddedDocumentClassInfo()
    {
        return array(
            'is_embedded' => true,
            'fields' => array(
                'field0' => array(
                    'type' => 'string',
                ),
                'field1' => array(
                    'type' => 'string',
                ),
                'field2' => array(
                    'type' => 'string',
                ),
                'field3' => array(
                    'type' => 'string',
                ),
                'field4' => array(
                    'type' => 'string',
                ),
                'field5' => array(
                    'type' => 'string',
                ),
                'field6' => array(
                    'type' => 'string',
                ),
                'field7' => array(
                    'type' => 'string',
                ),
                'field8' => array(
                    'type' => 'string',
                ),
                'field9' => array(
                    'type' => 'string',
                ),
            ),
            'references_one' => array(

            ),
            'references_many' => array(

            ),
            'embeddeds_one' => array(

            ),
            'embeddeds_many' => array(

            ),
        );
    }

    public function getModelDeepEmbeddedDocumentClassInfo()
    {
        return array(
            'is_embedded' => true,
            'fields' => array(
                'field0' => array(
                    'type' => 'string',
                ),
                'field1' => array(
                    'type' => 'string',
                ),
                'field2' => array(
                    'type' => 'string',
                ),
                'field3' => array(
                    'type' => 'string',
                ),
                'field4' => array(
                    'type' => 'string',
                ),
                'field5' => array(
                    'type' => 'string',
                ),
                'field6' => array(
                    'type' => 'string',
                ),
                'field7' => array(
                    'type' => 'string',
                ),
                'field8' => array(
                    'type' => 'string',
                ),
                'field9' => array(
                    'type' => 'string',
                ),
            ),
            'references_one' => array(

            ),
            'references_many' => array(

            ),
            'embeddeds_one' => array(
                'embedded_one' => array(
                    'class' => 'Model\\EmbeddedDocument',
                ),
            ),
            'embeddeds_many' => array(

            ),
        );
    }
}