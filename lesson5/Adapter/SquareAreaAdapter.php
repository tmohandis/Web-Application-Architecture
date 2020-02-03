<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 7:20
 */

class SquareAreaAdapter implements ISquare
{
    private $obj;

    public function __construct(SquareAreaLib $obj)
    {
        $this->obj = $obj;
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = sqrt(2) * $sideSquare;
        return $this->obj->getSquareArea($diagonal);
    }

}