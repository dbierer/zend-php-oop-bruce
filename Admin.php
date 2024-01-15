<?php

require_once ('User.php');

/**
 * Subclass defining Admin user
 * 
 */
class Admin extends User
{
    private const ROLE = 'Admin';
    private $department;

    public function __construct($data)
    {
        foreach($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getFullInfo()
    { 
        $output = [
            'Name' => $this->getFullName(),
            'Role' => self::ROLE,
            'Department' => $this->department,
            'Email' => $this->email,
        ];

        return $output;
    }

    public function getDepartment()
    {
        return $this->major;
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function __get($value)
    {
        return "Parameter $value does not exist";
    }
}