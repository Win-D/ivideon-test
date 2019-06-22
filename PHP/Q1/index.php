<?php
$obj = new Building();
$obj = (array) $obj;
$obj['name'] = 'Main tower';
$obj['flats'] = 100;
$obj = arrayToBuildingObject($obj); //если просто привести массив к типу object stdClass, то не получится использовать метод save()
$obj->save();

/**
 * Функция перевода ассоциативного массива в объект типа Building
 *
 * @param array
 * @return Building
*/
function arrayToBuildingObject(array $array): Building
{
    $building = new Building();
    $building->name = $array['name'];
    $building->flats = $array['flats'];
    return $building;
}