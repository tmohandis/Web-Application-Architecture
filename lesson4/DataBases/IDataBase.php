<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:39
 */

interface IDataBase
{
    public function getConnection();
    public function getRecord();
    public function getQueryBuilder();
}