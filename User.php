<?php

require_once('UserInterface.php');

/**
 * Super class
 * Defines user data structure
 * 
 */
abstract class User implements UserInterface
{
    protected const DB = 'school';
    protected $first;
    protected $last;
    protected $email;
    private $id;


    public function getFullName()
    {
        return $this->first . ' ' . $this->last;
    }

    public abstract function getFullInfo();


}