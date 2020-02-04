<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});
$exchange = Exchange::getInstance();
$user1 = new User(1,'John', 'john@gmail.com', 5);
$user2 = new User(2,'David', 'david@gmail.com', 10);
$user3 = new User(3,'Nick', 'nick@gmail.com', 8);
$exchange->register($user1);
$exchange->register($user2);
$exchange->register($user3);

//print_r($exchange->getObservers());

$exchange->unregister($user2);

//print_r($exchange->getObservers());

$vacancy = new Vacancy('dev', 150000, 3);