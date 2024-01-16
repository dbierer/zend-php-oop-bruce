<?php

require_once ('User.php');
require_once ('NoMethodException.php');
require_once ('FullNameTrait.php');
require_once ('StudentTrait.php');

/**
 * Subclass defining Student user
 * 
 */
class Student extends User
{
    use FullNameTrait, StudentTrait{
        FullNameTrait::getFullName insteadof StudentTrait;
        FullNameTrait::getFullName as traitFullName;
        StudentTrait::getFullName as studentFullName;
    }

    private const ROLE = 'Student';
    private $major;
    
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
            'Major' => $this->major,
            'Email' => $this->email,
        ];

        return $output;
    }

    public function getMajor()
    {
        return $this->major;
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function __call($name, $arguments)
    {
        try {
            throw new NoMethodException("Method $name does not exist");
        } catch (Exception $e) {
            echo $e->getMessage() . '<br/>';
        } finally {
            echo '<p>Back to your regularly scheduled program...</p>';
        }

    }
}