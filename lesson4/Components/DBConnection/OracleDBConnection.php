<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 27.01.2020
 * Time: 13:50
 */

class OracleDBConnection implements IDBConnection
{
    public function getConnection($dsn)
    {
        echo "Соединение с базой данных Oracle установлено!";
    }
}