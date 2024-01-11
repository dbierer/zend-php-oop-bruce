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
            'Department' => $this->department,
            'Email' => $this->email,
        ];

        return $output;
    }

    public function getDepartment()
    {
        return $this->department;
    }
}