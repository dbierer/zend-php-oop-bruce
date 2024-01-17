<?php

trait FullNameTrait
{
    public function getFullName()
    {
        return $this->first . ' ' . $this->last;
    }

    public function getLastName()
    {
        return $this->last;
    }
}