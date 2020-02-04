<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 13:20
 */

class WebMoney extends PayMethod
{
    public function pay() {
        echo "Заказ по номеру {$this->telNumber} оплачен через WebMoney. Сумма заказа {$this->sum}" . PHP_EOL;
    }
}