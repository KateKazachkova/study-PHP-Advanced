<?php

/* Уровень 1. Задача 1.
Задача про языки и дни недели. Переменная $lang принимает два значения: 'ru' и 'en'. 
Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, 
а если имеет значение 'en' – то на английском. $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn']; Решите задачу через:*/
/*if else*/
  $lang = 'sp';
  if ($lang == 'ru') {
      $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
      } elseif ($lang == 'en') {
      $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
      } else echo 'язык не известен';
  print_r($arr);
/*switch-case*/
  $lang = 'ru';
      switch ($lang) {
      case 'ru':
           $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
      break;
      case 'en':
           $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
      break;
    }
  print_r($arr);
/*тернарка*/
  $lang = 'en';
  $lang == 'ru' ? $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'] : $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
  print_r($arr);


/* Уровень 1. Задача 2. 
B переменной $month лежит число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц
(зима, лето, весна, осень). Для генерации случайных чисел используй функцию rand(1, 12).*/
/*if else*/
  $month = rand(1, 12);
     echo 'Сейчас ' . $month . ' месяц';
     echo '<br>';
     if ($month >=3 && $month < 6)
        echo 'Это весна';
      elseif ($month >= 6 && $month < 9)
        echo 'Это лето';
     elseif ($month >=9 && $month < 12)
        echo 'Это осень';
      else echo 'Это зима';
/*switch-case*/
    $month = rand(1, 12);
    echo 'Сейчас ' . $month . ' месяц';
    echo '<br>';
    switch ($month) {
        case ($month >= 3 && $month < 6):
            echo 'Это весна';
            break;
        case ($month >= 6 && $month < 9):
            echo 'Это лето';
            break;
        case ($month >= 9 && $month < 12):
            echo 'Это осень';
            break;
        case ($month == 12 || $month == 1 || $month == 2):
            echo 'Это зима';
    }
/*тернарка*/
    $month = rand(1, 12);
    echo 'Сейчас ' . $month . ' месяц';
    echo '<br>';
    echo $month >=3 && $month < 6 ? 'Это весна' : ($month >= 6 && $month < 9 ? 
        'Это лето' : ($month >=9 && $month < 12 ? 'Это осень' : 'Это зима'))






  ?>
