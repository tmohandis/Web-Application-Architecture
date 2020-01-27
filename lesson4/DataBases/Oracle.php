<?php


class Oracle implements IDataBase
{
    public function getConnection()
    {
        return new OracleDBConnection();
    }

    public function getQueryBuilder()
    {
        return new OracleDBQueryBuilder($this->getConnection());
    }

    public function getRecord()
    {
        return new OracleDBRecord($this->getQueryBuilder());
    }



}