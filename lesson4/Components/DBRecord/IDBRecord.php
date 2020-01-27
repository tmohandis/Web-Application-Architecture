<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:47
 */

interface IDBRecord
{
    public function __construct(IDBQueryBuilder $queryBuilder);
    public function getRecord();
}