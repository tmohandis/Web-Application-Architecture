<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});

 function testPay ($sum, $telNum)
{
    $order1 = new Order('Moscow', 'John', new Qiwi($sum, $telNum));
    $order2 = new Order('Kiev', 'Dmitry', new WebMoney($sum, $telNum));

    $order1->pay();
    $order2->pay();
}

testPay(15000,'564-45-54');