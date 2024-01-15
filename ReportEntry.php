<?php

require_once('Student.php');
require_once('UserInterface.php');

class ReportEntry
{
    private string $dbTable = 'report';
    private array $dbRecord;

    public function __construct(UserInterface $student)
    {
        $this->dbRecord = $student->getFullInfo();
    }

    public function getFullName(): string
    {
        return $this->dbRecord['Name'];
    }

    public function getRecord(): array
    {
        return $this->dbRecord;
    }
}