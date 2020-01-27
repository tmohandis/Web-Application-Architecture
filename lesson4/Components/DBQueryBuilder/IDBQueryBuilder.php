<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:47
 */

interface IDBQueryBuilder
{
    public function __construct(IDBConnection $connection);
    public function query();
}