<?php

namespace Document;

/** @Document */
class ComplexDocument
{
    /** @Id */
    private $id;

    /** @Field */
    private $field00;
    /** @Field */
    private $field01;
    /** @Field */
    private $field02;
    /** @Field */
    private $field03;
    /** @Field */
    private $field04;
    /** @Field */
    private $field05;
    /** @Field */
    private $field06;
    /** @Field */
    private $field07;
    /** @Field */
    private $field08;
    /** @Field */
    private $field09;
    /** @Field */
    private $field10;
    /** @Field */
    private $field11;
    /** @Field */
    private $field12;
    /** @Field */
    private $field13;
    /** @Field */
    private $field14;
    /** @Field */
    private $field15;
    /** @Field */
    private $field16;
    /** @Field */
    private $field17;
    /** @Field */
    private $field18;
    /** @Field */
    private $field19;
    /** @Field */
    private $field20;
    /** @Field */
    private $field21;
    /** @Field */
    private $field22;
    /** @Field */
    private $field23;
    /** @Field */
    private $field24;
    /** @Field */
    private $field25;
    /** @Field */
    private $field26;
    /** @Field */
    private $field27;
    /** @Field */
    private $field28;
    /** @Field */
    private $field29;

    /** @EmbedOne(targetDocument="Document\EmbeddedDocument") */
    private $embeddedOne;

    /** @EmbedOne(targetDocument="Document\DeepEmbeddedDocument") */
    private $embeddedOneDeep;

    /** @EmbedMany(targetDocument="Document\EmbeddedDocument") */
    private $embeddedMany;

    public function __construct()
    {
        $this->embeddedMany = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
