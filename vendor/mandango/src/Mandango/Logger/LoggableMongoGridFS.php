<?php

/*
 * Copyright 2010 Pablo Díez <pablodip@gmail.com>
 *
 * This file is part of Mandango.
 *
 * Mandango is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Mandango is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Mandango. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Mandango\Logger;

/**
 * A loggable MongoGridFS.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 */
class LoggableMongoGridFS extends \MongoGridFS
{
    protected $db;

    protected $time;

    /**
     * Constructor.
     *
     * @param \Mandango\Logger\LoggableMongoDB $db     A LoggableMongoDB instance.
     * @param string                           $prefix The prefix (optional, fs by default).
     */
    public function __construct(LoggableMongoDB $db, $prefix = 'fs')
    {
        $this->db = $db;
        $this->time = new Time();

        parent::__construct($db, $prefix);
    }


    /**
     * Returns the LoggableMongoDB.
     *
     * @return \Mandango\Logger\LoggableMongoDB The LoggableMongoDB
     */
    public function getDB()
    {
        return $this->db;
    }

    /**
     * Log.
     *
     * @param array $log The log.
     */
    public function log(array $log)
    {
        $this->db->log(array_merge(array(
            'collection' => $this->getName(),
            'gridfs'     => 1,
        ), $log));
    }

    /**
     * delete.
     */
    public function delete($id)
    {
        $this->time->start();
        $return = parent::delete($id);
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'delete',
            'id'   => $id,
            'time' => $time,
        ));

        return $return;
    }

    /**
     * get.
     */
    public function get($id)
    {
        $this->time->start();
        $return = parent::get($id);
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'get',
            'id'   => $id,
            'time' => $time,
        ));

        return $return;
    }

    /**
     * put.
     */
    public function put($filename, array $extra = array())
    {
        $this->time->start();
        $return = parent::put($filename, $extra);
        $time = $this->time->stop();

        $this->log(array(
            'type'     => 'put',
            'filename' => $filename,
            'extra'    => $extra,
            'time'     => $time,
        ));
    }

    /**
     * storeBytes.
     */
    public function storeBytes($bytes, array $extra, array $options = array())
    {
        $this->time->start();
        $return = parent::storeBytes($bytes, $extra, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'       => 'storeBytes',
            'bytes_sha1' => sha1($bytes),
            'extra'      => $extra,
            'options'    => $options,
            'time'       => $time,
        ));

        return $return;
    }

    /**
     * storeFile.
     */
    public function storeFile($filename, array $extra, array $options = array())
    {
        $this->time->start();
        $return = parent::storeFile($filename, $extra, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'      => 'storeFile',
            'filename'  => $filename,
            'extra'     => $extra,
            'options'   => $options,
            'time'      => $time,
        ));

        return $return;
    }

    /**
     * storeUpload.
     */
    public function storeUpload($name, $filename)
    {
        $this->time->start();
        $return = parent::storeUpload($name, $filename);
        $time = $this->time->stop();

        $this->log(array(
            'type'     => 'storeUpload',
            'name'     => $name,
            'filename' => $filename,
            'time'     => $time,
        ));

        return $return;
    }

    /**
     * batchInsert.
     */
    public function batchInsert(array $a, array $options = array())
    {
        $this->time->start();
        $return = parent::batchInsert($a, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'    => 'batchInsert',
            'nb'      => count($a),
            'data'    => $a,
            'options' => $options,
            'time'    => $time,
        ));

        return $return;
    }

    /**
     * count.
     */
    public function count(array $query = array(), $limit = 0, $skip = 0)
    {
        $this->time->start();
        $return = parent::count($query, $limit, $skip);
        $time = $this->time->stop();

        $this->log(array(
            'type'  => 'count',
            'query' => $query,
            'limit' => $limit,
            'skip'  => $skip,
            'time'  => $time,
        ));

        return $return;
    }

    /**
     * deleteIndex.
     */
    public function deleteIndex($keys)
    {
        $this->time->start();
        $return = parent::deleteIndex($keys);
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'deleteIndex',
            'keys' => $keys,
            'time' => $time,
        ));

        return $return;
    }

    /**
     * deleteIndexes.
     */
    public function deleteIndexes()
    {
        $this->time->start();
        $return = parent::deleteIndexes();
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'deleteIndexes',
            'time' => $time,
        ));

        return $return;
    }

    /**
     * drop.
     */
    public function drop()
    {
        $this->time->start();
        $return = parent::drop();
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'drop',
            'time' => $time,
        ));

        return $return;
    }

    /**
     * ensureIndex.
     */
    public function ensureIndex(array $keys, array $options)
    {
        $this->time->start();
        $return = parent::ensureIndex($keys, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'    => 'ensureIndex',
            'keys'    => $keys,
            'options' => $options,
            'time'    => $time,
        ));

        return $return;
    }

    /*
     * find.
     */
    public function find(array $query = array(), array $fields = array())
    {
        return new LoggableMongoGridFSCursor($this, $query, $fields);
    }

    /*
     * findOne.
     */
    public function findOne(array $query = array(), array $fields = array())
    {
        $cursor = new LoggableMongoGridFSCursor($this, $query, $fields, 'findOne');
        $cursor->limit(-1);

        return $cursor->getNext();
    }


    /**
     * getDBRef.
     */
    public function getDBRef($ref)
    {
        $this->time->start();
        $return = parent::getDBRef($ref);
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'getDBRef',
            'ref'  => $ref,
            'time' => $time,
        ));

        return $return;
    }

    /**
     * getIndexInfo.
     */
    public function getIndexInfo()
    {
        $this->time->start();
        $return = parent::getIndexInfo();
        $time = $this->time->stop();

        $this->log(array(
            'type' => 'getIndexInfo',
            'time' => $time,
        ));

        return $return;
    }

    /**
     * group.
     */
    public function group($keys, $initial, $reduce, $options = array())
    {
        $this->time->start();
        $return = parent::group($keys, $initial, $reduce, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'    => 'group',
            'keys'    => $keys,
            'initial' => $initial,
            'reduce'  => $reduce,
            'options' => $options,
            'time'    => $time,
        ));

        return $return;
    }

    /**
     * insert.
     */
    public function insert(array $a, array $options = array())
    {
        $this->time->start();
        $return = parent::insert($a, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'    => 'insert',
            'a'       => $a,
            'options' => $options,
            'time'    => $time,
        ));

        return $return;
    }

    /**
     * remove.
     */
    public function remove(array $criteria = array(), array $options = array())
    {
        $this->time->start();
        $return = parent::remove($criteria, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'     => 'remove',
            'criteria' => $criteria,
            'options'  => $options,
            'time'     => $time,
        ));

        return $return;
    }

    /**
     * save.
     */
    public function save(&$a, array $options = array())
    {
        $this->time->start();
        $return = parent::save($a, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'    => 'save',
            'a'       => $a,
            'options' => $options,
            'time'    => $time,
        ));

        return $return;
    }

    /**
     * update.
     */
    public function update(array $criteria, array $newobj, array $options = array())
    {
        $this->time->start();
        $return = parent::update($criteria, $newobj, $options);
        $time = $this->time->stop();

        $this->log(array(
            'type'     => 'update',
            'criteria' => $criteria,
            'newobj'   => $newobj,
            'options'  => $options,
            'time'     => $time,
        ));

        return $return;
    }

    /**
     * validate.
     */
    public function validate($scanData = false)
    {
        $this->time->start();
        $return = parent::validate($scanData);
        $time = $this->time->stop();

        $this->log(array(
            'type'     => 'validate',
            'scanData' => $scanData,
            'time'     => $time,
        ));

        return $return;
    }
}
