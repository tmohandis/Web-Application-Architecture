<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 13:26
 */

class Order
{
    private $address;
    private $user;
    private $payMethod;


    public function __construct($address, $user, IPay $payMethod)
    {
        $this->address = $address;
        $this->user = $user;
        $this->payMethod = $payMethod;

    }

    public function pay()
    {
        $this->payMethod->pay();
    }


}