<?php

namespace Model\Base;

/**
 * Base class of Model\EmbeddedDocument document.
 */
abstract class EmbeddedDocument extends \Mandango\Document\EmbeddedDocument
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
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setDocumentData($data, $clean = false)
    {
        if ($clean) {
            $this->data = array();
            $this->fieldsModified = array();
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



        return $this;
    }

    /**
     * Set the "field0" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField0($value)
    {
        if (!isset($this->data['fields']['field0'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field0', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field0';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field0'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field0'])) {
                $this->data['fields']['field0'] = null;
            }
        }

        return $this->data['fields']['field0'];
    }

    /**
     * Set the "field1" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField1($value)
    {
        if (!isset($this->data['fields']['field1'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field1', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field1';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field1'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field1'])) {
                $this->data['fields']['field1'] = null;
            }
        }

        return $this->data['fields']['field1'];
    }

    /**
     * Set the "field2" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField2($value)
    {
        if (!isset($this->data['fields']['field2'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field2', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field2';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field2'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field2'])) {
                $this->data['fields']['field2'] = null;
            }
        }

        return $this->data['fields']['field2'];
    }

    /**
     * Set the "field3" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField3($value)
    {
        if (!isset($this->data['fields']['field3'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field3', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field3';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field3'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field3'])) {
                $this->data['fields']['field3'] = null;
            }
        }

        return $this->data['fields']['field3'];
    }

    /**
     * Set the "field4" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField4($value)
    {
        if (!isset($this->data['fields']['field4'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field4', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field4';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field4'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field4'])) {
                $this->data['fields']['field4'] = null;
            }
        }

        return $this->data['fields']['field4'];
    }

    /**
     * Set the "field5" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField5($value)
    {
        if (!isset($this->data['fields']['field5'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field5', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field5';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field5'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field5'])) {
                $this->data['fields']['field5'] = null;
            }
        }

        return $this->data['fields']['field5'];
    }

    /**
     * Set the "field6" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField6($value)
    {
        if (!isset($this->data['fields']['field6'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field6', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field6';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field6'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field6'])) {
                $this->data['fields']['field6'] = null;
            }
        }

        return $this->data['fields']['field6'];
    }

    /**
     * Set the "field7" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField7($value)
    {
        if (!isset($this->data['fields']['field7'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field7', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field7';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field7'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field7'])) {
                $this->data['fields']['field7'] = null;
            }
        }

        return $this->data['fields']['field7'];
    }

    /**
     * Set the "field8" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField8($value)
    {
        if (!isset($this->data['fields']['field8'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field8', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field8';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field8'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field8'])) {
                $this->data['fields']['field8'] = null;
            }
        }

        return $this->data['fields']['field8'];
    }

    /**
     * Set the "field9" field.
     *
     * @param mixed $value The value.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
     */
    public function setField9($value)
    {
        if (!isset($this->data['fields']['field9'])) {
            if (($rap = $this->getRootAndPath()) && !$rap['root']->isNew()) {
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
            if (
                (!isset($this->data['fields']) || !array_key_exists('field9', $this->data['fields']))
                &&
                ($rap = $this->getRootAndPath())
                &&
                !$this->isEmbeddedOneChangedInParent()
            ) {
                $field = $rap['path'].'.field9';
                $rap['root']->addFieldCache($field);
                $collection = call_user_func(array(get_class($rap['root']), 'collection'));
                $data = $collection->findOne(array('_id' => $rap['root']->getId()), array($field => 1));
                foreach (explode('.', $field) as $key) {
                    if (!isset($data[$key])) {
                        $data = null;
                        break;
                    }
                    $data = $data[$key];
                }
                if (null !== $data) {
                    $this->data['fields']['field9'] = (string) $data;
                }
            }
            if (!isset($this->data['fields']['field9'])) {
                $this->data['fields']['field9'] = null;
            }
        }

        return $this->data['fields']['field9'];
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

        throw new \InvalidArgumentException(sprintf('The document data "%s" is not valid.', $name));
    }

    /**
     * Imports data from an array.
     *
     * @param array $data An array.
     *
     * @return Model\EmbeddedDocument The document (fluent interface).
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

        return $array;
    }

    public function queryForSave($query, $isNew, $reset = false)
    {
        if (isset($this->data['fields'])) {
            if ($isNew || $reset) {
                $rootQuery = $query;
                $query =& $rootQuery;
                $rap = $this->getRootAndPath();
                if (true === $reset) {
                    $path = array('$set', $rap['path']);
                } elseif ('deep' == $reset) {
                    $path = explode('.', '$set.'.$rap['path']);
                } else {
                    $path = explode('.', $rap['path']);
                }
                foreach ($path as $name) {
                    if (0 === strpos($name, '_add')) {
                        $name = substr($name, 4);
                    }
                    if (!isset($query[$name])) {
                        $query[$name] = array();
                    }
                    $query =& $query[$name];
                }

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

                unset($query);
                $query = $rootQuery;
            } else {
                $rap = $this->getRootAndPath();
                $documentPath = $rap['path'];

                if (isset($this->data['fields']['field0']) || array_key_exists('field0', $this->data['fields'])) {
                    $value = $this->data['fields']['field0'];
                    $originalValue = $this->getOriginalFieldValue('field0');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field0'] = (string) $this->data['fields']['field0'];
                        } else {
                            $query['$unset'][$documentPath.'.field0'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field1']) || array_key_exists('field1', $this->data['fields'])) {
                    $value = $this->data['fields']['field1'];
                    $originalValue = $this->getOriginalFieldValue('field1');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field1'] = (string) $this->data['fields']['field1'];
                        } else {
                            $query['$unset'][$documentPath.'.field1'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field2']) || array_key_exists('field2', $this->data['fields'])) {
                    $value = $this->data['fields']['field2'];
                    $originalValue = $this->getOriginalFieldValue('field2');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field2'] = (string) $this->data['fields']['field2'];
                        } else {
                            $query['$unset'][$documentPath.'.field2'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field3']) || array_key_exists('field3', $this->data['fields'])) {
                    $value = $this->data['fields']['field3'];
                    $originalValue = $this->getOriginalFieldValue('field3');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field3'] = (string) $this->data['fields']['field3'];
                        } else {
                            $query['$unset'][$documentPath.'.field3'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field4']) || array_key_exists('field4', $this->data['fields'])) {
                    $value = $this->data['fields']['field4'];
                    $originalValue = $this->getOriginalFieldValue('field4');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field4'] = (string) $this->data['fields']['field4'];
                        } else {
                            $query['$unset'][$documentPath.'.field4'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field5']) || array_key_exists('field5', $this->data['fields'])) {
                    $value = $this->data['fields']['field5'];
                    $originalValue = $this->getOriginalFieldValue('field5');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field5'] = (string) $this->data['fields']['field5'];
                        } else {
                            $query['$unset'][$documentPath.'.field5'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field6']) || array_key_exists('field6', $this->data['fields'])) {
                    $value = $this->data['fields']['field6'];
                    $originalValue = $this->getOriginalFieldValue('field6');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field6'] = (string) $this->data['fields']['field6'];
                        } else {
                            $query['$unset'][$documentPath.'.field6'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field7']) || array_key_exists('field7', $this->data['fields'])) {
                    $value = $this->data['fields']['field7'];
                    $originalValue = $this->getOriginalFieldValue('field7');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field7'] = (string) $this->data['fields']['field7'];
                        } else {
                            $query['$unset'][$documentPath.'.field7'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field8']) || array_key_exists('field8', $this->data['fields'])) {
                    $value = $this->data['fields']['field8'];
                    $originalValue = $this->getOriginalFieldValue('field8');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field8'] = (string) $this->data['fields']['field8'];
                        } else {
                            $query['$unset'][$documentPath.'.field8'] = 1;
                        }
                    }
                }
                if (isset($this->data['fields']['field9']) || array_key_exists('field9', $this->data['fields'])) {
                    $value = $this->data['fields']['field9'];
                    $originalValue = $this->getOriginalFieldValue('field9');
                    if ($value !== $originalValue) {
                        if (null !== $value) {
                            $query['$set'][$documentPath.'.field9'] = (string) $this->data['fields']['field9'];
                        } else {
                            $query['$unset'][$documentPath.'.field9'] = 1;
                        }
                    }
                }
            }
        }
        if (true === $reset) {
            $reset = 'deep';
        }



        return $query;
    }
}