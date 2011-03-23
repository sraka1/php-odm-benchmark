<?php

namespace Model\Base;

/**
 * Base class of Model\ComplexDocument document.
 */
abstract class ComplexDocument extends \Mandango\Document\Document
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
     * @return Model\ComplexDocument The document (fluent interface).
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

        if (isset($data['field00'])) {
            $this->data['fields']['field00'] = (string) $data['field00'];
        } elseif (isset($data['_fields']['field00'])) {
            $this->data['fields']['field00'] = null;
        }
        if (isset($data['field01'])) {
            $this->data['fields']['field01'] = (string) $data['field01'];
        } elseif (isset($data['_fields']['field01'])) {
            $this->data['fields']['field01'] = null;
        }
        if (isset($data['field02'])) {
            $this->data['fields']['field02'] = (string) $data['field02'];
        } elseif (isset($data['_fields']['field02'])) {
            $this->data['fields']['field02'] = null;
        }
        if (isset($data['field03'])) {
            $this->data['fields']['field03'] = (string) $data['field03'];
        } elseif (isset($data['_fields']['field03'])) {
            $this->data['fields']['field03'] = null;
        }
        if (isset($data['field04'])) {
            $this->data['fields']['field04'] = (string) $data['field04'];
        } elseif (isset($data['_fields']['field04'])) {
            $this->data['fields']['field04'] = null;
        }
        if (isset($data['field05'])) {
            $this->data['fields']['field05'] = (string) $data['field05'];
        } elseif (isset($data['_fields']['field05'])) {
            $this->data['fields']['field05'] = null;
        }
        if (isset($data['field06'])) {
            $this->data['fields']['field06'] = (string) $data['field06'];
        } elseif (isset($data['_fields']['field06'])) {
            $this->data['fields']['field06'] = null;
        }
        if (isset($data['field07'])) {
            $this->data['fields']['field07'] = (string) $data['field07'];
        } elseif (isset($data['_fields']['field07'])) {
            $this->data['fields']['field07'] = null;
        }
        if (isset($data['field08'])) {
            $this->data['fields']['field08'] = (string) $data['field08'];
        } elseif (isset($data['_fields']['field08'])) {
            $this->data['fields']['field08'] = null;
        }
        if (isset($data['field09'])) {
            $this->data['fields']['field09'] = (string) $data['field09'];
        } elseif (isset($data['_fields']['field09'])) {
            $this->data['fields']['field09'] = null;
        }
        if (isset($data['field10'])) {
            $this->data['fields']['field10'] = (string) $data['field10'];
        } elseif (isset($data['_fields']['field10'])) {
            $this->data['fields']['field10'] = null;
        }
        if (isset($data['field11'])) {
            $this->data['fields']['field11'] = (string) $data['field11'];
        } elseif (isset($data['_fields']['field11'])) {
            $this->data['fields']['field11'] = null;
        }
        if (isset($data['field12'])) {
            $this->data['fields']['field12'] = (string) $data['field12'];
        } elseif (isset($data['_fields']['field12'])) {
            $this->data['fields']['field12'] = null;
        }
        if (isset($data['field13'])) {
            $this->data['fields']['field13'] = (string) $data['field13'];
        } elseif (isset($data['_fields']['field13'])) {
            $this->data['fields']['field13'] = null;
        }
        if (isset($data['field14'])) {
            $this->data['fields']['field14'] = (string) $data['field14'];
        } elseif (isset($data['_fields']['field14'])) {
            $this->data['fields']['field14'] = null;
        }
        if (isset($data['field15'])) {
            $this->data['fields']['field15'] = (string) $data['field15'];
        } elseif (isset($data['_fields']['field15'])) {
            $this->data['fields']['field15'] = null;
        }
        if (isset($data['field16'])) {
            $this->data['fields']['field16'] = (string) $data['field16'];
        } elseif (isset($data['_fields']['field16'])) {
            $this->data['fields']['field16'] = null;
        }
        if (isset($data['field17'])) {
            $this->data['fields']['field17'] = (string) $data['field17'];
        } elseif (isset($data['_fields']['field17'])) {
            $this->data['fields']['field17'] = null;
        }
        if (isset($data['field18'])) {
            $this->data['fields']['field18'] = (string) $data['field18'];
        } elseif (isset($data['_fields']['field18'])) {
            $this->data['fields']['field18'] = null;
        }
        if (isset($data['field19'])) {
            $this->data['fields']['field19'] = (string) $data['field19'];
        } elseif (isset($data['_fields']['field19'])) {
            $this->data['fields']['field19'] = null;
        }
        if (isset($data['field20'])) {
            $this->data['fields']['field20'] = (string) $data['field20'];
        } elseif (isset($data['_fields']['field20'])) {
            $this->data['fields']['field20'] = null;
        }
        if (isset($data['field21'])) {
            $this->data['fields']['field21'] = (string) $data['field21'];
        } elseif (isset($data['_fields']['field21'])) {
            $this->data['fields']['field21'] = null;
        }
        if (isset($data['field22'])) {
            $this->data['fields']['field22'] = (string) $data['field22'];
        } elseif (isset($data['_fields']['field22'])) {
            $this->data['fields']['field22'] = null;
        }
        if (isset($data['field23'])) {
            $this->data['fields']['field23'] = (string) $data['field23'];
        } elseif (isset($data['_fields']['field23'])) {
            $this->data['fields']['field23'] = null;
        }
        if (isset($data['field24'])) {
            $this->data['fields']['field24'] = (string) $data['field24'];
        } elseif (isset($data['_fields']['field24'])) {
            $this->data['fields']['field24'] = null;
        }
        if (isset($data['field25'])) {
            $this->data['fields']['field25'] = (string) $data['field25'];
        } elseif (isset($data['_fields']['field25'])) {
            $this->data['fields']['field25'] = null;
        }
        if (isset($data['field26'])) {
            $this->data['fields']['field26'] = (string) $data['field26'];
        } elseif (isset($data['_fields']['field26'])) {
            $this->data['fields']['field26'] = null;
        }
        if (isset($data['field27'])) {
            $this->data['fields']['field27'] = (string) $data['field27'];
        } elseif (isset($data['_fields']['field27'])) {
            $this->data['fields']['field27'] = null;
        }
        if (isset($data['field28'])) {
            $this->data['fields']['field28'] = (string) $data['field28'];
        } elseif (isset($data['_fields']['field28'])) {
            $this->data['fields']['field28'] = null;
        }
        if (isset($data['field29'])) {
            $this->data['fields']['field29'] = (string) $data['field29'];
        } elseif (isset($data['_fields']['field29'])) {
            $this->data['fields']['field29'] = null;
        }
        if (isset($data['embedded_one'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one');
            if (isset($data['_fields']['embedded_one'])) {
                $data['embedded_one']['_fields'] = $data['_fields']['embedded_one'];
            }
            $embedded->setDocumentData($data['embedded_one']);
            $this->data['embeddeds_one']['embedded_one'] = $embedded;
        }
        if (isset($data['embedded_one_deep'])) {
            $embedded = new \Model\DeepEmbeddedDocument();
            $embedded->setRootAndPath($this, 'embedded_one_deep');
            if (isset($data['_fields']['embedded_one_deep'])) {
                $data['embedded_one_deep']['_fields'] = $data['_fields']['embedded_one_deep'];
            }
            $embedded->setDocumentData($data['embedded_one_deep']);
            $this->data['embeddeds_one']['embedded_one_deep'] = $embedded;
        }
        if (isset($data['embedded_many'])) {
            $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many');
            $embedded->setSavedData($data['embedded_many']);
            $this->data['embeddeds_many']['embedded_many'] = $embedded;
        }

        return $this;
    }

    /**
     * Set the "field00" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField00($value)
    {
        if (!isset($this->data['fields']['field00'])) {
            if (null !== $this->id) {
                $this->getField00();
                if ($value === $this->data['fields']['field00']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field00'] = null;
                $this->data['fields']['field00'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field00']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field00']) && !array_key_exists('field00', $this->fieldsModified)) {
            $this->fieldsModified['field00'] = $this->data['fields']['field00'];
        } elseif ($value === $this->fieldsModified['field00']) {
            unset($this->fieldsModified['field00']);
        }

        $this->data['fields']['field00'] = $value;

        return $this;
    }

    /**
     * Returns the "field00" field.
     *
     * @return mixed The field00 field.
     */
    public function getField00()
    {
        if (!isset($this->data['fields']['field00'])) {
            if ($this->isNew()) {
                $this->data['fields']['field00'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field00', $this->data['fields'])) {
                $this->addFieldCache('field00');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field00' => 1));
                if (isset($data['field00'])) {
                    $this->data['fields']['field00'] = (string) $data['field00'];
                } else {
                    $this->data['fields']['field00'] = null;
                }
            }
        }

        return $this->data['fields']['field00'];
    }

    /**
     * Set the "field01" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
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
     * Set the "field02" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField02($value)
    {
        if (!isset($this->data['fields']['field02'])) {
            if (null !== $this->id) {
                $this->getField02();
                if ($value === $this->data['fields']['field02']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field02'] = null;
                $this->data['fields']['field02'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field02']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field02']) && !array_key_exists('field02', $this->fieldsModified)) {
            $this->fieldsModified['field02'] = $this->data['fields']['field02'];
        } elseif ($value === $this->fieldsModified['field02']) {
            unset($this->fieldsModified['field02']);
        }

        $this->data['fields']['field02'] = $value;

        return $this;
    }

    /**
     * Returns the "field02" field.
     *
     * @return mixed The field02 field.
     */
    public function getField02()
    {
        if (!isset($this->data['fields']['field02'])) {
            if ($this->isNew()) {
                $this->data['fields']['field02'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field02', $this->data['fields'])) {
                $this->addFieldCache('field02');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field02' => 1));
                if (isset($data['field02'])) {
                    $this->data['fields']['field02'] = (string) $data['field02'];
                } else {
                    $this->data['fields']['field02'] = null;
                }
            }
        }

        return $this->data['fields']['field02'];
    }

    /**
     * Set the "field03" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField03($value)
    {
        if (!isset($this->data['fields']['field03'])) {
            if (null !== $this->id) {
                $this->getField03();
                if ($value === $this->data['fields']['field03']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field03'] = null;
                $this->data['fields']['field03'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field03']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field03']) && !array_key_exists('field03', $this->fieldsModified)) {
            $this->fieldsModified['field03'] = $this->data['fields']['field03'];
        } elseif ($value === $this->fieldsModified['field03']) {
            unset($this->fieldsModified['field03']);
        }

        $this->data['fields']['field03'] = $value;

        return $this;
    }

    /**
     * Returns the "field03" field.
     *
     * @return mixed The field03 field.
     */
    public function getField03()
    {
        if (!isset($this->data['fields']['field03'])) {
            if ($this->isNew()) {
                $this->data['fields']['field03'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field03', $this->data['fields'])) {
                $this->addFieldCache('field03');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field03' => 1));
                if (isset($data['field03'])) {
                    $this->data['fields']['field03'] = (string) $data['field03'];
                } else {
                    $this->data['fields']['field03'] = null;
                }
            }
        }

        return $this->data['fields']['field03'];
    }

    /**
     * Set the "field04" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField04($value)
    {
        if (!isset($this->data['fields']['field04'])) {
            if (null !== $this->id) {
                $this->getField04();
                if ($value === $this->data['fields']['field04']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field04'] = null;
                $this->data['fields']['field04'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field04']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field04']) && !array_key_exists('field04', $this->fieldsModified)) {
            $this->fieldsModified['field04'] = $this->data['fields']['field04'];
        } elseif ($value === $this->fieldsModified['field04']) {
            unset($this->fieldsModified['field04']);
        }

        $this->data['fields']['field04'] = $value;

        return $this;
    }

    /**
     * Returns the "field04" field.
     *
     * @return mixed The field04 field.
     */
    public function getField04()
    {
        if (!isset($this->data['fields']['field04'])) {
            if ($this->isNew()) {
                $this->data['fields']['field04'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field04', $this->data['fields'])) {
                $this->addFieldCache('field04');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field04' => 1));
                if (isset($data['field04'])) {
                    $this->data['fields']['field04'] = (string) $data['field04'];
                } else {
                    $this->data['fields']['field04'] = null;
                }
            }
        }

        return $this->data['fields']['field04'];
    }

    /**
     * Set the "field05" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField05($value)
    {
        if (!isset($this->data['fields']['field05'])) {
            if (null !== $this->id) {
                $this->getField05();
                if ($value === $this->data['fields']['field05']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field05'] = null;
                $this->data['fields']['field05'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field05']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field05']) && !array_key_exists('field05', $this->fieldsModified)) {
            $this->fieldsModified['field05'] = $this->data['fields']['field05'];
        } elseif ($value === $this->fieldsModified['field05']) {
            unset($this->fieldsModified['field05']);
        }

        $this->data['fields']['field05'] = $value;

        return $this;
    }

    /**
     * Returns the "field05" field.
     *
     * @return mixed The field05 field.
     */
    public function getField05()
    {
        if (!isset($this->data['fields']['field05'])) {
            if ($this->isNew()) {
                $this->data['fields']['field05'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field05', $this->data['fields'])) {
                $this->addFieldCache('field05');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field05' => 1));
                if (isset($data['field05'])) {
                    $this->data['fields']['field05'] = (string) $data['field05'];
                } else {
                    $this->data['fields']['field05'] = null;
                }
            }
        }

        return $this->data['fields']['field05'];
    }

    /**
     * Set the "field06" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField06($value)
    {
        if (!isset($this->data['fields']['field06'])) {
            if (null !== $this->id) {
                $this->getField06();
                if ($value === $this->data['fields']['field06']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field06'] = null;
                $this->data['fields']['field06'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field06']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field06']) && !array_key_exists('field06', $this->fieldsModified)) {
            $this->fieldsModified['field06'] = $this->data['fields']['field06'];
        } elseif ($value === $this->fieldsModified['field06']) {
            unset($this->fieldsModified['field06']);
        }

        $this->data['fields']['field06'] = $value;

        return $this;
    }

    /**
     * Returns the "field06" field.
     *
     * @return mixed The field06 field.
     */
    public function getField06()
    {
        if (!isset($this->data['fields']['field06'])) {
            if ($this->isNew()) {
                $this->data['fields']['field06'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field06', $this->data['fields'])) {
                $this->addFieldCache('field06');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field06' => 1));
                if (isset($data['field06'])) {
                    $this->data['fields']['field06'] = (string) $data['field06'];
                } else {
                    $this->data['fields']['field06'] = null;
                }
            }
        }

        return $this->data['fields']['field06'];
    }

    /**
     * Set the "field07" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField07($value)
    {
        if (!isset($this->data['fields']['field07'])) {
            if (null !== $this->id) {
                $this->getField07();
                if ($value === $this->data['fields']['field07']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field07'] = null;
                $this->data['fields']['field07'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field07']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field07']) && !array_key_exists('field07', $this->fieldsModified)) {
            $this->fieldsModified['field07'] = $this->data['fields']['field07'];
        } elseif ($value === $this->fieldsModified['field07']) {
            unset($this->fieldsModified['field07']);
        }

        $this->data['fields']['field07'] = $value;

        return $this;
    }

    /**
     * Returns the "field07" field.
     *
     * @return mixed The field07 field.
     */
    public function getField07()
    {
        if (!isset($this->data['fields']['field07'])) {
            if ($this->isNew()) {
                $this->data['fields']['field07'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field07', $this->data['fields'])) {
                $this->addFieldCache('field07');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field07' => 1));
                if (isset($data['field07'])) {
                    $this->data['fields']['field07'] = (string) $data['field07'];
                } else {
                    $this->data['fields']['field07'] = null;
                }
            }
        }

        return $this->data['fields']['field07'];
    }

    /**
     * Set the "field08" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField08($value)
    {
        if (!isset($this->data['fields']['field08'])) {
            if (null !== $this->id) {
                $this->getField08();
                if ($value === $this->data['fields']['field08']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field08'] = null;
                $this->data['fields']['field08'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field08']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field08']) && !array_key_exists('field08', $this->fieldsModified)) {
            $this->fieldsModified['field08'] = $this->data['fields']['field08'];
        } elseif ($value === $this->fieldsModified['field08']) {
            unset($this->fieldsModified['field08']);
        }

        $this->data['fields']['field08'] = $value;

        return $this;
    }

    /**
     * Returns the "field08" field.
     *
     * @return mixed The field08 field.
     */
    public function getField08()
    {
        if (!isset($this->data['fields']['field08'])) {
            if ($this->isNew()) {
                $this->data['fields']['field08'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field08', $this->data['fields'])) {
                $this->addFieldCache('field08');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field08' => 1));
                if (isset($data['field08'])) {
                    $this->data['fields']['field08'] = (string) $data['field08'];
                } else {
                    $this->data['fields']['field08'] = null;
                }
            }
        }

        return $this->data['fields']['field08'];
    }

    /**
     * Set the "field09" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField09($value)
    {
        if (!isset($this->data['fields']['field09'])) {
            if (null !== $this->id) {
                $this->getField09();
                if ($value === $this->data['fields']['field09']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field09'] = null;
                $this->data['fields']['field09'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field09']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field09']) && !array_key_exists('field09', $this->fieldsModified)) {
            $this->fieldsModified['field09'] = $this->data['fields']['field09'];
        } elseif ($value === $this->fieldsModified['field09']) {
            unset($this->fieldsModified['field09']);
        }

        $this->data['fields']['field09'] = $value;

        return $this;
    }

    /**
     * Returns the "field09" field.
     *
     * @return mixed The field09 field.
     */
    public function getField09()
    {
        if (!isset($this->data['fields']['field09'])) {
            if ($this->isNew()) {
                $this->data['fields']['field09'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field09', $this->data['fields'])) {
                $this->addFieldCache('field09');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field09' => 1));
                if (isset($data['field09'])) {
                    $this->data['fields']['field09'] = (string) $data['field09'];
                } else {
                    $this->data['fields']['field09'] = null;
                }
            }
        }

        return $this->data['fields']['field09'];
    }

    /**
     * Set the "field10" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField10($value)
    {
        if (!isset($this->data['fields']['field10'])) {
            if (null !== $this->id) {
                $this->getField10();
                if ($value === $this->data['fields']['field10']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field10'] = null;
                $this->data['fields']['field10'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field10']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field10']) && !array_key_exists('field10', $this->fieldsModified)) {
            $this->fieldsModified['field10'] = $this->data['fields']['field10'];
        } elseif ($value === $this->fieldsModified['field10']) {
            unset($this->fieldsModified['field10']);
        }

        $this->data['fields']['field10'] = $value;

        return $this;
    }

    /**
     * Returns the "field10" field.
     *
     * @return mixed The field10 field.
     */
    public function getField10()
    {
        if (!isset($this->data['fields']['field10'])) {
            if ($this->isNew()) {
                $this->data['fields']['field10'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field10', $this->data['fields'])) {
                $this->addFieldCache('field10');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field10' => 1));
                if (isset($data['field10'])) {
                    $this->data['fields']['field10'] = (string) $data['field10'];
                } else {
                    $this->data['fields']['field10'] = null;
                }
            }
        }

        return $this->data['fields']['field10'];
    }

    /**
     * Set the "field11" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
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
     * Set the "field12" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField12($value)
    {
        if (!isset($this->data['fields']['field12'])) {
            if (null !== $this->id) {
                $this->getField12();
                if ($value === $this->data['fields']['field12']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field12'] = null;
                $this->data['fields']['field12'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field12']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field12']) && !array_key_exists('field12', $this->fieldsModified)) {
            $this->fieldsModified['field12'] = $this->data['fields']['field12'];
        } elseif ($value === $this->fieldsModified['field12']) {
            unset($this->fieldsModified['field12']);
        }

        $this->data['fields']['field12'] = $value;

        return $this;
    }

    /**
     * Returns the "field12" field.
     *
     * @return mixed The field12 field.
     */
    public function getField12()
    {
        if (!isset($this->data['fields']['field12'])) {
            if ($this->isNew()) {
                $this->data['fields']['field12'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field12', $this->data['fields'])) {
                $this->addFieldCache('field12');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field12' => 1));
                if (isset($data['field12'])) {
                    $this->data['fields']['field12'] = (string) $data['field12'];
                } else {
                    $this->data['fields']['field12'] = null;
                }
            }
        }

        return $this->data['fields']['field12'];
    }

    /**
     * Set the "field13" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField13($value)
    {
        if (!isset($this->data['fields']['field13'])) {
            if (null !== $this->id) {
                $this->getField13();
                if ($value === $this->data['fields']['field13']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field13'] = null;
                $this->data['fields']['field13'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field13']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field13']) && !array_key_exists('field13', $this->fieldsModified)) {
            $this->fieldsModified['field13'] = $this->data['fields']['field13'];
        } elseif ($value === $this->fieldsModified['field13']) {
            unset($this->fieldsModified['field13']);
        }

        $this->data['fields']['field13'] = $value;

        return $this;
    }

    /**
     * Returns the "field13" field.
     *
     * @return mixed The field13 field.
     */
    public function getField13()
    {
        if (!isset($this->data['fields']['field13'])) {
            if ($this->isNew()) {
                $this->data['fields']['field13'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field13', $this->data['fields'])) {
                $this->addFieldCache('field13');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field13' => 1));
                if (isset($data['field13'])) {
                    $this->data['fields']['field13'] = (string) $data['field13'];
                } else {
                    $this->data['fields']['field13'] = null;
                }
            }
        }

        return $this->data['fields']['field13'];
    }

    /**
     * Set the "field14" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField14($value)
    {
        if (!isset($this->data['fields']['field14'])) {
            if (null !== $this->id) {
                $this->getField14();
                if ($value === $this->data['fields']['field14']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field14'] = null;
                $this->data['fields']['field14'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field14']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field14']) && !array_key_exists('field14', $this->fieldsModified)) {
            $this->fieldsModified['field14'] = $this->data['fields']['field14'];
        } elseif ($value === $this->fieldsModified['field14']) {
            unset($this->fieldsModified['field14']);
        }

        $this->data['fields']['field14'] = $value;

        return $this;
    }

    /**
     * Returns the "field14" field.
     *
     * @return mixed The field14 field.
     */
    public function getField14()
    {
        if (!isset($this->data['fields']['field14'])) {
            if ($this->isNew()) {
                $this->data['fields']['field14'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field14', $this->data['fields'])) {
                $this->addFieldCache('field14');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field14' => 1));
                if (isset($data['field14'])) {
                    $this->data['fields']['field14'] = (string) $data['field14'];
                } else {
                    $this->data['fields']['field14'] = null;
                }
            }
        }

        return $this->data['fields']['field14'];
    }

    /**
     * Set the "field15" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField15($value)
    {
        if (!isset($this->data['fields']['field15'])) {
            if (null !== $this->id) {
                $this->getField15();
                if ($value === $this->data['fields']['field15']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field15'] = null;
                $this->data['fields']['field15'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field15']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field15']) && !array_key_exists('field15', $this->fieldsModified)) {
            $this->fieldsModified['field15'] = $this->data['fields']['field15'];
        } elseif ($value === $this->fieldsModified['field15']) {
            unset($this->fieldsModified['field15']);
        }

        $this->data['fields']['field15'] = $value;

        return $this;
    }

    /**
     * Returns the "field15" field.
     *
     * @return mixed The field15 field.
     */
    public function getField15()
    {
        if (!isset($this->data['fields']['field15'])) {
            if ($this->isNew()) {
                $this->data['fields']['field15'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field15', $this->data['fields'])) {
                $this->addFieldCache('field15');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field15' => 1));
                if (isset($data['field15'])) {
                    $this->data['fields']['field15'] = (string) $data['field15'];
                } else {
                    $this->data['fields']['field15'] = null;
                }
            }
        }

        return $this->data['fields']['field15'];
    }

    /**
     * Set the "field16" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField16($value)
    {
        if (!isset($this->data['fields']['field16'])) {
            if (null !== $this->id) {
                $this->getField16();
                if ($value === $this->data['fields']['field16']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field16'] = null;
                $this->data['fields']['field16'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field16']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field16']) && !array_key_exists('field16', $this->fieldsModified)) {
            $this->fieldsModified['field16'] = $this->data['fields']['field16'];
        } elseif ($value === $this->fieldsModified['field16']) {
            unset($this->fieldsModified['field16']);
        }

        $this->data['fields']['field16'] = $value;

        return $this;
    }

    /**
     * Returns the "field16" field.
     *
     * @return mixed The field16 field.
     */
    public function getField16()
    {
        if (!isset($this->data['fields']['field16'])) {
            if ($this->isNew()) {
                $this->data['fields']['field16'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field16', $this->data['fields'])) {
                $this->addFieldCache('field16');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field16' => 1));
                if (isset($data['field16'])) {
                    $this->data['fields']['field16'] = (string) $data['field16'];
                } else {
                    $this->data['fields']['field16'] = null;
                }
            }
        }

        return $this->data['fields']['field16'];
    }

    /**
     * Set the "field17" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField17($value)
    {
        if (!isset($this->data['fields']['field17'])) {
            if (null !== $this->id) {
                $this->getField17();
                if ($value === $this->data['fields']['field17']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field17'] = null;
                $this->data['fields']['field17'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field17']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field17']) && !array_key_exists('field17', $this->fieldsModified)) {
            $this->fieldsModified['field17'] = $this->data['fields']['field17'];
        } elseif ($value === $this->fieldsModified['field17']) {
            unset($this->fieldsModified['field17']);
        }

        $this->data['fields']['field17'] = $value;

        return $this;
    }

    /**
     * Returns the "field17" field.
     *
     * @return mixed The field17 field.
     */
    public function getField17()
    {
        if (!isset($this->data['fields']['field17'])) {
            if ($this->isNew()) {
                $this->data['fields']['field17'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field17', $this->data['fields'])) {
                $this->addFieldCache('field17');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field17' => 1));
                if (isset($data['field17'])) {
                    $this->data['fields']['field17'] = (string) $data['field17'];
                } else {
                    $this->data['fields']['field17'] = null;
                }
            }
        }

        return $this->data['fields']['field17'];
    }

    /**
     * Set the "field18" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField18($value)
    {
        if (!isset($this->data['fields']['field18'])) {
            if (null !== $this->id) {
                $this->getField18();
                if ($value === $this->data['fields']['field18']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field18'] = null;
                $this->data['fields']['field18'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field18']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field18']) && !array_key_exists('field18', $this->fieldsModified)) {
            $this->fieldsModified['field18'] = $this->data['fields']['field18'];
        } elseif ($value === $this->fieldsModified['field18']) {
            unset($this->fieldsModified['field18']);
        }

        $this->data['fields']['field18'] = $value;

        return $this;
    }

    /**
     * Returns the "field18" field.
     *
     * @return mixed The field18 field.
     */
    public function getField18()
    {
        if (!isset($this->data['fields']['field18'])) {
            if ($this->isNew()) {
                $this->data['fields']['field18'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field18', $this->data['fields'])) {
                $this->addFieldCache('field18');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field18' => 1));
                if (isset($data['field18'])) {
                    $this->data['fields']['field18'] = (string) $data['field18'];
                } else {
                    $this->data['fields']['field18'] = null;
                }
            }
        }

        return $this->data['fields']['field18'];
    }

    /**
     * Set the "field19" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField19($value)
    {
        if (!isset($this->data['fields']['field19'])) {
            if (null !== $this->id) {
                $this->getField19();
                if ($value === $this->data['fields']['field19']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field19'] = null;
                $this->data['fields']['field19'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field19']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field19']) && !array_key_exists('field19', $this->fieldsModified)) {
            $this->fieldsModified['field19'] = $this->data['fields']['field19'];
        } elseif ($value === $this->fieldsModified['field19']) {
            unset($this->fieldsModified['field19']);
        }

        $this->data['fields']['field19'] = $value;

        return $this;
    }

    /**
     * Returns the "field19" field.
     *
     * @return mixed The field19 field.
     */
    public function getField19()
    {
        if (!isset($this->data['fields']['field19'])) {
            if ($this->isNew()) {
                $this->data['fields']['field19'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field19', $this->data['fields'])) {
                $this->addFieldCache('field19');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field19' => 1));
                if (isset($data['field19'])) {
                    $this->data['fields']['field19'] = (string) $data['field19'];
                } else {
                    $this->data['fields']['field19'] = null;
                }
            }
        }

        return $this->data['fields']['field19'];
    }

    /**
     * Set the "field20" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField20($value)
    {
        if (!isset($this->data['fields']['field20'])) {
            if (null !== $this->id) {
                $this->getField20();
                if ($value === $this->data['fields']['field20']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field20'] = null;
                $this->data['fields']['field20'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field20']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field20']) && !array_key_exists('field20', $this->fieldsModified)) {
            $this->fieldsModified['field20'] = $this->data['fields']['field20'];
        } elseif ($value === $this->fieldsModified['field20']) {
            unset($this->fieldsModified['field20']);
        }

        $this->data['fields']['field20'] = $value;

        return $this;
    }

    /**
     * Returns the "field20" field.
     *
     * @return mixed The field20 field.
     */
    public function getField20()
    {
        if (!isset($this->data['fields']['field20'])) {
            if ($this->isNew()) {
                $this->data['fields']['field20'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field20', $this->data['fields'])) {
                $this->addFieldCache('field20');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field20' => 1));
                if (isset($data['field20'])) {
                    $this->data['fields']['field20'] = (string) $data['field20'];
                } else {
                    $this->data['fields']['field20'] = null;
                }
            }
        }

        return $this->data['fields']['field20'];
    }

    /**
     * Set the "field21" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
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
     * Set the "field22" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField22($value)
    {
        if (!isset($this->data['fields']['field22'])) {
            if (null !== $this->id) {
                $this->getField22();
                if ($value === $this->data['fields']['field22']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field22'] = null;
                $this->data['fields']['field22'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field22']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field22']) && !array_key_exists('field22', $this->fieldsModified)) {
            $this->fieldsModified['field22'] = $this->data['fields']['field22'];
        } elseif ($value === $this->fieldsModified['field22']) {
            unset($this->fieldsModified['field22']);
        }

        $this->data['fields']['field22'] = $value;

        return $this;
    }

    /**
     * Returns the "field22" field.
     *
     * @return mixed The field22 field.
     */
    public function getField22()
    {
        if (!isset($this->data['fields']['field22'])) {
            if ($this->isNew()) {
                $this->data['fields']['field22'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field22', $this->data['fields'])) {
                $this->addFieldCache('field22');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field22' => 1));
                if (isset($data['field22'])) {
                    $this->data['fields']['field22'] = (string) $data['field22'];
                } else {
                    $this->data['fields']['field22'] = null;
                }
            }
        }

        return $this->data['fields']['field22'];
    }

    /**
     * Set the "field23" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField23($value)
    {
        if (!isset($this->data['fields']['field23'])) {
            if (null !== $this->id) {
                $this->getField23();
                if ($value === $this->data['fields']['field23']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field23'] = null;
                $this->data['fields']['field23'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field23']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field23']) && !array_key_exists('field23', $this->fieldsModified)) {
            $this->fieldsModified['field23'] = $this->data['fields']['field23'];
        } elseif ($value === $this->fieldsModified['field23']) {
            unset($this->fieldsModified['field23']);
        }

        $this->data['fields']['field23'] = $value;

        return $this;
    }

    /**
     * Returns the "field23" field.
     *
     * @return mixed The field23 field.
     */
    public function getField23()
    {
        if (!isset($this->data['fields']['field23'])) {
            if ($this->isNew()) {
                $this->data['fields']['field23'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field23', $this->data['fields'])) {
                $this->addFieldCache('field23');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field23' => 1));
                if (isset($data['field23'])) {
                    $this->data['fields']['field23'] = (string) $data['field23'];
                } else {
                    $this->data['fields']['field23'] = null;
                }
            }
        }

        return $this->data['fields']['field23'];
    }

    /**
     * Set the "field24" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField24($value)
    {
        if (!isset($this->data['fields']['field24'])) {
            if (null !== $this->id) {
                $this->getField24();
                if ($value === $this->data['fields']['field24']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field24'] = null;
                $this->data['fields']['field24'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field24']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field24']) && !array_key_exists('field24', $this->fieldsModified)) {
            $this->fieldsModified['field24'] = $this->data['fields']['field24'];
        } elseif ($value === $this->fieldsModified['field24']) {
            unset($this->fieldsModified['field24']);
        }

        $this->data['fields']['field24'] = $value;

        return $this;
    }

    /**
     * Returns the "field24" field.
     *
     * @return mixed The field24 field.
     */
    public function getField24()
    {
        if (!isset($this->data['fields']['field24'])) {
            if ($this->isNew()) {
                $this->data['fields']['field24'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field24', $this->data['fields'])) {
                $this->addFieldCache('field24');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field24' => 1));
                if (isset($data['field24'])) {
                    $this->data['fields']['field24'] = (string) $data['field24'];
                } else {
                    $this->data['fields']['field24'] = null;
                }
            }
        }

        return $this->data['fields']['field24'];
    }

    /**
     * Set the "field25" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField25($value)
    {
        if (!isset($this->data['fields']['field25'])) {
            if (null !== $this->id) {
                $this->getField25();
                if ($value === $this->data['fields']['field25']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field25'] = null;
                $this->data['fields']['field25'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field25']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field25']) && !array_key_exists('field25', $this->fieldsModified)) {
            $this->fieldsModified['field25'] = $this->data['fields']['field25'];
        } elseif ($value === $this->fieldsModified['field25']) {
            unset($this->fieldsModified['field25']);
        }

        $this->data['fields']['field25'] = $value;

        return $this;
    }

    /**
     * Returns the "field25" field.
     *
     * @return mixed The field25 field.
     */
    public function getField25()
    {
        if (!isset($this->data['fields']['field25'])) {
            if ($this->isNew()) {
                $this->data['fields']['field25'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field25', $this->data['fields'])) {
                $this->addFieldCache('field25');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field25' => 1));
                if (isset($data['field25'])) {
                    $this->data['fields']['field25'] = (string) $data['field25'];
                } else {
                    $this->data['fields']['field25'] = null;
                }
            }
        }

        return $this->data['fields']['field25'];
    }

    /**
     * Set the "field26" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField26($value)
    {
        if (!isset($this->data['fields']['field26'])) {
            if (null !== $this->id) {
                $this->getField26();
                if ($value === $this->data['fields']['field26']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field26'] = null;
                $this->data['fields']['field26'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field26']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field26']) && !array_key_exists('field26', $this->fieldsModified)) {
            $this->fieldsModified['field26'] = $this->data['fields']['field26'];
        } elseif ($value === $this->fieldsModified['field26']) {
            unset($this->fieldsModified['field26']);
        }

        $this->data['fields']['field26'] = $value;

        return $this;
    }

    /**
     * Returns the "field26" field.
     *
     * @return mixed The field26 field.
     */
    public function getField26()
    {
        if (!isset($this->data['fields']['field26'])) {
            if ($this->isNew()) {
                $this->data['fields']['field26'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field26', $this->data['fields'])) {
                $this->addFieldCache('field26');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field26' => 1));
                if (isset($data['field26'])) {
                    $this->data['fields']['field26'] = (string) $data['field26'];
                } else {
                    $this->data['fields']['field26'] = null;
                }
            }
        }

        return $this->data['fields']['field26'];
    }

    /**
     * Set the "field27" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField27($value)
    {
        if (!isset($this->data['fields']['field27'])) {
            if (null !== $this->id) {
                $this->getField27();
                if ($value === $this->data['fields']['field27']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field27'] = null;
                $this->data['fields']['field27'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field27']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field27']) && !array_key_exists('field27', $this->fieldsModified)) {
            $this->fieldsModified['field27'] = $this->data['fields']['field27'];
        } elseif ($value === $this->fieldsModified['field27']) {
            unset($this->fieldsModified['field27']);
        }

        $this->data['fields']['field27'] = $value;

        return $this;
    }

    /**
     * Returns the "field27" field.
     *
     * @return mixed The field27 field.
     */
    public function getField27()
    {
        if (!isset($this->data['fields']['field27'])) {
            if ($this->isNew()) {
                $this->data['fields']['field27'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field27', $this->data['fields'])) {
                $this->addFieldCache('field27');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field27' => 1));
                if (isset($data['field27'])) {
                    $this->data['fields']['field27'] = (string) $data['field27'];
                } else {
                    $this->data['fields']['field27'] = null;
                }
            }
        }

        return $this->data['fields']['field27'];
    }

    /**
     * Set the "field28" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField28($value)
    {
        if (!isset($this->data['fields']['field28'])) {
            if (null !== $this->id) {
                $this->getField28();
                if ($value === $this->data['fields']['field28']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field28'] = null;
                $this->data['fields']['field28'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field28']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field28']) && !array_key_exists('field28', $this->fieldsModified)) {
            $this->fieldsModified['field28'] = $this->data['fields']['field28'];
        } elseif ($value === $this->fieldsModified['field28']) {
            unset($this->fieldsModified['field28']);
        }

        $this->data['fields']['field28'] = $value;

        return $this;
    }

    /**
     * Returns the "field28" field.
     *
     * @return mixed The field28 field.
     */
    public function getField28()
    {
        if (!isset($this->data['fields']['field28'])) {
            if ($this->isNew()) {
                $this->data['fields']['field28'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field28', $this->data['fields'])) {
                $this->addFieldCache('field28');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field28' => 1));
                if (isset($data['field28'])) {
                    $this->data['fields']['field28'] = (string) $data['field28'];
                } else {
                    $this->data['fields']['field28'] = null;
                }
            }
        }

        return $this->data['fields']['field28'];
    }

    /**
     * Set the "field29" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function setField29($value)
    {
        if (!isset($this->data['fields']['field29'])) {
            if (null !== $this->id) {
                $this->getField29();
                if ($value === $this->data['fields']['field29']) {
                    return $this;
                }
            } else {
                if (null === $value) {
                    return $this;
                }
                $this->fieldsModified['field29'] = null;
                $this->data['fields']['field29'] = $value;
                return $this;
            }
        } elseif ($value === $this->data['fields']['field29']) {
            return $this;
        }

        if (!isset($this->fieldsModified['field29']) && !array_key_exists('field29', $this->fieldsModified)) {
            $this->fieldsModified['field29'] = $this->data['fields']['field29'];
        } elseif ($value === $this->fieldsModified['field29']) {
            unset($this->fieldsModified['field29']);
        }

        $this->data['fields']['field29'] = $value;

        return $this;
    }

    /**
     * Returns the "field29" field.
     *
     * @return mixed The field29 field.
     */
    public function getField29()
    {
        if (!isset($this->data['fields']['field29'])) {
            if ($this->isNew()) {
                $this->data['fields']['field29'] = null;
            } elseif (!isset($this->data['fields']) || !array_key_exists('field29', $this->data['fields'])) {
                $this->addFieldCache('field29');
                $data = static::collection()->findOne(array('_id' => $this->id), array('field29' => 1));
                if (isset($data['field29'])) {
                    $this->data['fields']['field29'] = (string) $data['field29'];
                } else {
                    $this->data['fields']['field29'] = null;
                }
            }
        }

        return $this->data['fields']['field29'];
    }

    /**
     * Set the "embedded_one" embeded one.
     *
     * @param Model\EmbeddedDocument|null $value The "embedded_one" embedded one.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\EmbeddedDocument or null.
     */
    public function setEmbeddedOne($value)
    {
        if (null !== $value && !$value instanceof \Model\EmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one" embedded one is not an instance of Model\EmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one']) ? $this->data['embeddeds_one']['embedded_one'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one');
        }

        $this->data['embeddeds_one']['embedded_one'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one" embedded one.
     *
     * @return Model\EmbeddedDocument|null The "embedded_one" embedded one.
     */
    public function getEmbeddedOne()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\EmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one');
                    $this->data['embeddeds_one']['embedded_one'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one'];
    }

    /**
     * Set the "embedded_one_deep" embeded one.
     *
     * @param Model\DeepEmbeddedDocument|null $value The "embedded_one_deep" embedded one.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     *
     * @throws \InvalidArgumentException If the value is not an instance of Model\DeepEmbeddedDocument or null.
     */
    public function setEmbeddedOneDeep($value)
    {
        if (null !== $value && !$value instanceof \Model\DeepEmbeddedDocument) {
            throw new \InvalidArgumentException('The "embedded_one_deep" embedded one is not an instance of Model\DeepEmbeddedDocument');
        }
        if (null !== $value) {
            if ($this instanceof \Mandango\Document\Document) {
                $value->setRootAndPath($this, 'embedded_one_deep');
            } elseif ($rap = $this->getRootAndPath()) {
                $value->setRootAndPath($rap['root'], $rap['path'].'.embedded_one_deep');
            }
        }

        if (!\Mandango\Archive::has($this, 'embedded_one.embedded_one_deep')) {
            $originalValue = isset($this->data['embeddeds_one']['embedded_one_deep']) ? $this->data['embeddeds_one']['embedded_one_deep'] : null;
            \Mandango\Archive::set($this, 'embedded_one.embedded_one_deep', $originalValue);
        } elseif (\Mandango\Archive::get($this, 'embedded_one.embedded_one_deep') === $value) {
            \Mandango\Archive::remove($this, 'embedded_one.embedded_one_deep');
        }

        $this->data['embeddeds_one']['embedded_one_deep'] = $value;

        return $this;
    }

    /**
     * Returns the "embedded_one_deep" embedded one.
     *
     * @return Model\DeepEmbeddedDocument|null The "embedded_one_deep" embedded one.
     */
    public function getEmbeddedOneDeep()
    {
        if (!isset($this->data['embeddeds_one']['embedded_one_deep'])) {
            if ($this->isNew()) {
                $this->data['embeddeds_one']['embedded_one_deep'] = null;
            } elseif (!isset($this->data['embeddeds_one']) || !array_key_exists('embedded_one_deep', $this->data['embeddeds_one'])) {
                $exists = static::collection()->findOne(array('_id' => $this->id, 'embedded_one_deep' => array('$exists' => 1)));
                if ($exists) {
                    $embedded = new \Model\DeepEmbeddedDocument();
                    $embedded->setRootAndPath($this, 'embedded_one_deep');
                    $this->data['embeddeds_one']['embedded_one_deep'] = $embedded;
                } else {
                    $this->data['embeddeds_one']['embedded_one_deep'] = null;
                }
            }
        }

        return $this->data['embeddeds_one']['embedded_one_deep'];
    }

    /**
     * Returns the "embedded_many" embedded many.
     *
     * @return Mandango\Group\EmbeddedGroup The "embedded_many" embedded many.
     */
    public function getEmbeddedMany()
    {
        if (!isset($this->data['embeddeds_many']['embedded_many'])) {
            $this->data['embeddeds_many']['embedded_many'] = $embedded = new \Mandango\Group\EmbeddedGroup('Model\EmbeddedDocument');
            $embedded->setRootAndPath($this, 'embedded_many');
        }

        return $this->data['embeddeds_many']['embedded_many'];
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
        if ('field00' == $name) {
            return $this->setField00($value);
        }
        if ('field01' == $name) {
            return $this->setField01($value);
        }
        if ('field02' == $name) {
            return $this->setField02($value);
        }
        if ('field03' == $name) {
            return $this->setField03($value);
        }
        if ('field04' == $name) {
            return $this->setField04($value);
        }
        if ('field05' == $name) {
            return $this->setField05($value);
        }
        if ('field06' == $name) {
            return $this->setField06($value);
        }
        if ('field07' == $name) {
            return $this->setField07($value);
        }
        if ('field08' == $name) {
            return $this->setField08($value);
        }
        if ('field09' == $name) {
            return $this->setField09($value);
        }
        if ('field10' == $name) {
            return $this->setField10($value);
        }
        if ('field11' == $name) {
            return $this->setField11($value);
        }
        if ('field12' == $name) {
            return $this->setField12($value);
        }
        if ('field13' == $name) {
            return $this->setField13($value);
        }
        if ('field14' == $name) {
            return $this->setField14($value);
        }
        if ('field15' == $name) {
            return $this->setField15($value);
        }
        if ('field16' == $name) {
            return $this->setField16($value);
        }
        if ('field17' == $name) {
            return $this->setField17($value);
        }
        if ('field18' == $name) {
            return $this->setField18($value);
        }
        if ('field19' == $name) {
            return $this->setField19($value);
        }
        if ('field20' == $name) {
            return $this->setField20($value);
        }
        if ('field21' == $name) {
            return $this->setField21($value);
        }
        if ('field22' == $name) {
            return $this->setField22($value);
        }
        if ('field23' == $name) {
            return $this->setField23($value);
        }
        if ('field24' == $name) {
            return $this->setField24($value);
        }
        if ('field25' == $name) {
            return $this->setField25($value);
        }
        if ('field26' == $name) {
            return $this->setField26($value);
        }
        if ('field27' == $name) {
            return $this->setField27($value);
        }
        if ('field28' == $name) {
            return $this->setField28($value);
        }
        if ('field29' == $name) {
            return $this->setField29($value);
        }
        if ('embedded_one' == $name) {
            return $this->setEmbeddedOne($value);
        }
        if ('embedded_one_deep' == $name) {
            return $this->setEmbeddedOneDeep($value);
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
        if ('field00' === $name) {
            return $this->getField00();
        }
        if ('field01' === $name) {
            return $this->getField01();
        }
        if ('field02' === $name) {
            return $this->getField02();
        }
        if ('field03' === $name) {
            return $this->getField03();
        }
        if ('field04' === $name) {
            return $this->getField04();
        }
        if ('field05' === $name) {
            return $this->getField05();
        }
        if ('field06' === $name) {
            return $this->getField06();
        }
        if ('field07' === $name) {
            return $this->getField07();
        }
        if ('field08' === $name) {
            return $this->getField08();
        }
        if ('field09' === $name) {
            return $this->getField09();
        }
        if ('field10' === $name) {
            return $this->getField10();
        }
        if ('field11' === $name) {
            return $this->getField11();
        }
        if ('field12' === $name) {
            return $this->getField12();
        }
        if ('field13' === $name) {
            return $this->getField13();
        }
        if ('field14' === $name) {
            return $this->getField14();
        }
        if ('field15' === $name) {
            return $this->getField15();
        }
        if ('field16' === $name) {
            return $this->getField16();
        }
        if ('field17' === $name) {
            return $this->getField17();
        }
        if ('field18' === $name) {
            return $this->getField18();
        }
        if ('field19' === $name) {
            return $this->getField19();
        }
        if ('field20' === $name) {
            return $this->getField20();
        }
        if ('field21' === $name) {
            return $this->getField21();
        }
        if ('field22' === $name) {
            return $this->getField22();
        }
        if ('field23' === $name) {
            return $this->getField23();
        }
        if ('field24' === $name) {
            return $this->getField24();
        }
        if ('field25' === $name) {
            return $this->getField25();
        }
        if ('field26' === $name) {
            return $this->getField26();
        }
        if ('field27' === $name) {
            return $this->getField27();
        }
        if ('field28' === $name) {
            return $this->getField28();
        }
        if ('field29' === $name) {
            return $this->getField29();
        }
        if ('embedded_one' === $name) {
            return $this->getEmbeddedOne();
        }
        if ('embedded_one_deep' === $name) {
            return $this->getEmbeddedOneDeep();
        }
        if ('embedded_many' === $name) {
            return $this->getEmbeddedMany();
        }

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Imports data from an array.
     *
     * @param array $data An array.
     *
     * @return Model\ComplexDocument The document (fluent interface).
     */
    public function fromArray(array $array)
    {
        if (isset($array['field00'])) {
            $this->setField00($array['field00']);
        }
        if (isset($array['field01'])) {
            $this->setField01($array['field01']);
        }
        if (isset($array['field02'])) {
            $this->setField02($array['field02']);
        }
        if (isset($array['field03'])) {
            $this->setField03($array['field03']);
        }
        if (isset($array['field04'])) {
            $this->setField04($array['field04']);
        }
        if (isset($array['field05'])) {
            $this->setField05($array['field05']);
        }
        if (isset($array['field06'])) {
            $this->setField06($array['field06']);
        }
        if (isset($array['field07'])) {
            $this->setField07($array['field07']);
        }
        if (isset($array['field08'])) {
            $this->setField08($array['field08']);
        }
        if (isset($array['field09'])) {
            $this->setField09($array['field09']);
        }
        if (isset($array['field10'])) {
            $this->setField10($array['field10']);
        }
        if (isset($array['field11'])) {
            $this->setField11($array['field11']);
        }
        if (isset($array['field12'])) {
            $this->setField12($array['field12']);
        }
        if (isset($array['field13'])) {
            $this->setField13($array['field13']);
        }
        if (isset($array['field14'])) {
            $this->setField14($array['field14']);
        }
        if (isset($array['field15'])) {
            $this->setField15($array['field15']);
        }
        if (isset($array['field16'])) {
            $this->setField16($array['field16']);
        }
        if (isset($array['field17'])) {
            $this->setField17($array['field17']);
        }
        if (isset($array['field18'])) {
            $this->setField18($array['field18']);
        }
        if (isset($array['field19'])) {
            $this->setField19($array['field19']);
        }
        if (isset($array['field20'])) {
            $this->setField20($array['field20']);
        }
        if (isset($array['field21'])) {
            $this->setField21($array['field21']);
        }
        if (isset($array['field22'])) {
            $this->setField22($array['field22']);
        }
        if (isset($array['field23'])) {
            $this->setField23($array['field23']);
        }
        if (isset($array['field24'])) {
            $this->setField24($array['field24']);
        }
        if (isset($array['field25'])) {
            $this->setField25($array['field25']);
        }
        if (isset($array['field26'])) {
            $this->setField26($array['field26']);
        }
        if (isset($array['field27'])) {
            $this->setField27($array['field27']);
        }
        if (isset($array['field28'])) {
            $this->setField28($array['field28']);
        }
        if (isset($array['field29'])) {
            $this->setField29($array['field29']);
        }


        if (isset($array['embedded_one'])) {
            $embedded = new \Model\EmbeddedDocument();
            $embedded->fromArray($array['embedded_one']);
            $this->setEmbeddedOne($embedded);
        }
        if (isset($array['embedded_one_deep'])) {
            $embedded = new \Model\DeepEmbeddedDocument();
            $embedded->fromArray($array['embedded_one_deep']);
            $this->setEmbeddedOneDeep($embedded);
        }


        if (isset($array['embedded_many'])) {
            $embeddeds = array();
            foreach ($array['embedded_many'] as $documentData) {
                $embeddeds[] = $embedded = new \Model\EmbeddedDocument();
                $embedded->setDocumentData($documentData);
            }
            $this->getEmbeddedMany()->replace($embeddeds);
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

        if (isset($this->data['fields']['field00'])) {
            $array['field00'] = $this->data['fields']['field00'];
        }
        if (isset($this->data['fields']['field01'])) {
            $array['field01'] = $this->data['fields']['field01'];
        }
        if (isset($this->data['fields']['field02'])) {
            $array['field02'] = $this->data['fields']['field02'];
        }
        if (isset($this->data['fields']['field03'])) {
            $array['field03'] = $this->data['fields']['field03'];
        }
        if (isset($this->data['fields']['field04'])) {
            $array['field04'] = $this->data['fields']['field04'];
        }
        if (isset($this->data['fields']['field05'])) {
            $array['field05'] = $this->data['fields']['field05'];
        }
        if (isset($this->data['fields']['field06'])) {
            $array['field06'] = $this->data['fields']['field06'];
        }
        if (isset($this->data['fields']['field07'])) {
            $array['field07'] = $this->data['fields']['field07'];
        }
        if (isset($this->data['fields']['field08'])) {
            $array['field08'] = $this->data['fields']['field08'];
        }
        if (isset($this->data['fields']['field09'])) {
            $array['field09'] = $this->data['fields']['field09'];
        }
        if (isset($this->data['fields']['field10'])) {
            $array['field10'] = $this->data['fields']['field10'];
        }
        if (isset($this->data['fields']['field11'])) {
            $array['field11'] = $this->data['fields']['field11'];
        }
        if (isset($this->data['fields']['field12'])) {
            $array['field12'] = $this->data['fields']['field12'];
        }
        if (isset($this->data['fields']['field13'])) {
            $array['field13'] = $this->data['fields']['field13'];
        }
        if (isset($this->data['fields']['field14'])) {
            $array['field14'] = $this->data['fields']['field14'];
        }
        if (isset($this->data['fields']['field15'])) {
            $array['field15'] = $this->data['fields']['field15'];
        }
        if (isset($this->data['fields']['field16'])) {
            $array['field16'] = $this->data['fields']['field16'];
        }
        if (isset($this->data['fields']['field17'])) {
            $array['field17'] = $this->data['fields']['field17'];
        }
        if (isset($this->data['fields']['field18'])) {
            $array['field18'] = $this->data['fields']['field18'];
        }
        if (isset($this->data['fields']['field19'])) {
            $array['field19'] = $this->data['fields']['field19'];
        }
        if (isset($this->data['fields']['field20'])) {
            $array['field20'] = $this->data['fields']['field20'];
        }
        if (isset($this->data['fields']['field21'])) {
            $array['field21'] = $this->data['fields']['field21'];
        }
        if (isset($this->data['fields']['field22'])) {
            $array['field22'] = $this->data['fields']['field22'];
        }
        if (isset($this->data['fields']['field23'])) {
            $array['field23'] = $this->data['fields']['field23'];
        }
        if (isset($this->data['fields']['field24'])) {
            $array['field24'] = $this->data['fields']['field24'];
        }
        if (isset($this->data['fields']['field25'])) {
            $array['field25'] = $this->data['fields']['field25'];
        }
        if (isset($this->data['fields']['field26'])) {
            $array['field26'] = $this->data['fields']['field26'];
        }
        if (isset($this->data['fields']['field27'])) {
            $array['field27'] = $this->data['fields']['field27'];
        }
        if (isset($this->data['fields']['field28'])) {
            $array['field28'] = $this->data['fields']['field28'];
        }
        if (isset($this->data['fields']['field29'])) {
            $array['field29'] = $this->data['fields']['field29'];
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
                if (isset($this->data['fields']['field00'])) {
                    $query['field00'] = (string) $this->data['fields']['field00'];
                }
                if (isset($this->data['fields']['field01'])) {
                    $query['field01'] = (string) $this->data['fields']['field01'];
                }
                if (isset($this->data['fields']['field02'])) {
                    $query['field02'] = (string) $this->data['fields']['field02'];
                }
                if (isset($this->data['fields']['field03'])) {
                    $query['field03'] = (string) $this->data['fields']['field03'];
                }
                if (isset($this->data['fields']['field04'])) {
                    $query['field04'] = (string) $this->data['fields']['field04'];
                }
                if (isset($this->data['fields']['field05'])) {
                    $query['field05'] = (string) $this->data['fields']['field05'];
                }
                if (isset($this->data['fields']['field06'])) {
                    $query['field06'] = (string) $this->data['fields']['field06'];
                }
                if (isset($this->data['fields']['field07'])) {
                    $query['field07'] = (string) $this->data['fields']['field07'];
                }
                if (isset($this->data['fields']['field08'])) {
                    $query['field08'] = (string) $this->data['fields']['field08'];
                }
                if (isset($this->data['fields']['field09'])) {
                    $query['field09'] = (string) $this->data['fields']['field09'];
                }
                if (isset($this->data['fields']['field10'])) {
                    $query['field10'] = (string) $this->data['fields']['field10'];
                }
                if (isset($this->data['fields']['field11'])) {
                    $query['field11'] = (string) $this->data['fields']['field11'];
                }
                if (isset($this->data['fields']['field12'])) {
                    $query['field12'] = (string) $this->data['fields']['field12'];
                }
                if (isset($this->data['fields']['field13'])) {
                    $query['field13'] = (string) $this->data['fields']['field13'];
                }
                if (isset($this->data['fields']['field14'])) {
                    $query['field14'] = (string) $this->data['fields']['field14'];
                }
                if (isset($this->data['fields']['field15'])) {
                    $query['field15'] = (string) $this->data['fields']['field15'];
                }
                if (isset($this->data['fields']['field16'])) {
                    $query['field16'] = (string) $this->data['fields']['field16'];
                }
                if (isset($this->data['fields']['field17'])) {
                    $query['field17'] = (string) $this->data['fields']['field17'];
                }
                if (isset($this->data['fields']['field18'])) {
                    $query['field18'] = (string) $this->data['fields']['field18'];
                }
                if (isset($this->data['fields']['field19'])) {
                    $query['field19'] = (string) $this->data['fields']['field19'];
                }
                if (isset($this->data['fields']['field20'])) {
                    $query['field20'] = (string) $this->data['fields']['field20'];
                }
                if (isset($this->data['fields']['field21'])) {
                    $query['field21'] = (string) $this->data['fields']['field21'];
                }
                if (isset($this->data['fields']['field22'])) {
                    $query['field22'] = (string) $this->data['fields']['field22'];
                }
                if (isset($this->data['fields']['field23'])) {
                    $query['field23'] = (string) $this->data['fields']['field23'];
                }
                if (isset($this->data['fields']['field24'])) {
                    $query['field24'] = (string) $this->data['fields']['field24'];
                }
                if (isset($this->data['fields']['field25'])) {
                    $query['field25'] = (string) $this->data['fields']['field25'];
                }
                if (isset($this->data['fields']['field26'])) {
                    $query['field26'] = (string) $this->data['fields']['field26'];
                }
                if (isset($this->data['fields']['field27'])) {
                    $query['field27'] = (string) $this->data['fields']['field27'];
                }
                if (isset($this->data['fields']['field28'])) {
                    $query['field28'] = (string) $this->data['fields']['field28'];
                }
                if (isset($this->data['fields']['field29'])) {
                    $query['field29'] = (string) $this->data['fields']['field29'];
                }
            } else {
                if (isset($this->data['fields']['field00']) || array_key_exists('field00', $this->data['fields'])) {
                    $value = $this->data['fields']['field00'];
                    $originalValue = $this->getOriginalFieldValue('field00');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field00'] = (string) $this->data['fields']['field00'];
                        } else {
                            $query['$unset']['field00'] = 1;
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
                if (isset($this->data['fields']['field02']) || array_key_exists('field02', $this->data['fields'])) {
                    $value = $this->data['fields']['field02'];
                    $originalValue = $this->getOriginalFieldValue('field02');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field02'] = (string) $this->data['fields']['field02'];
                        } else {
                            $query['$unset']['field02'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field03']) || array_key_exists('field03', $this->data['fields'])) {
                    $value = $this->data['fields']['field03'];
                    $originalValue = $this->getOriginalFieldValue('field03');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field03'] = (string) $this->data['fields']['field03'];
                        } else {
                            $query['$unset']['field03'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field04']) || array_key_exists('field04', $this->data['fields'])) {
                    $value = $this->data['fields']['field04'];
                    $originalValue = $this->getOriginalFieldValue('field04');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field04'] = (string) $this->data['fields']['field04'];
                        } else {
                            $query['$unset']['field04'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field05']) || array_key_exists('field05', $this->data['fields'])) {
                    $value = $this->data['fields']['field05'];
                    $originalValue = $this->getOriginalFieldValue('field05');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field05'] = (string) $this->data['fields']['field05'];
                        } else {
                            $query['$unset']['field05'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field06']) || array_key_exists('field06', $this->data['fields'])) {
                    $value = $this->data['fields']['field06'];
                    $originalValue = $this->getOriginalFieldValue('field06');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field06'] = (string) $this->data['fields']['field06'];
                        } else {
                            $query['$unset']['field06'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field07']) || array_key_exists('field07', $this->data['fields'])) {
                    $value = $this->data['fields']['field07'];
                    $originalValue = $this->getOriginalFieldValue('field07');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field07'] = (string) $this->data['fields']['field07'];
                        } else {
                            $query['$unset']['field07'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field08']) || array_key_exists('field08', $this->data['fields'])) {
                    $value = $this->data['fields']['field08'];
                    $originalValue = $this->getOriginalFieldValue('field08');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field08'] = (string) $this->data['fields']['field08'];
                        } else {
                            $query['$unset']['field08'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field09']) || array_key_exists('field09', $this->data['fields'])) {
                    $value = $this->data['fields']['field09'];
                    $originalValue = $this->getOriginalFieldValue('field09');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field09'] = (string) $this->data['fields']['field09'];
                        } else {
                            $query['$unset']['field09'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field10']) || array_key_exists('field10', $this->data['fields'])) {
                    $value = $this->data['fields']['field10'];
                    $originalValue = $this->getOriginalFieldValue('field10');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field10'] = (string) $this->data['fields']['field10'];
                        } else {
                            $query['$unset']['field10'] = 1;
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
                if (isset($this->data['fields']['field12']) || array_key_exists('field12', $this->data['fields'])) {
                    $value = $this->data['fields']['field12'];
                    $originalValue = $this->getOriginalFieldValue('field12');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field12'] = (string) $this->data['fields']['field12'];
                        } else {
                            $query['$unset']['field12'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field13']) || array_key_exists('field13', $this->data['fields'])) {
                    $value = $this->data['fields']['field13'];
                    $originalValue = $this->getOriginalFieldValue('field13');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field13'] = (string) $this->data['fields']['field13'];
                        } else {
                            $query['$unset']['field13'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field14']) || array_key_exists('field14', $this->data['fields'])) {
                    $value = $this->data['fields']['field14'];
                    $originalValue = $this->getOriginalFieldValue('field14');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field14'] = (string) $this->data['fields']['field14'];
                        } else {
                            $query['$unset']['field14'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field15']) || array_key_exists('field15', $this->data['fields'])) {
                    $value = $this->data['fields']['field15'];
                    $originalValue = $this->getOriginalFieldValue('field15');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field15'] = (string) $this->data['fields']['field15'];
                        } else {
                            $query['$unset']['field15'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field16']) || array_key_exists('field16', $this->data['fields'])) {
                    $value = $this->data['fields']['field16'];
                    $originalValue = $this->getOriginalFieldValue('field16');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field16'] = (string) $this->data['fields']['field16'];
                        } else {
                            $query['$unset']['field16'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field17']) || array_key_exists('field17', $this->data['fields'])) {
                    $value = $this->data['fields']['field17'];
                    $originalValue = $this->getOriginalFieldValue('field17');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field17'] = (string) $this->data['fields']['field17'];
                        } else {
                            $query['$unset']['field17'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field18']) || array_key_exists('field18', $this->data['fields'])) {
                    $value = $this->data['fields']['field18'];
                    $originalValue = $this->getOriginalFieldValue('field18');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field18'] = (string) $this->data['fields']['field18'];
                        } else {
                            $query['$unset']['field18'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field19']) || array_key_exists('field19', $this->data['fields'])) {
                    $value = $this->data['fields']['field19'];
                    $originalValue = $this->getOriginalFieldValue('field19');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field19'] = (string) $this->data['fields']['field19'];
                        } else {
                            $query['$unset']['field19'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field20']) || array_key_exists('field20', $this->data['fields'])) {
                    $value = $this->data['fields']['field20'];
                    $originalValue = $this->getOriginalFieldValue('field20');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field20'] = (string) $this->data['fields']['field20'];
                        } else {
                            $query['$unset']['field20'] = 1;
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
                if (isset($this->data['fields']['field22']) || array_key_exists('field22', $this->data['fields'])) {
                    $value = $this->data['fields']['field22'];
                    $originalValue = $this->getOriginalFieldValue('field22');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field22'] = (string) $this->data['fields']['field22'];
                        } else {
                            $query['$unset']['field22'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field23']) || array_key_exists('field23', $this->data['fields'])) {
                    $value = $this->data['fields']['field23'];
                    $originalValue = $this->getOriginalFieldValue('field23');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field23'] = (string) $this->data['fields']['field23'];
                        } else {
                            $query['$unset']['field23'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field24']) || array_key_exists('field24', $this->data['fields'])) {
                    $value = $this->data['fields']['field24'];
                    $originalValue = $this->getOriginalFieldValue('field24');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field24'] = (string) $this->data['fields']['field24'];
                        } else {
                            $query['$unset']['field24'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field25']) || array_key_exists('field25', $this->data['fields'])) {
                    $value = $this->data['fields']['field25'];
                    $originalValue = $this->getOriginalFieldValue('field25');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field25'] = (string) $this->data['fields']['field25'];
                        } else {
                            $query['$unset']['field25'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field26']) || array_key_exists('field26', $this->data['fields'])) {
                    $value = $this->data['fields']['field26'];
                    $originalValue = $this->getOriginalFieldValue('field26');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field26'] = (string) $this->data['fields']['field26'];
                        } else {
                            $query['$unset']['field26'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field27']) || array_key_exists('field27', $this->data['fields'])) {
                    $value = $this->data['fields']['field27'];
                    $originalValue = $this->getOriginalFieldValue('field27');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field27'] = (string) $this->data['fields']['field27'];
                        } else {
                            $query['$unset']['field27'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field28']) || array_key_exists('field28', $this->data['fields'])) {
                    $value = $this->data['fields']['field28'];
                    $originalValue = $this->getOriginalFieldValue('field28');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field28'] = (string) $this->data['fields']['field28'];
                        } else {
                            $query['$unset']['field28'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field29']) || array_key_exists('field29', $this->data['fields'])) {
                    $value = $this->data['fields']['field29'];
                    $originalValue = $this->getOriginalFieldValue('field29');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set']['field29'] = (string) $this->data['fields']['field29'];
                        } else {
                            $query['$unset']['field29'] = 1;
                        }
                    }
                }
            }
        }
        if (true === $reset) {
            $reset = 'deep';
        }
        if (isset($this->data['embeddeds_one'])) {
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one');
            if (isset($this->data['embeddeds_one']['embedded_one'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
            $originalValue = $this->getOriginalEmbeddedOneValue('embedded_one_deep');
            if (isset($this->data['embeddeds_one']['embedded_one_deep'])) {
                $resetValue = $reset ? $reset : (!$isNew && $this->data['embeddeds_one']['embedded_one_deep'] !== $originalValue);
                $query = $this->data['embeddeds_one']['embedded_one_deep']->queryForSave($query, $isNew, $resetValue);
            } elseif (array_key_exists('embedded_one_deep', $this->data['embeddeds_one'])) {
                if ($originalValue) {
                    $rap = $originalValue->getRootAndPath();
                    $query['$unset'][$rap['path']] = 1;
                }
            }
        }
        if (isset($this->data['embeddeds_many'])) {
            if ($isNew) {
                if (isset($this->data['embeddeds_many']['embedded_many'])) {
                    foreach ($this->data['embeddeds_many']['embedded_many']->getAdd() as $document) {
                        $query = $document->queryForSave($query, $isNew);
                    }
                }
            } else {
                if (isset($this->data['embeddeds_many']['embedded_many'])) {
                    $group = $this->data['embeddeds_many']['embedded_many'];
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