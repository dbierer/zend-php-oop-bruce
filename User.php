<?php
/**
 * Future super class
 * 
 */
class User
{
    public const ROLE = 'Student';
    protected $first;
    protected $last;
    protected $major;
    protected $email;
    private $id;

    // public function __construct()
    // {
    //     $this->first = 'Herman';
    //     $this->last = 'Munster';
    //     $this->major = 'Social Services';
    //     $this->email = 'frankenstein@example.edu';
    //     $this-> id = 123456;
    // }

    public function set($data)
    {
        foreach($data as $key => $value) {
            $this->$key = $value;
        }
        return;

    }

    public function getFullName()
    {
        return $this->first . ' ' . $this->last;
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


}