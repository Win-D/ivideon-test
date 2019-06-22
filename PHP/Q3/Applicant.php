<?php


namespace Project;

use DateTime;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Specialist.php';

class Applicant extends Specialist
{
    public function __construct(string $name, string $resume, DateTime $sendResumeDate)
    {
        $this->name = $name;
        $this->resume = $resume;
        $this->sendResumeDate = $sendResumeDate;
    }

    /**
     * Функция принятия соискателя на работу
     *
     * @param DateTime $employmentDate
     * @param string $position
     * @return void
    */
    public function recruit(DateTime $employmentDate, string $position): void
    {
        $this->employmentDate = $employmentDate;
        $this->position = $position;
    }
}