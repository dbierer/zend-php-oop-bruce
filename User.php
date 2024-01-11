<?php
/**
 * Super class
 * Defines user data structure
 * 
 */
class User
{
    private const DB = 'school';
    protected $first;
    protected $last;
    protected $email;
    private $id;


    public function getFullName()
    {
        return $this->first . ' ' . $this->last;
    }



}