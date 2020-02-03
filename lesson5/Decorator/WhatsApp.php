<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 6:38
 */

class WhatsApp extends Decorator
{

    public function sendMessage($message)
    {
        echo $message. ' отправлено в WhatsApp' . PHP_EOL;
        $this->obj->sendMessage($message);
    }
}