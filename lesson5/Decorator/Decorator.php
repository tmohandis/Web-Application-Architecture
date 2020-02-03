<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 6:36
 */

abstract class Decorator implements ISender
{
    protected $obj;

    public function __construct(ISender $obj)
    {
        $this->obj = $obj;
    }

}