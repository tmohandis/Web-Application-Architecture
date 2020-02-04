<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 12:15
 */

class User implements IObserver
{
    private $name;
    private $email;
    private $experience;

    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }


    public function notify()
    {
        echo "Сообщение о должности отправлено на " . $this->email . PHP_EOL;
    }


}