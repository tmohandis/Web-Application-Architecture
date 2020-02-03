<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 7:05
 */

class Sender implements ISender
{
    public function sendMessage($message)
    {
        return $message;
    }

}