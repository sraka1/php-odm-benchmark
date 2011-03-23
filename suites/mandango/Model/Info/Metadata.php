<?php

namespace Model\Info;

class Metadata extends \Mandango\Metadata
{
    protected $classes = array(
        'Model\\SimpleDocument' => false,
        'Model\\ComplexDocument' => false,
        'Model\\EmbeddedDocument' => true,
        'Model\\DeepEmbeddedDocument' => true,
    );
}