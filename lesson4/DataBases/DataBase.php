<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02.02.2020
 * Time: 17:10
 */

class DataBase
{
    public $connection;
    public $queryBuilder;
    public $record;

    public function __construct(IDataBase $db)
    {
        $this->connection = $db->getConnection()->getConnection();
        $this->queryBuilder = $db->getQueryBuilder();
        $this->record = $db->getRecord()->getRecord();
    }

}