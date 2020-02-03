<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$circle = new CircleAreaAdapter(new CircleAreaLib());
$square = new SquareAreaAdapter(new SquareAreaLib());

echo $circle->circleArea(12) . PHP_EOL;
echo $square->squareArea(5) . PHP_EOL;