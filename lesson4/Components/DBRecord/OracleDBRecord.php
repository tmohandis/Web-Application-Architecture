<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 14:07
 */

class OracleDBRecord implements IDBRecord
{
    private $queryBuilder;
    public function __construct($queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    }

    public function getRecord()
    {
        echo "Oracle Record";
    }

}