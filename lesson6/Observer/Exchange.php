<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 04.02.2020
 * Time: 12:22
 */

class Exchange
{
    private $observers = [];
    private $vacancies = [];
    private static $instance = null;

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

    public function register(IObserver $observer) {
        $this->observers[] = $observer;
    }

    public function unregister(IObserver $observer) {
        foreach ($this->observers as $key => $item) {
            if ($item == $observer)
                unset($this->observers[$key]);
        }
    }

    public function addVacancy(Vacancy $vacancy)
    {
        $this->vacancies[] = $vacancy;
        $this->notifyObservers();
    }

    public function getObservers()
    {
        return $this->observers;
    }

}