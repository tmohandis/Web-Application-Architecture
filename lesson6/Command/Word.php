<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 05.02.2020
 * Time: 13:33
 */

class Word
{
    private $file;
    private $buffer;
    private $rollbackBuffer;
    public $key;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function operation($operation, $position, $len = 0)
    {
        switch ($operation) {
            case 'copy' :
                $this->copy($position, $len);
                break;
            case 'delete' :
                $this->delete($position, $len);
                break;
            case 'paste' :
                $this->paste($position);
                break;
            case 'cut' :
                $this->cut($position, $len);
                break;
            case 'rollback' :
                $this->rollback($position);
                break;
            default: break;
        }
    }

    private function copy($position, $len, $rollback = false)
    {
        if ($rollback == false)
        $this->buffer = file_get_contents($this->file, FALSE, NULL, $position, $len);
        else
            $this->rollbackBuffer = file_get_contents($this->file, FALSE, NULL, $position, $len);

    }

    private function delete($position, $len)
    {
       $file = $this->getFileText();
       $this->copy($position, $len, true);
       $file = substr_replace($file, '', $position, $len);
       file_put_contents($this->file, $file);
    }

    private function cut($position, $len)
    {
        $this->copy($position, $len);
        $this->copy($position, $len, true);
        $this->delete($position, $len);
    }

    private function paste($position, $rollback = false)
    {
        $text = ($rollback) ? $this->rollbackBuffer : $this->buffer;
        $file = $this->getFileText();
        $file = substr($file,0, $position) . $text . substr($file ,$position);
        file_put_contents($this->file, $file);
    }

    private function rollback($position)
    {
        $this->paste($position, true);
    }

    public function getFileText () {
        return $text = file_get_contents($this->file);
    }
}