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
            break;
    }
/*тернарка*/
    $month = rand(1, 12);
    echo 'Сейчас ' . $month . ' месяц';
    echo '<br>';
    echo $month >=3 && $month < 6 ? 'Это весна' : 
        ($month >= 6 && $month < 9 ? 'Это лето' : 
        ($month >=9 && $month < 12 ? 'Это осень' : 'Это зима'));


/* Уровень 1. Задача 3.
Определение интервала времени. В переменной $minutes – лежит случайное число от 1 до 59 (rand(1, 59)). 
Определить к какой четверти относится сейчас минуты.*/
/*if else*/
    $minutes = rand(1, 59);
    echo 'Сейчас ' . $minutes . ' минута';
    echo '<br>';
    if ($minutes >=1 && $minutes < 15)
        echo 'Это первая четверть';
    elseif ($minutes >= 16 && $minutes < 30)
        echo 'Это вторая четверть';
    elseif ($minutes >=30 && $minutes < 45)
        echo 'Это третья четверть';
    else echo 'Это четвертая четверть';
/*switch-case*/
    $minutes = rand(1, 59);
    echo 'Сейчас ' . $minutes . ' минута';
    echo '<br>';
    switch ($minutes) {
        case $minutes >=1 && $minutes < 15 :
             echo 'Это первая четверть';
             break;
        case $minutes >= 16 && $minutes < 30 :
             echo 'Это вторая четверть';
             break;
        case $minutes >=30 && $minutes < 45 :
             echo 'Это третья четверть';
             break;
        case $minutes >=45 && $minutes < 60 :
             echo 'Это четвертая четверть';
             break;
    }
/*тернарка*/
    $minutes = rand(1, 59);
    echo 'Сейчас ' . $minutes . ' минута';
    echo '<br>';
    echo $minutes >=1 && $minutes < 15 ? 'Это первая четверть':
         ($minutes >= 16 && $minutes < 30 ? 'Это вторая четверть' :
         ($minutes >=30 && $minutes < 45 ? 'Это третья четверть' : 'Это четвертая четверть'));


/* Уровень 1. Задача 4.
Если переменная $a = 0 или $a = 2, то прибавьте к ней 7, иначе поделите ее на 10. Выведите результат на экран. 
Проверьте работу программы при $a, равном 5, 0, -3, 2..*/
/*if else*/
    $a = 2;
    if ($a == 0 || $a == 2) echo ($a+7);
       else echo ($a / 10);
/*switch-case*/
    $a = 2;
    switch ($a) {
        case ($a == 0 || $a == 2) :
          echo $a = $a+7 ;
          break;
        case ($a !== 0 || $a !== 2) :
          echo $a = $a / 10 ;
          break;
    }
/*тернарка*/
    $a = 2;
    echo $a == 0 || $a == 2 ? $a = $a+7 : $a = $a / 10;


/* Уровень 1. Задача 5.
Если переменная $a <=1, а переменная b >= 3, то выведите сумму этих переменных, иначе выведите их разность.
Проверьте работу скрипта при a и b, равном 1 и 3, 0 и 6, 3 и 5.*/
/*if else*/
    $a = 1;
    $b = 5;
    if ($a <=1 && $b >= 3) echo ($a + $b);
        else echo ($a - $b);
/*switch-case*/
    $a = 1;
    $b = 3;
    switch ($a && $b) {
        case ($a <=1 && $b >= 3) :
            echo ($a + $b) ;
            break;
        case ('$a <=1 || $b >= 3') :
            echo ($a - $b) ;
            break;
}
/*тернарка*/
    $a = 1;
    $b = 3;
    echo $a <=1 && $b >= 3 ? $a + $b : $a - $b;



  ?>
