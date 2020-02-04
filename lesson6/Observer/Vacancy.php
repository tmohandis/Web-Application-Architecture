<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 12:26
 */

class Vacancy
{
    public $name;
    public $salary;
    public $experience;

    public function __construct($name, $salary, $experience)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->experience = $experience;
        Exchange::getInstance()->addVacancy($this);
    }


}