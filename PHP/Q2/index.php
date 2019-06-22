<?php

$str = date('d.m.Y');
$format = 'd.m.y';
$validDate = checkDateFormat($str, $format);

/**
 * Функция проверки формата даты
 *
 * @param string $str
 * @param string $format
 * @return bool
 */
function checkDateFormat(string $str, string $format = 'd.m.Y'): bool
{
    $date = DateTime::createFromFormat($format, $str);
    //Если объект DateTime создан и соответствует указанному формату
    if ($date && $date->format($format) === $str) {
        return true;
    }
    return false;
}