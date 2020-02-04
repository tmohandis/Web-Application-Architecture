<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 13:18
 */

abstract class PayMethod implements IPay
{
  protected $sum;
  protected $telNumber;

    public function __construct($sum, $telNumber)
    {
        $this->sum = $sum;
        $this->telNumber = $telNumber;
    }

}