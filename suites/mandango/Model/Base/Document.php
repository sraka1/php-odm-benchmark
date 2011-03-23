<?php

namespace Model\Base;

/**
 * Base class of Model\Document document.
 */
abstract class Document extends \Mandango\Document\Document
{
    /**
     * Returns the mandango of the document.
     *
     * @return Mandango\Mandango The mandango of the document.
     */
    static public function mandango()
    {
        return \Mandango\Container::get();
    }

    /**
     * Set the document data (hydrate).
     *
     * @param array $data  The document data.
     * @param bool  $clean Whether clean the document.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setDocumentData($data, $clean = false)
    {
        if ($clean) {
            $this->data = array();
            $this->fieldsModified = array();
        }

        if (isset($data['_id'])) {
            $this->id = $data['_id'];
        }

        if (isset($data['_query_hash'])) {
            $this->addQueryHash($data['_query_hash']);
        }

        if (isset($data['field0'])) {
            $this->data['fields']['field0'] = (string) $data['field0'];
        } elseif (isset($data['_fields']['field0'])) {
            $this->data['fields']['field0'] = null;
        }
        if (isset($data['field1'])) {
            $this->data['fields']['field1'] = (string) $data['field1'];
        } elseif (isset($data['_fields']['field1'])) {
            $this->data['fields']['field1'] = null;
        }
        if (isset($data['field2'])) {
            $this->data['fields']['field2'] = (string) $data['field2'];
        } elseif (isset($data['_fields']['field2'])) {
            $this->data['fields']['field2'] = null;
        }
        if (isset($data['field3'])) {
            $this->data['fields']['field3'] = (string) $data['field3'];
        } elseif (isset($data['_fields']['field3'])) {
            $this->data['fields']['field3'] = null;
        }
        if (isset($data['field4'])) {
            $this->data['fields']['field4'] = (string) $data['field4'];
        } elseif (isset($data['_fields']['field4'])) {
            $this->data['fields']['field4'] = null;
        }
        if (isset($data['field5'])) {
            $this->data['fields']['field5'] = (string) $data['field5'];
        } elseif (isset($data['_fields']['field5'])) {
            $this->data['fields']['field5'] = null;
        }
        if (isset($data['field6'])) {
            $this->data['fields']['field6'] = (string) $data['field6'];
        } elseif (isset($data['_fields']['field6'])) {
            $this->data['fields']['field6'] = null;
        }
        if (isset($data['field7'])) {
            $this->data['fields']['field7'] = (string) $data['field7'];
        } elseif (isset($data['_fields']['field7'])) {
            $this->data['fields']['field7'] = null;
        }
        if (isset($data['field8'])) {
            $this->data['fields']['field8'] = (string) $data['field8'];
        } elseif (isset($data['_fields']['field8'])) {
            $this->data['fields']['field8'] = null;
        }
        if (isset($data['field9'])) {
            $this->data['fields']['field9'] = (string) $data['field9'];
        } elseif (isset($data['_fields']['field9'])) {
            $this->data['fields']['field9'] = null;
        }
        if (isset($data['field01'])) {
            $this->data['fields']['field01'] = (string) $data['field01'];
        } elseif (isset($data['_fields']['field01'])) {
            $this->data['fields']['field01'] = null;
        }
        if (isset($data['field11'])) {
            $this->data['fields']['field11'] = (string) $data['field11'];
        } elseif (isset($data['_fields']['field11'])) {
            $this->data['fields']['field11'] = null;
        }
        if (isset($data['field21'])) {
            $this->data['fields']['field21'] = (string) $data['field21'];
        } elseif (isset($data['_fields']['field21'])) {
            $this->data['fields']['field21'] = null;
        }
        if (isset($data['field31'])) {
            $this->data['fields']['field31'] = (string) $data['field31'];
        } elseif (isset($data['_fields']['field31'])) {
            $this->data['fields']['field31'] = null;
        }
        if (isset($data['field41'])) {
            $this->data['fields']['field41'] = (string) $data['field41'];
        } elseif (isset($data['_fields']['field41'])) {
            $this->data['fields']['field41'] = null;
        }
        if (isset($data['field51'])) {
            $this->data['fields']['field51'] = (string) $data['field51'];
        } elseif (isset($data['_fields']['field51'])) {
            $this->data['fields']['field51'] = null;
        }
        if (isset($data['field61'])) {
            $this->data['fields']['field61'] = (string) $data['field61'];
        } elseif (isset($data['_fields']['field61'])) {
            $this->data['fields']['field61'] = null;
        }
        if (isset($data['field71'])) {
            $this->data['fields']['field71'] = (string) $data['field71'];
        } elseif (isset($data['_fields']['field71'])) {
            $this->data['fields']['field71'] = null;
        }
        if (isset($data['field81'])) {
            $this->data['fields']['field81'] = (string) $data['field81'];
        } elseif (isset($data['_fields']['field81'])) {
            $this->data['fields']['field81'] = null;
        }
        if (isset($data['field91'])) {
            $this->data['fields']['field91'] = (string) $data['field91'];
        } elseif (isset($data['_fields']['field91'])) {
            $this->data['fields']['field91'] = null;
        }
        if (isset($data['embedded_one_1'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_1');
            if (isset($data['_fields']['embedded_one_1'])) {
                $data['embedded_one_1']['_fields'] = $data['_fields']['embedded_one_1'];
            }
            $embedded->setDocumentData($data['embedded_one_1']);
            $this->data['embeddeds_one']['embedded_one_1'] = $embedded;
        }
        if (isset($data['embedded_one_2'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_2');
            if (isset($data['_fields']['embedded_one_2'])) {
                $data['embedded_one_2']['_fields'] = $data['_fields']['embedded_one_2'];
            }
            $embedded->setDocumentData($data['embedded_one_2']);
            $this->data['embeddeds_one']['embedded_one_2'] = $embedded;
        }
        if (isset($data['embedded_one_3'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_3');
            if (isset($data['_fields']['embedded_one_3'])) {
                $data['embedded_one_3']['_fields'] = $data['_fields']['embedded_one_3'];
            }
            $embedded->setDocumentData($data['embedded_one_3']);
            $this->data['embeddeds_one']['embedded_one_3'] = $embedded;
        }
        if (isset($data['embedded_one_4'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_4');
            if (isset($data['_fields']['embedded_one_4'])) {
                $data['embedded_one_4']['_fields'] = $data['_fields']['embedded_one_4'];
            }
            $embedded->setDocumentData($data['embedded_one_4']);
            $this->data['embeddeds_one']['embedded_one_4'] = $embedded;
        }
        if (isset($data['embedded_one_5'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_5');
            if (isset($data['_fields']['embedded_one_5'])) {
                $data['embedded_one_5']['_fields'] = $data['_fields']['embedded_one_5'];
            }
            $embedded->setDocumentData($data['embedded_one_5']);
            $this->data['embeddeds_one']['embedded_one_5'] = $embedded;
        }
        if (isset($data['embedded_many_1'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_1');
            $embedded->setSavedData($data['embedded_many_1']);
            $this->data['embeddeds_many']['embedded_many_1'] = $embedded;
        }
        if (isset($data['embedded_many_2'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_2');
            $embedded->setSavedData($data['embedded_many_2']);
            $this->data['embeddeds_many']['embedded_many_2'] = $embedded;
        }
        if (isset($data['embedded_many_3'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_3');
            $embedded->setSavedData($data['embedded_many_3']);
            $this->data['embeddeds_many']['embedded_many_3'] = $embedded;
        }
        if (isset($data['embedded_many_4'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_4');
            $embedded->setSavedData($data['embedded_many_4']);
            $this->data['embeddeds_many']['embedded_many_4'] = $embedded;
        }
        if (isset($data['embedded_many_5'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_5');
            $embedded->setSavedData($data['embedded_many_5']);
            $this->data['embeddeds_many']['embedded_many_5'] = $embedded;
        }

        return $this;
    }

    /**
     * Set the "field0" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField0($value)
    {
        if (!isset($this->data['fields']['field0'])) {
            if (null !== $this->id) {
                $this->getField0();
                if ($value === $this->data['fields']['field0']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field0'] = null;
                $this->data['fields']['field0'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field0']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field0']) && !array_key_exists('field0', $this->fieldsModified)) {
            $this->fieldsModified['field0'] = $this->data['fields']['field0'];
        } elseif ($value === $this->fieldsModified['field0']) {
            unset($this->fieldsModified['field0']);
        }

        $this->data['fields']['field0'] = $value;

        return $this;
    }

    /**
     * Returns the "field0" field.
     *
     * @return mixed The field0 field.
     */
    public function getField0()
    {
        if (!isset($this->data['fields']['field0'])) {
            if ($this->isNew()) {
                $this->data['fields']['field0'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field0', $this->data['fields'])) {
                $this->addFieldCache('field0');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field0' => 1));
                if (isset($data['field0'])) {
                    $this->data['fields']['field0'] = (string) $data['field0'];
                } else {
                    $this->data['fields']['field0'] = null;
                }
            }
        }

        return $this->data['fields']['field0'];
    }

    /**
     * Set the "field1" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField1($value)
    {
        if (!isset($this->data['fields']['field1'])) {
            if (null !== $this->id) {
                $this->getField1();
                if ($value === $this->data['fields']['field1']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field1'] = null;
                $this->data['fields']['field1'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field1']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field1']) && !array_key_exists('field1', $this->fieldsModified)) {
            $this->fieldsModified['field1'] = $this->data['fields']['field1'];
        } elseif ($value === $this->fieldsModified['field1']) {
            unset($this->fieldsModified['field1']);
        }

        $this->data['fields']['field1'] = $value;

        return $this;
    }

    /**
     * Returns the "field1" field.
     *
     * @return mixed The field1 field.
     */
    public function getField1()
    {
        if (!isset($this->data['fields']['field1'])) {
            if ($this->isNew()) {
                $this->data['fields']['field1'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field1', $this->data['fields'])) {
                $this->addFieldCache('field1');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field1' => 1));
                if (isset($data['field1'])) {
                    $this->data['fields']['field1'] = (string) $data['field1'];
                } else {
                    $this->data['fields']['field1'] = null;
                }
            }
        }

        return $this->data['fields']['field1'];
    }

    /**
     * Set the "field2" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField2($value)
    {
        if (!isset($this->data['fields']['field2'])) {
            if (null !== $this->id) {
                $this->getField2();
                if ($value === $this->data['fields']['field2']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field2'] = null;
                $this->data['fields']['field2'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field2']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field2']) && !array_key_exists('field2', $this->fieldsModified)) {
            $this->fieldsModified['field2'] = $this->data['fields']['field2'];
        } elseif ($value === $this->fieldsModified['field2']) {
            unset($this->fieldsModified['field2']);
        }

        $this->data['fields']['field2'] = $value;

        return $this;
    }

    /**
     * Returns the "field2" field.
     *
     * @return mixed The field2 field.
     */
    public function getField2()
    {
        if (!isset($this->data['fields']['field2'])) {
            if ($this->isNew()) {
                $this->data['fields']['field2'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field2', $this->data['fields'])) {
                $this->addFieldCache('field2');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field2' => 1));
                if (isset($data['field2'])) {
                    $this->data['fields']['field2'] = (string) $data['field2'];
                } else {
                    $this->data['fields']['field2'] = null;
                }
            }
        }

        return $this->data['fields']['field2'];
    }

    /**
     * Set the "field3" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField3($value)
    {
        if (!isset($this->data['fields']['field3'])) {
            if (null !== $this->id) {
                $this->getField3();
                if ($value === $this->data['fields']['field3']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field3'] = null;
                $this->data['fields']['field3'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field3']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field3']) && !array_key_exists('field3', $this->fieldsModified)) {
            $this->fieldsModified['field3'] = $this->data['fields']['field3'];
        } elseif ($value === $this->fieldsModified['field3']) {
            unset($this->fieldsModified['field3']);
        }

        $this->data['fields']['field3'] = $value;

        return $this;
    }

    /**
     * Returns the "field3" field.
     *
     * @return mixed The field3 field.
     */
    public function getField3()
    {
        if (!isset($this->data['fields']['field3'])) {
            if ($this->isNew()) {
                $this->data['fields']['field3'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field3', $this->data['fields'])) {
                $this->addFieldCache('field3');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field3' => 1));
                if (isset($data['field3'])) {
                    $this->data['fields']['field3'] = (string) $data['field3'];
                } else {
                    $this->data['fields']['field3'] = null;
                }
            }
        }

        return $this->data['fields']['field3'];
    }

    /**
     * Set the "field4" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField4($value)
    {
        if (!isset($this->data['fields']['field4'])) {
            if (null !== $this->id) {
                $this->getField4();
                if ($value === $this->data['fields']['field4']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field4'] = null;
                $this->data['fields']['field4'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field4']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field4']) && !array_key_exists('field4', $this->fieldsModified)) {
            $this->fieldsModified['field4'] = $this->data['fields']['field4'];
        } elseif ($value === $this->fieldsModified['field4']) {
            unset($this->fieldsModified['field4']);
        }

        $this->data['fields']['field4'] = $value;

        return $this;
    }

    /**
     * Returns the "field4" field.
     *
     * @return mixed The field4 field.
     */
    public function getField4()
    {
        if (!isset($this->data['fields']['field4'])) {
            if ($this->isNew()) {
                $this->data['fields']['field4'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field4', $this->data['fields'])) {
                $this->addFieldCache('field4');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field4' => 1));
                if (isset($data['field4'])) {
                    $this->data['fields']['field4'] = (string) $data['field4'];
                } else {
                    $this->data['fields']['field4'] = null;
                }
            }
        }

        return $this->data['fields']['field4'];
    }

    /**
     * Set the "field5" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField5($value)
    {
        if (!isset($this->data['fields']['field5'])) {
            if (null !== $this->id) {
                $this->getField5();
                if ($value === $this->data['fields']['field5']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field5'] = null;
                $this->data['fields']['field5'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field5']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field5']) && !array_key_exists('field5', $this->fieldsModified)) {
            $this->fieldsModified['field5'] = $this->data['fields']['field5'];
        } elseif ($value === $this->fieldsModified['field5']) {
            unset($this->fieldsModified['field5']);
        }

        $this->data['fields']['field5'] = $value;

        return $this;
    }

    /**
     * Returns the "field5" field.
     *
     * @return mixed The field5 field.
     */
    public function getField5()
    {
        if (!isset($this->data['fields']['field5'])) {
            if ($this->isNew()) {
                $this->data['fields']['field5'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field5', $this->data['fields'])) {
                $this->addFieldCache('field5');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field5' => 1));
                if (isset($data['field5'])) {
                    $this->data['fields']['field5'] = (string) $data['field5'];
                } else {
                    $this->data['fields']['field5'] = null;
                }
            }
        }

        return $this->data['fields']['field5'];
    }

    /**
     * Set the "field6" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField6($value)
    {
        if (!isset($this->data['fields']['field6'])) {
            if (null !== $this->id) {
                $this->getField6();
                if ($value === $this->data['fields']['field6']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field6'] = null;
                $this->data['fields']['field6'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field6']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field6']) && !array_key_exists('field6', $this->fieldsModified)) {
            $this->fieldsModified['field6'] = $this->data['fields']['field6'];
        } elseif ($value === $this->fieldsModified['field6']) {
            unset($this->fieldsModified['field6']);
        }

        $this->data['fields']['field6'] = $value;

        return $this;
    }

    /**
     * Returns the "field6" field.
     *
     * @return mixed The field6 field.
     */
    public function getField6()
    {
        if (!isset($this->data['fields']['field6'])) {
            if ($this->isNew()) {
                $this->data['fields']['field6'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field6', $this->data['fields'])) {
                $this->addFieldCache('field6');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field6' => 1));
                if (isset($data['field6'])) {
                    $this->data['fields']['field6'] = (string) $data['field6'];
                } else {
                    $this->data['fields']['field6'] = null;
                }
            }
        }

        return $this->data['fields']['field6'];
    }

    /**
     * Set the "field7" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField7($value)
    {
        if (!isset($this->data['fields']['field7'])) {
            if (null !== $this->id) {
                $this->getField7();
                if ($value === $this->data['fields']['field7']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field7'] = null;
                $this->data['fields']['field7'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field7']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field7']) && !array_key_exists('field7', $this->fieldsModified)) {
            $this->fieldsModified['field7'] = $this->data['fields']['field7'];
        } elseif ($value === $this->fieldsModified['field7']) {
            unset($this->fieldsModified['field7']);
        }

        $this->data['fields']['field7'] = $value;

        return $this;
    }

    /**
     * Returns the "field7" field.
     *
     * @return mixed The field7 field.
     */
    public function getField7()
    {
        if (!isset($this->data['fields']['field7'])) {
            if ($this->isNew()) {
                $this->data['fields']['field7'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field7', $this->data['fields'])) {
                $this->addFieldCache('field7');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field7' => 1));
                if (isset($data['field7'])) {
                    $this->data['fields']['field7'] = (string) $data['field7'];
                } else {
                    $this->data['fields']['field7'] = null;
                }
            }
        }

        return $this->data['fields']['field7'];
    }

    /**
     * Set the "field8" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField8($value)
    {
        if (!isset($this->data['fields']['field8'])) {
            if (null !== $this->id) {
                $this->getField8();
                if ($value === $this->data['fields']['field8']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field8'] = null;
                $this->data['fields']['field8'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field8']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field8']) && !array_key_exists('field8', $this->fieldsModified)) {
            $this->fieldsModified['field8'] = $this->data['fields']['field8'];
        } elseif ($value === $this->fieldsModified['field8']) {
            unset($this->fieldsModified['field8']);
        }

        $this->data['fields']['field8'] = $value;

        return $this;
    }

    /**
     * Returns the "field8" field.
     *
     * @return mixed The field8 field.
     */
    public function getField8()
    {
        if (!isset($this->data['fields']['field8'])) {
            if ($this->isNew()) {
                $this->data['fields']['field8'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field8', $this->data['fields'])) {
                $this->addFieldCache('field8');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field8' => 1));
                if (isset($data['field8'])) {
                    $this->data['fields']['field8'] = (string) $data['field8'];
                } else {
                    $this->data['fields']['field8'] = null;
                }
            }
        }

        return $this->data['fields']['field8'];
    }

    /**
     * Set the "field9" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField9($value)
    {
        if (!isset($this->data['fields']['field9'])) {
            if (null !== $this->id) {
                $this->getField9();
                if ($value === $this->data['fields']['field9']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field9'] = null;
                $this->data['fields']['field9'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field9']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field9']) && !array_key_exists('field9', $this->fieldsModified)) {
            $this->fieldsModified['field9'] = $this->data['fields']['field9'];
        } elseif ($value === $this->fieldsModified['field9']) {
            unset($this->fieldsModified['field9']);
        }

        $this->data['fields']['field9'] = $value;

        return $this;
    }

    /**
     * Returns the "field9" field.
     *
     * @return mixed The field9 field.
     */
    public function getField9()
    {
        if (!isset($this->data['fields']['field9'])) {
            if ($this->isNew()) {
                $this->data['fields']['field9'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field9', $this->data['fields'])) {
                $this->addFieldCache('field9');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field9' => 1));
                if (isset($data['field9'])) {
                    $this->data['fields']['field9'] = (string) $data['field9'];
                } else {
                    $this->data['fields']['field9'] = null;
                }
            }
        }

        return $this->data['fields']['field9'];
    }

    /**
     * Set the "field01" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField01($value)
    {
        if (!isset($this->data['fields']['field01'])) {
            if (null !== $this->id) {
                $this->getField01();
                if ($value === $this->data['fields']['field01']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field01'] = null;
                $this->data['fields']['field01'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field01']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field01']) && !array_key_exists('field01', $this->fieldsModified)) {
            $this->fieldsModified['field01'] = $this->data['fields']['field01'];
        } elseif ($value === $this->fieldsModified['field01']) {
            unset($this->fieldsModified['field01']);
        }

        $this->data['fields']['field01'] = $value;

        return $this;
    }

    /**
     * Returns the "field01" field.
     *
     * @return mixed The field01 field.
     */
    public function getField01()
    {
        if (!isset($this->data['fields']['field01'])) {
            if ($this->isNew()) {
                $this->data['fields']['field01'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field01', $this->data['fields'])) {
                $this->addFieldCache('field01');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field01' => 1));
                if (isset($data['field01'])) {
                    $this->data['fields']['field01'] = (string) $data['field01'];
                } else {
                    $this->data['fields']['field01'] = null;
                }
            }
        }

        return $this->data['fields']['field01'];
    }

    /**
     * Set the "field11" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField11($value)
    {
        if (!isset($this->data['fields']['field11'])) {
            if (null !== $this->id) {
                $this->getField11();
                if ($value === $this->data['fields']['field11']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field11'] = null;
                $this->data['fields']['field11'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field11']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field11']) && !array_key_exists('field11', $this->fieldsModified)) {
            $this->fieldsModified['field11'] = $this->data['fields']['field11'];
        } elseif ($value === $this->fieldsModified['field11']) {
            unset($this->fieldsModified['field11']);
        }

        $this->data['fields']['field11'] = $value;

        return $this;
    }

    /**
     * Returns the "field11" field.
     *
     * @return mixed The field11 field.
     */
    public function getField11()
    {
        if (!isset($this->data['fields']['field11'])) {
            if ($this->isNew()) {
                $this->data['fields']['field11'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field11', $this->data['fields'])) {
                $this->addFieldCache('field11');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field11' => 1));
                if (isset($data['field11'])) {
                    $this->data['fields']['field11'] = (string) $data['field11'];
                } else {
                    $this->data['fields']['field11'] = null;
                }
            }
        }

        return $this->data['fields']['field11'];
    }

    /**
     * Set the "field21" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField21($value)
    {
        if (!isset($this->data['fields']['field21'])) {
            if (null !== $this->id) {
                $this->getField21();
                if ($value === $this->data['fields']['field21']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field21'] = null;
                $this->data['fields']['field21'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field21']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field21']) && !array_key_exists('field21', $this->fieldsModified)) {
            $this->fieldsModified['field21'] = $this->data['fields']['field21'];
        } elseif ($value === $this->fieldsModified['field21']) {
            unset($this->fieldsModified['field21']);
        }

        $this->data['fields']['field21'] = $value;

        return $this;
    }

    /**
     * Returns the "field21" field.
     *
     * @return mixed The field21 field.
     */
    public function getField21()
    {
        if (!isset($this->data['fields']['field21'])) {
            if ($this->isNew()) {
                $this->data['fields']['field21'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field21', $this->data['fields'])) {
                $this->addFieldCache('field21');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field21' => 1));
                if (isset($data['field21'])) {
                    $this->data['fields']['field21'] = (string) $data['field21'];
                } else {
                    $this->data['fields']['field21'] = null;
                }
            }
        }

        return $this->data['fields']['field21'];
    }

    /**
     * Set the "field31" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField31($value)
    {
        if (!isset($this->data['fields']['field31'])) {
            if (null !== $this->id) {
                $this->getField31();
                if ($value === $this->data['fields']['field31']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field31'] = null;
                $this->data['fields']['field31'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field31']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field31']) && !array_key_exists('field31', $this->fieldsModified)) {
            $this->fieldsModified['field31'] = $this->data['fields']['field31'];
        } elseif ($value === $this->fieldsModified['field31']) {
            unset($this->fieldsModified['field31']);
        }

        $this->data['fields']['field31'] = $value;

        return $this;
    }

    /**
     * Returns the "field31" field.
     *
     * @return mixed The field31 field.
     */
    public function getField31()
    {
        if (!isset($this->data['fields']['field31'])) {
            if ($this->isNew()) {
                $this->data['fields']['field31'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field31', $this->data['fields'])) {
                $this->addFieldCache('field31');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field31' => 1));
                if (isset($data['field31'])) {
                    $this->data['fields']['field31'] = (string) $data['field31'];
                } else {
                    $this->data['fields']['field31'] = null;
                }
            }
        }

        return $this->data['fields']['field31'];
    }

    /**
     * Set the "field41" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField41($value)
    {
        if (!isset($this->data['fields']['field41'])) {
            if (null !== $this->id) {
                $this->getField41();
                if ($value === $this->data['fields']['field41']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field41'] = null;
                $this->data['fields']['field41'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field41']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field41']) && !array_key_exists('field41', $this->fieldsModified)) {
            $this->fieldsModified['field41'] = $this->data['fields']['field41'];
        } elseif ($value === $this->fieldsModified['field41']) {
            unset($this->fieldsModified['field41']);
        }

        $this->data['fields']['field41'] = $value;

        return $this;
    }

    /**
     * Returns the "field41" field.
     *
     * @return mixed The field41 field.
     */
    public function getField41()
    {
        if (!isset($this->data['fields']['field41'])) {
            if ($this->isNew()) {
                $this->data['fields']['field41'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field41', $this->data['fields'])) {
                $this->addFieldCache('field41');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field41' => 1));
                if (isset($data['field41'])) {
                    $this->data['fields']['field41'] = (string) $data['field41'];
                } else {
                    $this->data['fields']['field41'] = null;
                }
            }
        }

        return $this->data['fields']['field41'];
    }

    /**
     * Set the "field51" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField51($value)
    {
        if (!isset($this->data['fields']['field51'])) {
            if (null !== $this->id) {
                $this->getField51();
                if ($value === $this->data['fields']['field51']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field51'] = null;
                $this->data['fields']['field51'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field51']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field51']) && !array_key_exists('field51', $this->fieldsModified)) {
            $this->fieldsModified['field51'] = $this->data['fields']['field51'];
        } elseif ($value === $this->fieldsModified['field51']) {
            unset($this->fieldsModified['field51']);
        }

        $this->data['fields']['field51'] = $value;

        return $this;
    }

    /**
     * Returns the "field51" field.
     *
     * @return mixed The field51 field.
     */
    public function getField51()
    {
        if (!isset($this->data['fields']['field51'])) {
            if ($this->isNew()) {
                $this->data['fields']['field51'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field51', $this->data['fields'])) {
                $this->addFieldCache('field51');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field51' => 1));
                if (isset($data['field51'])) {
                    $this->data['fields']['field51'] = (string) $data['field51'];
                } else {
                    $this->data['fields']['field51'] = null;
                }
            }
        }

        return $this->data['fields']['field51'];
    }

    /**
     * Set the "field61" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField61($value)
    {
        if (!isset($this->data['fields']['field61'])) {
            if (null !== $this->id) {
                $this->getField61();
                if ($value === $this->data['fields']['field61']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field61'] = null;
                $this->data['fields']['field61'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field61']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field61']) && !array_key_exists('field61', $this->fieldsModified)) {
            $this->fieldsModified['field61'] = $this->data['fields']['field61'];
        } elseif ($value === $this->fieldsModified['field61']) {
            unset($this->fieldsModified['field61']);
        }

        $this->data['fields']['field61'] = $value;

        return $this;
    }

    /**
     * Returns the "field61" field.
     *
     * @return mixed The field61 field.
     */
    public function getField61()
    {
        if (!isset($this->data['fields']['field61'])) {
            if ($this->isNew()) {
                $this->data['fields']['field61'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field61', $this->data['fields'])) {
                $this->addFieldCache('field61');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field61' => 1));
                if (isset($data['field61'])) {
                    $this->data['fields']['field61'] = (string) $data['field61'];
                } else {
                    $this->data['fields']['field61'] = null;
                }
            }
        }

        return $this->data['fields']['field61'];
    }

    /**
     * Set the "field71" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField71($value)
    {
        if (!isset($this->data['fields']['field71'])) {
            if (null !== $this->id) {
                $this->getField71();
                if ($value === $this->data['fields']['field71']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field71'] = null;
                $this->data['fields']['field71'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field71']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field71']) && !array_key_exists('field71', $this->fieldsModified)) {
            $this->fieldsModified['field71'] = $this->data['fields']['field71'];
        } elseif ($value === $this->fieldsModified['field71']) {
            unset($this->fieldsModified['field71']);
        }

        $this->data['fields']['field71'] = $value;

        return $this;
    }

    /**
     * Returns the "field71" field.
     *
     * @return mixed The field71 field.
     */
    public function getField71()
    {
        if (!isset($this->data['fields']['field71'])) {
            if ($this->isNew()) {
                $this->data['fields']['field71'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field71', $this->data['fields'])) {
                $this->addFieldCache('field71');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field71' => 1));
                if (isset($data['field71'])) {
                    $this->data['fields']['field71'] = (string) $data['field71'];
                } else {
                    $this->data['fields']['field71'] = null;
                }
            }
        }

        return $this->data['fields']['field71'];
    }

    /**
     * Set the "field81" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField81($value)
    {
        if (!isset($this->data['fields']['field81'])) {
            if (null !== $this->id) {
                $this->getField81();
                if ($value === $this->data['fields']['field81']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field81'] = null;
                $this->data['fields']['field81'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field81']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field81']) && !array_key_exists('field81', $this->fieldsModified)) {
            $this->fieldsModified['field81'] = $this->data['fields']['field81'];
        } elseif ($value === $this->fieldsModified['field81']) {
            unset($this->fieldsModified['field81']);
        }

        $this->data['fields']['field81'] = $value;

        return $this;
    }

    /**
     * Returns the "field81" field.
     *
     * @return mixed The field81 field.
     */
    public function getField81()
    {
        if (!isset($this->data['fields']['field81'])) {
            if ($this->isNew()) {
                $this->data['fields']['field81'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field81', $this->data['fields'])) {
                $this->addFieldCache('field81');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field81' => 1));
                if (isset($data['field81'])) {
                    $this->data['fields']['field81'] = (string) $data['field81'];
                } else {
                    $this->data['fields']['field81'] = null;
                }
            }
        }

        return $this->data['fields']['field81'];
    }

    /**
     * Set the "field91" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function setField91($value)
    {
        if (!isset($this->data['fields']['field91'])) {
            if (null !== $this->id) {
                $this->getField91();
                if ($value === $this->data['fields']['field91']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field91'] = null;
                $this->data['fields']['field91'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field91']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field91']) && !array_key_exists('field91', $this->fieldsModified)) {
            $this->fieldsModified['field91'] = $this->data['fields']['field91'];
        } elseif ($value === $this->fieldsModified['field91']) {
            unset($this->fieldsModified['field91']);
        }

        $this->data['fields']['field91'] = $value;

        return $this;
    }

    /**
     * Returns the "field91" field.
     *
     * @return mixed The field91 field.
     */
    public function getField91()
    {
        if (!isset($this->data['fields']['field91'])) {
            if ($this->isNew()) {
                $this->data['fields']['field91'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field91', $this->data['fields'])) {
                $this->addFieldCache('field91');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field91' => 1));
                if (isset($data['field91'])) {
                    $this->data['fields']['field91'] = (string) $data['field91'];
                } else {
                    $this->data['fields']['field91'] = null;
                }
            }
        }

        return $this->data['fields']['field91'];
    }

    /**
     * Set the "embedded_one_1" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one_1" embedded one.
     *
     * @return Model\Document The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne1($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_1" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_1');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_1');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_1')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_1']) ? $this->data['embeddeds_one']['embedded_one_1'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_1', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_1') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_1');
        }

        $this->data['embeddeds_one']['embedded_one_1'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_1" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one_1" embedded one.
     */
    public function getEmbeddedOne1()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_1'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_1'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_1', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_1' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_1');
                    $this->data['embeddeds_one']['embedded_one_1'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_1'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_1'];
    }

    /**
     * Set the "embedded_one_2" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one_2" embedded one.
     *
     * @return Model\Document The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne2($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_2" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_2');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_2');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_2')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_2']) ? $this->data['embeddeds_one']['embedded_one_2'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_2', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_2') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_2');
        }

        $this->data['embeddeds_one']['embedded_one_2'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_2" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one_2" embedded one.
     */
    public function getEmbeddedOne2()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_2'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_2'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_2', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_2' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_2');
                    $this->data['embeddeds_one']['embedded_one_2'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_2'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_2'];
    }

    /**
     * Set the "embedded_one_3" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one_3" embedded one.
     *
     * @return Model\Document The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne3($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_3" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_3');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_3');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_3')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_3']) ? $this->data['embeddeds_one']['embedded_one_3'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_3', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_3') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_3');
        }

        $this->data['embeddeds_one']['embedded_one_3'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_3" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one_3" embedded one.
     */
    public function getEmbeddedOne3()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_3'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_3'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_3', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_3' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_3');
                    $this->data['embeddeds_one']['embedded_one_3'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_3'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_3'];
    }

    /**
     * Set the "embedded_one_4" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one_4" embedded one.
     *
     * @return Model\Document The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne4($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_4" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_4');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_4');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_4')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_4']) ? $this->data['embeddeds_one']['embedded_one_4'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_4', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_4') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_4');
        }

        $this->data['embeddeds_one']['embedded_one_4'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_4" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one_4" embedded one.
     */
    public function getEmbeddedOne4()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_4'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_4'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_4', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_4' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_4');
                    $this->data['embeddeds_one']['embedded_one_4'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_4'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_4'];
    }

    /**
     * Set the "embedded_one_5" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one_5" embedded one.
     *
     * @return Model\Document The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne5($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_5" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_5');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_5');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_5')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_5']) ? $this->data['embeddeds_one']['embedded_one_5'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_5', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_5') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_5');
        }

        $this->data['embeddeds_one']['embedded_one_5'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_5" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one_5" embedded one.
     */
    public function getEmbeddedOne5()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_5'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_5'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_5', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_5' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_5');
                    $this->data['embeddeds_one']['embedded_one_5'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_5'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_5'];
    }

    /**
     * Returns the "embedded_many_1" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many_1" embedded many.
     */
    public function getEmbeddedMany1()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many_1'])) {
            $this->data['embeddeds_many']['embedded_many_1'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_1');
        }

        return $this->data['embeddeds_many']['embedded_many_1'];
    }

    /**
     * Returns the "embedded_many_2" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many_2" embedded many.
     */
    public function getEmbeddedMany2()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many_2'])) {
            $this->data['embeddeds_many']['embedded_many_2'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_2');
        }

        return $this->data['embeddeds_many']['embedded_many_2'];
    }

    /**
     * Returns the "embedded_many_3" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many_3" embedded many.
     */
    public function getEmbeddedMany3()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many_3'])) {
            $this->data['embeddeds_many']['embedded_many_3'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_3');
        }

        return $this->data['embeddeds_many']['embedded_many_3'];
    }

    /**
     * Returns the "embedded_many_4" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many_4" embedded many.
     */
    public function getEmbeddedMany4()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many_4'])) {
            $this->data['embeddeds_many']['embedded_many_4'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_4');
        }

        return $this->data['embeddeds_many']['embedded_many_4'];
    }

    /**
     * Returns the "embedded_many_5" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many_5" embedded many.
     */
    public function getEmbeddedMany5()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many_5'])) {
            $this->data['embeddeds_many']['embedded_many_5'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many_5');
        }

        return $this->data['embeddeds_many']['embedded_many_5'];
    }

    /**
     * Set a document data value by data name as string.
     *
     * @param string $name  The data name.
     * @param mixed  $vaule The value.
     *
     * @return mixed the data name setter return value.
     *
     * @throws \InvalidArgumentException If the data name is not valid.
     */
    public function set($name, $value)
    {
        if ('field0' == $name) {
            return $this->setField0($value);
        }
        if ('field1' == $name) {
            return $this->setField1($value);
        }
        if ('field2' == $name) {
            return $this->setField2($value);
        }
        if ('field3' == $name) {
            return $this->setField3($value);
        }
        if ('field4' == $name) {
            return $this->setField4($value);
        }
        if ('field5' == $name) {
            return $this->setField5($value);
        }
        if ('field6' == $name) {
            return $this->setField6($value);
        }
        if ('field7' == $name) {
            return $this->setField7($value);
        }
        if ('field8' == $name) {
            return $this->setField8($value);
        }
        if ('field9' == $name) {
            return $this->setField9($value);
        }
        if ('field01' == $name) {
            return $this->setField01($value);
        }
        if ('field11' == $name) {
            return $this->setField11($value);
        }
        if ('field21' == $name) {
            return $this->setField21($value);
        }
        if ('field31' == $name) {
            return $this->setField31($value);
        }
        if ('field41' == $name) {
            return $this->setField41($value);
        }
        if ('field51' == $name) {
            return $this->setField51($value);
        }
        if ('field61' == $name) {
            return $this->setField61($value);
        }
        if ('field71' == $name) {
            return $this->setField71($value);
        }
        if ('field81' == $name) {
            return $this->setField81($value);
        }
        if ('field91' == $name) {
            return $this->setField91($value);
        }
        if ('embedded_one_1' == $name) {
            return $this->setEmbeddedOne1($value);
        }
        if ('embedded_one_2' == $name) {
            return $this->setEmbeddedOne2($value);
        }
        if ('embedded_one_3' == $name) {
            return $this->setEmbeddedOne3($value);
        }
        if ('embedded_one_4' == $name) {
            return $this->setEmbeddedOne4($value);
        }
        if ('embedded_one_5' == $name) {
            return $this->setEmbeddedOne5($value);
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Returns a document data by data name as string.
     *
     * @param string $name The data name.
     *
     * @return mixed The data name getter return value.
     *
     * @throws \InvalidArgumentException If the data name is not valid.
     */
    public function get($name)
    {
        if ('field0' === $name) {
            return $this->getField0();
        }
        if ('field1' === $name) {
            return $this->getField1();
        }
        if ('field2' === $name) {
            return $this->getField2();
        }
        if ('field3' === $name) {
            return $this->getField3();
        }
        if ('field4' === $name) {
            return $this->getField4();
        }
        if ('field5' === $name) {
            return $this->getField5();
        }
        if ('field6' === $name) {
            return $this->getField6();
        }
        if ('field7' === $name) {
            return $this->getField7();
        }
        if ('field8' === $name) {
            return $this->getField8();
        }
        if ('field9' === $name) {
            return $this->getField9();
        }
        if ('field01' === $name) {
            return $this->getField01();
        }
        if ('field11' === $name) {
            return $this->getField11();
        }
        if ('field21' === $name) {
            return $this->getField21();
        }
        if ('field31' === $name) {
            return $this->getField31();
        }
        if ('field41' === $name) {
            return $this->getField41();
        }
        if ('field51' === $name) {
            return $this->getField51();
        }
        if ('field61' === $name) {
            return $this->getField61();
        }
        if ('field71' === $name) {
            return $this->getField71();
        }
        if ('field81' === $name) {
            return $this->getField81();
        }
        if ('field91' === $name) {
            return $this->getField91();
        }
        if ('embedded_one_1' === $name) {
            return $this->getEmbeddedOne1();
        }
        if ('embedded_one_2' === $name) {
            return $this->getEmbeddedOne2();
        }
        if ('embedded_one_3' === $name) {
            return $this->getEmbeddedOne3();
        }
        if ('embedded_one_4' === $name) {
            return $this->getEmbeddedOne4();
        }
        if ('embedded_one_5' === $name) {
            return $this->getEmbeddedOne5();
        }
        if ('embedded_many_1' === $name) {
            return $this->getEmbeddedMany1();
        }
        if ('embedded_many_2' === $name) {
            return $this->getEmbeddedMany2();
        }
        if ('embedded_many_3' === $name) {
            return $this->getEmbeddedMany3();
        }
        if ('embedded_many_4' === $name) {
            return $this->getEmbeddedMany4();
        }
        if ('embedded_many_5' === $name) {
            return $this->getEmbeddedMany5();
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Imports data from an array.
     *
     * @param array $data An array.
     *
     * @return Model\Document The document (fluent interface).
     */
    public function fromArray(array $array)
    {
        if (isset($array['field0'])) {
            $this->setField0($array['field0']);
        }
        if (isset($array['field1'])) {
            $this->setField1($array['field1']);
        }
        if (isset($array['field2'])) {
            $this->setField2($array['field2']);
        }
        if (isset($array['field3'])) {
            $this->setField3($array['field3']);
        }
        if (isset($array['field4'])) {
            $this->setField4($array['field4']);
        }
        if (isset($array['field5'])) {
            $this->setField5($array['field5']);
        }
        if (isset($array['field6'])) {
            $this->setField6($array['field6']);
        }
        if (isset($array['field7'])) {
            $this->setField7($array['field7']);
        }
        if (isset($array['field8'])) {
            $this->setField8($array['field8']);
        }
        if (isset($array['field9'])) {
            $this->setField9($array['field9']);
        }
        if (isset($array['field01'])) {
            $this->setField01($array['field01']);
        }
        if (isset($array['field11'])) {
            $this->setField11($array['field11']);
        }
        if (isset($array['field21'])) {
            $this->setField21($array['field21']);
        }
        if (isset($array['field31'])) {
            $this->setField31($array['field31']);
        }
        if (isset($array['field41'])) {
            $this->setField41($array['field41']);
        }
        if (isset($array['field51'])) {
            $this->setField51($array['field51']);
        }
        if (isset($array['field61'])) {
            $this->setField61($array['field61']);
        }
        if (isset($array['field71'])) {
            $this->setField71($array['field71']);
        }
        if (isset($array['field81'])) {
            $this->setField81($array['field81']);
        }
        if (isset($array['field91'])) {
            $this->setField91($array['field91']);
        }


        if (isset($array['embedded_one_1'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one_1']);
            $this->setEmbeddedOne1($embedded);
        }
        if (isset($array['embedded_one_2'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one_2']);
            $this->setEmbeddedOne2($embedded);
        }
        if (isset($array['embedded_one_3'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one_3']);
            $this->setEmbeddedOne3($embedded);
        }
        if (isset($array['embedded_one_4'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one_4']);
            $this->setEmbeddedOne4($embedded);
        }
        if (isset($array['embedded_one_5'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one_5']);
            $this->setEmbeddedOne5($embedded);
        }


        if (isset($array['embedded_many_1'])) {
            $embeddeds = array();
            foreach ($array['embedded_many_1'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany1()->replace($embeddeds);
        }
        if (isset($array['embedded_many_2'])) {
            $embeddeds = array();
            foreach ($array['embedded_many_2'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany2()->replace($embeddeds);
        }
        if (isset($array['embedded_many_3'])) {
            $embeddeds = array();
            foreach ($array['embedded_many_3'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany3()->replace($embeddeds);
        }
        if (isset($array['embedded_many_4'])) {
            $embeddeds = array();
            foreach ($array['embedded_many_4'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany4()->replace($embeddeds);
        }
        if (isset($array['embedded_many_5'])) {
            $embeddeds = array();
            foreach ($array['embedded_many_5'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany5()->replace($embeddeds);
        }

        return $this;
    }

    /**
     * Export the document data to an array.
     *
     * @return array An array with the document data.
     */
    public function toArray()
    {
        $array = array();

        if (isset($this->data['fields']['field0'])) {
            $array['field0'] = $this->data['fields']['field0'];
        }
        if (isset($this->data['fields']['field1'])) {
            $array['field1'] = $this->data['fields']['field1'];
        }
        if (isset($this->data['fields']['field2'])) {
            $array['field2'] = $this->data['fields']['field2'];
        }
        if (isset($this->data['fields']['field3'])) {
            $array['field3'] = $this->data['fields']['field3'];
        }
        if (isset($this->data['fields']['field4'])) {
            $array['field4'] = $this->data['fields']['field4'];
        }
        if (isset($this->data['fields']['field5'])) {
            $array['field5'] = $this->data['fields']['field5'];
        }
        if (isset($this->data['fields']['field6'])) {
            $array['field6'] = $this->data['fields']['field6'];
        }
        if (isset($this->data['fields']['field7'])) {
            $array['field7'] = $this->data['fields']['field7'];
        }
        if (isset($this->data['fields']['field8'])) {
            $array['field8'] = $this->data['fields']['field8'];
        }
        if (isset($this->data['fields']['field9'])) {
            $array['field9'] = $this->data['fields']['field9'];
        }
        if (isset($this->data['fields']['field01'])) {
            $array['field01'] = $this->data['fields']['field01'];
        }
        if (isset($this->data['fields']['field11'])) {
            $array['field11'] = $this->data['fields']['field11'];
        }
        if (isset($this->data['fields']['field21'])) {
            $array['field21'] = $this->data['fields']['field21'];
        }
        if (isset($this->data['fields']['field31'])) {
            $array['field31'] = $this->data['fields']['field31'];
        }
        if (isset($this->data['fields']['field41'])) {
            $array['field41'] = $this->data['fields']['field41'];
        }
        if (isset($this->data['fields']['field51'])) {
            $array['field51'] = $this->data['fields']['field51'];
        }
        if (isset($this->data['fields']['field61'])) {
            $array['field61'] = $this->data['fields']['field61'];
        }
        if (isset($this->data['fields']['field71'])) {
            $array['field71'] = $this->data['fields']['field71'];
        }
        if (isset($this->data['fields']['field81'])) {
            $array['field81'] = $this->data['fields']['field81'];
        }
        if (isset($this->data['fields']['field91'])) {
            $array['field91'] = $this->data['fields']['field91'];
        }

        return $array;
    }

    public function queryForSave()
    {
        $query = array();
        $isNew = $this->isNew();
        $reset = false;


        if (isset($this->data['fields'])) {
            if ($isNew || $reset) {
                if (isset($this->data['fields']['field0'])) {
                    $query['field0'] = (string) $this->data['fields']['field0'];
                }
                if (isset($this->data['fields']['field1'])) {
                    $query['field1'] = (string) $this->data['fields']['field1'];
                }
                if (isset($this->data['fields']['field2'])) {
                    $query['field2'] = (string) $this->data['fields']['field2'];
                }
                if (isset($this->data['fields']['field3'])) {
                    $query['field3'] = (string) $this->data['fields']['field3'];
                }
                if (isset($this->data['fields']['field4'])) {
                    $query['field4'] = (string) $this->data['fields']['field4'];
                }
                if (isset($this->data['fields']['field5'])) {
                    $query['field5'] = (string) $this->data['fields']['field5'];
                }
                if (isset($this->data['fields']['field6'])) {
                    $query['field6'] = (string) $this->data['fields']['field6'];
                }
                if (isset($this->data['fields']['field7'])) {
                    $query['field7'] = (string) $this->data['fields']['field7'];
                }
                if (isset($this->data['fields']['field8'])) {
                    $query['field8'] = (string) $this->data['fields']['field8'];
                }
                if (isset($this->data['fields']['field9'])) {
                    $query['field9'] = (string) $this->data['fields']['field9'];
                }
                if (isset($this->data['fields']['field01'])) {
                    $query['field01'] = (string) $this->data['fields']['field01'];
                }
                if (isset($this->data['fields']['field11'])) {
                    $query['field11'] = (string) $this->data['fields']['field11'];
                }
                if (isset($this->data['fields']['field21'])) {
                    $query['field21'] = (string) $this->data['fields']['field21'];
                }
                if (isset($this->data['fields']['field31'])) {
                    $query['field31'] = (string) $this->data['fields']['field31'];
                }
                if (isset($this->data['fields']['field41'])) {
                    $query['field41'] = (string) $this->data['fields']['field41'];
                }
                if (isset($this->data['fields']['field51'])) {
                    $query['field51'] = (string) $this->data['fields']['field51'];
                }
                if (isset($this->data['fields']['field61'])) {
                    $query['field61'] = (string) $this->data['fields']['field61'];
                }
                if (isset($this->data['fields']['field71'])) {
                    $query['field71'] = (string) $this->data['fields']['field71'];
                }
                if (isset($this->data['fields']['field81'])) {
                    $query['field81'] = (string) $this->data['fields']['field81'];
                }
                if (isset($this->data['fields']['field91'])) {
                    $query['field91'] = (string) $this->data['fields']['field91'];
                }
            } else {
                if (isset($this->data['fields']['field0']) || array_key_exists('field0', $this->data['fields'])) {
                    $value = $this->data['fields']['field0'];
                    $originalValue = $this->getOriginalFieldValue('field0');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field0'] = (string) $this->data['fields']['field0'];
                        } else {
                            $query['$unset']['field0'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field1']) || array_key_exists('field1', $this->data['fields'])) {
                    $value = $this->data['fields']['field1'];
                    $originalValue = $this->getOriginalFieldValue('field1');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field1'] = (string) $this->data['fields']['field1'];
                        } else {
                            $query['$unset']['field1'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field2']) || array_key_exists('field2', $this->data['fields'])) {
                    $value = $this->data['fields']['field2'];
                    $originalValue = $this->getOriginalFieldValue('field2');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field2'] = (string) $this->data['fields']['field2'];
                        } else {
                            $query['$unset']['field2'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field3']) || array_key_exists('field3', $this->data['fields'])) {
                    $value = $this->data['fields']['field3'];
                    $originalValue = $this->getOriginalFieldValue('field3');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field3'] = (string) $this->data['fields']['field3'];
                        } else {
                            $query['$unset']['field3'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field4']) || array_key_exists('field4', $this->data['fields'])) {
                    $value = $this->data['fields']['field4'];
                    $originalValue = $this->getOriginalFieldValue('field4');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field4'] = (string) $this->data['fields']['field4'];
                        } else {
                            $query['$unset']['field4'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field5']) || array_key_exists('field5', $this->data['fields'])) {
                    $value = $this->data['fields']['field5'];
                    $originalValue = $this->getOriginalFieldValue('field5');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field5'] = (string) $this->data['fields']['field5'];
                        } else {
                            $query['$unset']['field5'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field6']) || array_key_exists('field6', $this->data['fields'])) {
                    $value = $this->data['fields']['field6'];
                    $originalValue = $this->getOriginalFieldValue('field6');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field6'] = (string) $this->data['fields']['field6'];
                        } else {
                            $query['$unset']['field6'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field7']) || array_key_exists('field7', $this->data['fields'])) {
                    $value = $this->data['fields']['field7'];
                    $originalValue = $this->getOriginalFieldValue('field7');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field7'] = (string) $this->data['fields']['field7'];
                        } else {
                            $query['$unset']['field7'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field8']) || array_key_exists('field8', $this->data['fields'])) {
                    $value = $this->data['fields']['field8'];
                    $originalValue = $this->getOriginalFieldValue('field8');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field8'] = (string) $this->data['fields']['field8'];
                        } else {
                            $query['$unset']['field8'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field9']) || array_key_exists('field9', $this->data['fields'])) {
                    $value = $this->data['fields']['field9'];
                    $originalValue = $this->getOriginalFieldValue('field9');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field9'] = (string) $this->data['fields']['field9'];
                        } else {
                            $query['$unset']['field9'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field01']) || array_key_exists('field01', $this->data['fields'])) {
                    $value = $this->data['fields']['field01'];
                    $originalValue = $this->getOriginalFieldValue('field01');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field01'] = (string) $this->data['fields']['field01'];
                        } else {
                            $query['$unset']['field01'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field11']) || array_key_exists('field11', $this->data['fields'])) {
                    $value = $this->data['fields']['field11'];
                    $originalValue = $this->getOriginalFieldValue('field11');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field11'] = (string) $this->data['fields']['field11'];
                        } else {
                            $query['$unset']['field11'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field21']) || array_key_exists('field21', $this->data['fields'])) {
                    $value = $this->data['fields']['field21'];
                    $originalValue = $this->getOriginalFieldValue('field21');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field21'] = (string) $this->data['fields']['field21'];
                        } else {
                            $query['$unset']['field21'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field31']) || array_key_exists('field31', $this->data['fields'])) {
                    $value = $this->data['fields']['field31'];
                    $originalValue = $this->getOriginalFieldValue('field31');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field31'] = (string) $this->data['fields']['field31'];
                        } else {
                            $query['$unset']['field31'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field41']) || array_key_exists('field41', $this->data['fields'])) {
                    $value = $this->data['fields']['field41'];
                    $originalValue = $this->getOriginalFieldValue('field41');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field41'] = (string) $this->data['fields']['field41'];
                        } else {
                            $query['$unset']['field41'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field51']) || array_key_exists('field51', $this->data['fields'])) {
                    $value = $this->data['fields']['field51'];
                    $originalValue = $this->getOriginalFieldValue('field51');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field51'] = (string) $this->data['fields']['field51'];
                        } else {
                            $query['$unset']['field51'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field61']) || array_key_exists('field61', $this->data['fields'])) {
                    $value = $this->data['fields']['field61'];
                    $originalValue = $this->getOriginalFieldValue('field61');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field61'] = (string) $this->data['fields']['field61'];
                        } else {
                            $query['$unset']['field61'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field71']) || array_key_exists('field71', $this->data['fields'])) {
                    $value = $this->data['fields']['field71'];
                    $originalValue = $this->getOriginalFieldValue('field71');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field71'] = (string) $this->data['fields']['field71'];
                        } else {
                            $query['$unset']['field71'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field81']) || array_key_exists('field81', $this->data['fields'])) {
                    $value = $this->data['fields']['field81'];
                    $originalValue = $this->getOriginalFieldValue('field81');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field81'] = (string) $this->data['fields']['field81'];
                        } else {
                            $query['$unset']['field81'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field91']) || array_key_exists('field91', $this->data['fields'])) {
                    $value = $this->data['fields']['field91'];
                    $originalValue = $this->getOriginalFieldValue('field91');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field91'] = (string) $this->data['fields']['field91'];
                        } else {
                            $query['$unset']['field91'] = 1;
                        }
                    }
                }
            }
        }
        if (true === $reset) {
            $reset = 'deep';
        }
        if (isset($this->data['embeddeds_one'])) {
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_1');
            if (isset($this->data['embeddeds_one']['embedded_one_1'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_1'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_1']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_1', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_2');
            if (isset($this->data['embeddeds_one']['embedded_one_2'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_2'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_2']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_2', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_3');
            if (isset($this->data['embeddeds_one']['embedded_one_3'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_3'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_3']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_3', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_4');
            if (isset($this->data['embeddeds_one']['embedded_one_4'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_4'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_4']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_4', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_5');
            if (isset($this->data['embeddeds_one']['embedded_one_5'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_5'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_5']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_5', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
        }
        if (isset($this->data['embeddeds_many'])) {
            if ($isNew) {
                if (isset($this->data['embeddeds_many']['embedded_many_1'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many_1']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_2'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many_2']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_3'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many_3']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_4'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many_4']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_5'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many_5']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
            } else {
                if (isset($this->data['embeddeds_many']['embedded_many_1'])) {
                    $group = $this->data['embeddeds_many']['embedded_many_1'];
                    foreach ($group->saved() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                    $groupRap = $group->getRootAndPath();
                    foreach ($group->getAdd() as $document) {
                        $q = $document->queryForSave(array(), true);
                        $rap = $document->getRootAndPath();
                        foreach (explode('.', $rap['path']) as $name) {
                            if (0 === strpos($name, '_add')) {
                                $name = substr($name, 4);
                            }
                            $q = $q[$name];
                        }
                        $query['$pushAll'][$groupRap['path']][] = $q;
                    }
                    foreach ($group->getRemove() as $document) {
                        $rap = $document->getRootAndPath();
                        $query['$unset'][$rap['path']] = 1;
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_2'])) {
                    $group = $this->data['embeddeds_many']['embedded_many_2'];
                    foreach ($group->saved() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                    $groupRap = $group->getRootAndPath();
                    foreach ($group->getAdd() as $document) {
                        $q = $document->queryForSave(array(), true);
                        $rap = $document->getRootAndPath();
                        foreach (explode('.', $rap['path']) as $name) {
                            if (0 === strpos($name, '_add')) {
                                $name = substr($name, 4);
                            }
                            $q = $q[$name];
                        }
                        $query['$pushAll'][$groupRap['path']][] = $q;
                    }
                    foreach ($group->getRemove() as $document) {
                        $rap = $document->getRootAndPath();
                        $query['$unset'][$rap['path']] = 1;
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_3'])) {
                    $group = $this->data['embeddeds_many']['embedded_many_3'];
                    foreach ($group->saved() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                    $groupRap = $group->getRootAndPath();
                    foreach ($group->getAdd() as $document) {
                        $q = $document->queryForSave(array(), true);
                        $rap = $document->getRootAndPath();
                        foreach (explode('.', $rap['path']) as $name) {
                            if (0 === strpos($name, '_add')) {
                                $name = substr($name, 4);
                            }
                            $q = $q[$name];
                        }
                        $query['$pushAll'][$groupRap['path']][] = $q;
                    }
                    foreach ($group->getRemove() as $document) {
                        $rap = $document->getRootAndPath();
                        $query['$unset'][$rap['path']] = 1;
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_4'])) {
                    $group = $this->data['embeddeds_many']['embedded_many_4'];
                    foreach ($group->saved() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                    $groupRap = $group->getRootAndPath();
                    foreach ($group->getAdd() as $document) {
                        $q = $document->queryForSave(array(), true);
                        $rap = $document->getRootAndPath();
                        foreach (explode('.', $rap['path']) as $name) {
                            if (0 === strpos($name, '_add')) {
                                $name = substr($name, 4);
                            }
                            $q = $q[$name];
                        }
                        $query['$pushAll'][$groupRap['path']][] = $q;
                    }
                    foreach ($group->getRemove() as $document) {
                        $rap = $document->getRootAndPath();
                        $query['$unset'][$rap['path']] = 1;
                    }
                }
                if (isset($this->data['embeddeds_many']['embedded_many_5'])) {
                    $group = $this->data['embeddeds_many']['embedded_many_5'];
                    foreach ($group->saved() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                    $groupRap = $group->getRootAndPath();
                    foreach ($group->getAdd() as $document) {
                        $q = $document->queryForSave(array(), true);
                        $rap = $document->getRootAndPath();
                        foreach (explode('.', $rap['path']) as $name) {
                            if (0 === strpos($name, '_add')) {
                                $name = substr($name, 4);
                            }
                            $q = $q[$name];
                        }
                        $query['$pushAll'][$groupRap['path']][] = $q;
                    }
                    foreach ($group->getRemove() as $document) {
                        $rap = $document->getRootAndPath();
                        $query['$unset'][$rap['path']] = 1;
                    }
                }
            }
        }

        return $query;
    }
}