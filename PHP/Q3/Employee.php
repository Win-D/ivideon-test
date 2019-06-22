<?php


namespace Project;

use DateTime;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Specialist.php';

class Employee extends Specialist
{
    public function __construct(string $name, string $resume, DateTime $sendResumeDate, DateTime $employmentDate, string $position)
    {
        $this->name = $name;
        $this->resume = $resume;
        $this->sendResumeDate = $sendResumeDate;
        $this->employmentDate = $employmentDate;
        $this->position = $position;
    }
}