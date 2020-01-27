<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:56
 */

class MySQLDBQueryBuilder implements IDBQueryBuilder
{
    private $connection;
    public function __construct(IDBConnection $connection)
    {
        $this->connection = $connection;
    }

    public function query()
    {
        echo "SELECT * FROM MySQl";
    }



}