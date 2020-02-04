<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 13:20
 */

class Qiwi extends PayMethod
{
    public function pay() {
        echo "Заказ по номеру {$this->telNumber} оплачен через Qiwi. Сумма заказа {$this->sum}" . PHP_EOL;
    }
}