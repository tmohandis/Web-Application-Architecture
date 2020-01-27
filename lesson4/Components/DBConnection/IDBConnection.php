<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:46
 */

interface IDBConnection
{
    public function getConnection($dsn);

}