<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});

$word = new Word('Command/data/text.txt');

$user = new User($word);

echo $word->getFileText() . PHP_EOL;

$user->runCommand('delete', 0, 5);
echo $word->getFileText() . PHP_EOL;
$user->runCommand('delete', 0, 6);
echo $word->getFileText() . PHP_EOL;
$user->down(2);
echo $word->getFileText() . PHP_EOL;


/*$user->runCommand('copy', 0, 5);
$user->runCommand('paste', 6);

echo $word->getFileText() . PHP_EOL;

$user->down(2);

echo $word->getFileText();*/
