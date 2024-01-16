<?php


trait StudentTrait
{
    public function getFullName()
    {
        return $this->first . ' ' . $this->last;
    }

    public function getMajor()
    {
        return $this->major;
    }
}