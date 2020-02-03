<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$message = new Telegram(new Vk(new WhatsApp(new Sender())));

$message->sendMessage('Привет');