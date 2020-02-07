<?php


class User
{
    private $word;
    private $commands = [];
    private $current = 0;

    public function __construct($word)
    {
        $this->word = $word;
    }

    public function runCommand($operation, $position, $len = 0)
    {
        $command = new WordCommand($this->word, $operation, $position, $len);
        $command->execute();

        $this->commands[] = $command;
        $this->current++;
    }

    public function down($levels)
    {
        echo "Отменить $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current > 0){
                $this->commands[--$this->current]->unExecute();
            }
        }
    }

    public function up($levels)
    {
        echo "Повторить $levels операций".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current < count($this->commands) - 1){
                $this->commands[$this->current++]->execute();
            }
        }
    }


}