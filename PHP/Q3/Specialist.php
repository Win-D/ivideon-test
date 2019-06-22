<?php


namespace Project;

use DateTime;

class Specialist
{
    /**
     * @var string $name - имя
     * @var string $resume - резюме
     * @var DateTime $sendResumeDate - дата отправки резюме
     * @var DateTime $employmentDate - дата трудоустройства
     * @var string $position - должность
     */
    protected $name;
    protected $resume;
    protected $sendResumeDate;
    protected $employmentDate = null;
    protected $position = null;
}