<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 6:37
 */

class Telegram extends Decorator
{
    public function sendMessage($message)
    {
        echo $message. ' отправлено в Telegram' . PHP_EOL;
        $this->obj->sendMessage($message);
    }

}