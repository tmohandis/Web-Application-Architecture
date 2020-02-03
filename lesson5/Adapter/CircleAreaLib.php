<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 03.02.2020
 * Time: 7:13
 */

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;

   return $area;
}
}