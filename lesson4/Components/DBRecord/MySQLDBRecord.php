<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 14:07
 */

class MySQLDBRecord implements IDBRecord
{
    private $queryBuilder;
    public function __construct(IDBQueryBuilder $queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    }

    public function getRecord()
    {
        echo "MySQL Record";
    }

}