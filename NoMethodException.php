<?php

class NoMethodException extends Exception
{
    public function __construct(string $msg)
    {
        $msg = '<b>Uh-oh! -</b> ' . $msg;
        parent::__construct($msg);
    }
}