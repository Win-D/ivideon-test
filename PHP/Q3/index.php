<?php

use Project\Applicant;
use Project\Employee;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Applicant.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Employee.php';

$applicant = new Applicant('Michael', 'simple resume', new DateTime()); //создаём класс "соискатель"
$applicant->recruit(new DateTime(), 'manager'); //принимаем его на работу
$employee = new Employee('Name', 'resume', new DateTime(), new DateTime(), 'CEO'); //создаём класс "сотрудник"