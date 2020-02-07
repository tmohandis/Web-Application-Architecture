<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 05.02.2020
 * Time: 13:33
 */

class WordCommand extends Command
{
    public $word;
    public $operation;
    public $position;
    public $len;

    /**
     * WordCommand constructor.
     * @param $word
     * @param $operation
     * @param $position
     * @param $len
     */
    public function __construct(Word $word, $operation, $position, $len = 0)
    {
        $this->word = $word;
        $this->operation = $operation;
        $this->position = $position;
        $this->len = $len;
    }


    public function execute()
    {
        $this->word->operation($this->operation, $this->position, $this->len);
    }

    public function unExecute()
    {
        $this->word->operation($this->down($this->operation), $this->position, $this->len);
    }

    protected function down($operator) {

        $downOperation = null;

        switch ($operator)
        {
            case 'delete' : $downOperation = 'rollback'; break;
            case 'paste' : $downOperation = 'delete'; break;
            case 'cut' : $downOperation = 'rollback'; break;
            default: $downOperation='';
        }

        return $downOperation;

    }
}