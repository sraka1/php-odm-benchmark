<?php

namespace Document;

/** @EmbeddedDocument */
class DeepEmbeddedDocument
{
    /** @Field */
    private $field0;
    /** @Field */
    private $field1;
    /** @Field */
    private $field2;
    /** @Field */
    private $field3;
    /** @Field */
    private $field4;
    /** @Field */
    private $field5;
    /** @Field */
    private $field6;
    /** @Field */
    private $field7;
    /** @Field */
    private $field8;
    /** @Field */
    private $field9;

    /** @EmbedOne(targetDocument="Document\EmbeddedDocument") */
    private $embeddedOne;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
