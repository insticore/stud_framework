<?php

namespace Mindk\Framework\Models;

use Mindk\Framework\DB\DBOConnectorInterface;

/**
 * Basic Model Class
 * @package Mindk\Framework\Models
 */
abstract class Model
{
    /**
     * @var string  DB Table name
     */
    protected $tableName = '';

    /**
     * @var null
     */
    protected $dbo = null;

    /**
     * Model constructor.
     * @param DBOConnectorInterface $db
     */
    public function __construct(DBOConnectorInterface $db)
    {
        $this->dbo = $db;
    }

    /**
     * Create new record
     */
    public abstract function create( $data );

    /**
     * Read record
     *
     * @param   int Record ID
     *
     * @return  object
     */
    public function load( $id ) {
        $sql = 'SELECT * FROM `' . $this->tableName .
            '` WHERE id = ' . (int)$id;
        return $this->dbo->setQuery($sql)->getResult($this);
    }

    /**
     * Save record state to db
     *
     * @return bool
     */
    public abstract function save($id, $data);

    /**
     * Delete record from DB
     */
    public abstract function delete($data);

    /**
     * Get list of records
     *
     * @return array
     */
    public function getList() {
        $sql = 'SELECT * FROM `' . $this->tableName . '`';

        return $this->dbo->setQuery($sql)->getList(get_class($this));
    }
}