<?php


class MySQL implements IDataBase
{
    public function getConnection()
    {
        return new MySQLDBConnection();
    }

    public function getQueryBuilder()
    {
        return new MySQLDBQueryBuilder($this->getConnection());
    }


    public function getRecord()
    {
        return new MySQLDBRecord($this->getQueryBuilder());
    }


}