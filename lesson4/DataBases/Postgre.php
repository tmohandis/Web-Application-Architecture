<?php


class Postgre implements IDataBase
{
    public function getConnection()
    {
        return new PostgreDBConnection();
    }

    public function getQueryBuilder()
    {
        return new PostgreDBQueryBuilder($this->getConnection());
    }

    public function getRecord()
    {
        return new PostgreDBRecord($this->getQueryBuilder());
    }



}