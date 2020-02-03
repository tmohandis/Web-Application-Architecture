<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 7:20
 */

class CircleAreaAdapter implements ICircle
{
    private $obj;

    public function __construct(CircleAreaLib $obj)
    {
        $this->obj = $obj;
    }

    function circleArea(int $circumference)
    {
        $diagonal = $circumference/M_PI;
        return $this->obj->getCircleArea($diagonal);
    }

}