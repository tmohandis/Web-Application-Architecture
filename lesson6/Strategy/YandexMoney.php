<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 13:20
 */

class YandexMoney extends PayMethod
{
    public function pay() {
        echo "Заказ по номеру {$this->telNumber} оплачен через YandexMoney. Сумма заказа {$this->sum}" . PHP_EOL;
    }
}