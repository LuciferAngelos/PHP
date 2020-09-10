<?php
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');       //функция для коннекта с бд. Адрес сервара, имя пользователя, пароль, название бд

    if($connection == false){
        echo 'Не удалось подключиться к бд <br>';
        echo mysqli_connect_error();        //спец. функций, которая возвращает описание ошибки
        exit();     //останавливает выполнение скрипта. Можно написать exit(), можно die()
    }

echo date('d.m.Y H:i:s') . '<br>';

$start_date = '2016-12-10 14:00:00';
$start_date_timestamp  = strtotime($start_date);        //перевод времени из строки в UTC

echo $start_date_timestamp . '<br>';
echo time() . '<br>';
echo ceil((time() - $start_date_timestamp) / 60 / 60 / 24);     //просто подсчёт, сколько дней прошло от текущей даты в переменной $start_date до настоящего времени
