<?php

require_once ('User.php');

/**
 * Subclass defining Staff user
 * 
 */
class Staff extends User
{
    private const ROLE = 'Staff';
    private $manager;
    
    public function set($data)
    {
        foreach($data as $key => $value) {
            $this->$key = $value;
        }
        return;

    }
    public function getFullInfo()
    { 
        $output = [
            'Name' => $this->getFullName(),
            'Role' => self::ROLE,
            'Manager' => $this->manager,
            'Email' => $this->email,
        ];

        return $output;
    }

    public function getManager()
    {
        return $this->manager;
    }
}