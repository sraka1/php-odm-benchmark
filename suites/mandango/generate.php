<?php

$mandangoDir = __DIR__.'/../../vendor/mandango';

require_once(__DIR__.'/../../vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Mandango\Mondator' => $mandangoDir.'/vendor/mondator/src',
    'Mandango'          => $mandangoDir.'/src',
));
$loader->register();

/*
 * Mondator
 */
$mondator = new \Mandango\Mondator\Mondator();
$mondator->setConfigClasses(array(
    'Model\SimpleDocument' => array(
        'fields' => array(
            'field0' => 'string',
            'field1' => 'string',
            'field2' => 'string',
            'field3' => 'string',
            'field4' => 'string',
            'field5' => 'string',
            'field6' => 'string',
            'field7' => 'string',
            'field8' => 'string',
            'field9' => 'string',
        ),
    ),
    'Model\ComplexDocument' => array(
        'fields' => array(
            'field00' => 'string',
            'field01' => 'string',
            'field02' => 'string',
            'field03' => 'string',
            'field04' => 'string',
            'field05' => 'string',
            'field06' => 'string',
            'field07' => 'string',
            'field08' => 'string',
            'field09' => 'string',
            'field10' => 'string',
            'field11' => 'string',
            'field12' => 'string',
            'field13' => 'string',
            'field14' => 'string',
            'field15' => 'string',
            'field16' => 'string',
            'field17' => 'string',
            'field18' => 'string',
            'field19' => 'string',
            'field20' => 'string',
            'field21' => 'string',
            'field22' => 'string',
            'field23' => 'string',
            'field24' => 'string',
            'field25' => 'string',
            'field26' => 'string',
            'field27' => 'string',
            'field28' => 'string',
            'field29' => 'string',
        ),
        'embeddeds_one' => array(
            'embedded_one' => array('class' => 'Model\EmbeddedDocument'),
            'embedded_one_deep' => array('class' => 'Model\DeepEmbeddedDocument'),
        ),
        'embeddeds_many' => array(
            'embedded_many' => array('class' => 'Model\EmbeddedDocument'),
        ),
    ),
    'Model\EmbeddedDocument' => array(
        'is_embedded' => true,
        'fields' => array(
            'field0' => 'string',
            'field1' => 'string',
            'field2' => 'string',
            'field3' => 'string',
            'field4' => 'string',
            'field5' => 'string',
            'field6' => 'string',
            'field7' => 'string',
            'field8' => 'string',
            'field9' => 'string',
        ),
    ),
    'Model\DeepEmbeddedDocument' => array(
        'is_embedded' => true,
        'fields' => array(
            'field0' => 'string',
            'field1' => 'string',
            'field2' => 'string',
            'field3' => 'string',
            'field4' => 'string',
            'field5' => 'string',
            'field6' => 'string',
            'field7' => 'string',
            'field8' => 'string',
            'field9' => 'string',
        ),
        'embeddeds_one' => array(
            'embedded_one' => array('class' => 'Model\EmbeddedDocument'),
        ),
    ),
));
$mondator->setExtensions(array(
    new \Mandango\Extension\Core(array(
        'metadata_class'  => 'Model\Info\Metadata',
        'metadata_output' => __DIR__.'/Model/Info',
        'default_output'  => __DIR__.'/Model',
    )),
));
$mondator->process();
