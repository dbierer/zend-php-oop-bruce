<?php

require_once ('User.php');

/**
 * Subclass defining Student user
 * 
 */
class Student extends User
{
    private const ROLE = 'Student';
    private $major;
    
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
            'Major' => $this->major,
            'Email' => $this->email,
        ];

        return $output;
    }

    public function getMajor()
    {
        return $this->major;
    }
}