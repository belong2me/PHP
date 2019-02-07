<?php
$arHolidays = [];

$calendar = simplexml_load_file('http://xmlcalendar.ru/data/ru/' . date('Y') . '/calendar.xml');

//все праздники за текущий год
foreach ($calendar->days->day as $day) {
    $d = (array)$day->attributes()->d;
    $d = $d[0];
    $d = substr($d, 3, 2) . '.' . substr($d, 0, 2) . '.' . date('Y');
    //не считая короткие дни
    if ($day->attributes()->t == 1) {
        $arHolidays[] = $d;
    }
}

print_r($arHolidays);