<?php 
    $a = 100;       // integer, т.е. целое число, int
    $b = 14.12;         //float - дробь
    $c = 'Hello, world';        //string - строка
    $d = array(1,2,'Watch',4,'Cat');        //array - массив
    $e = array(
        'name' => 'Abraham',
        'surname' => 'Ivanov',
        'age' => 20,
        'byear' => 1985,
        'education' => array(       
            'school in 2000', 'institute in 25'
        ),
        'married' => false,
        'smoking' => true,
        'geek' => false
    ); //многомерный массив
    $f = true;      //bolean - true\false

    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $c;
    echo '<br>';
    echo $d[4];
    echo '<br>';
    echo $e['name'], $e['byear'];
    echo '<br>';
    echo $e['education'][1];

    //Важно! Если переменную в echo записать через '', т.е. апостроф, то вывод обрабатывается, как обычный текст. Если же записать через кавычки "", то переменная будет обрабатываться, как переменная 

    echo '<br>';
    echo 'Variable $a like a text';
    echo '<br>';
    echo "Variable 'a' as a variable $a";


    //Конкатенация строк

    $name = 'Abraham';
    $surname = 'Ivanov';

    echo '<br>';
    echo $name . ' ' . $surname;        //конкатенация строк через точку

    
    //Условия

    $weather = 'снег';      //снег, дождь, ясно, облачно

    if ($weather == 'снег') {
        echo '<br>';
        echo 'лучше останься дома';
    }

    if ($weather == 'дождь') {
        echo '<br>';
        echo "лучше сидеть дома, потому что $weather";
    }

    if ($weather == 'ясно') {
        echo '<br>';
        echo 'Беги гулять!';
    }

    if ($weather == 'облачно') {
        echo '<br>';
        echo 'Все прекрасно, просто нет солнца';
    }



    $number = 24;

    if ($number < 24){
        echo '<br>';
        echo 'Тебе ещё нельзя';
    }
   

    $key = 10;

    if($key != 100){
        echo '<br>';
        echo 'не 100';
    } else {
        echo '<br>';
        echo 'тут 100!';
    }




    // логические операторы or, and
    
    $age = 15;
    if ($age < 20 and $name != 'Abraham'){
        echo '<br>';
        echo 'тебе сюда нельзя';
    }else{
        echo '<br>';
        echo 'привет, ' . $name . '!';
    }

    $rating = 33;

    if ($rating > 25 and $rating <=75){
        echo '<br>';
        echo 'Ты молодец';
    }else{
        echo '<br>';
        echo 'тебе ещё есть куда расти';
    }


    //Циклы

    //for
    //while
    //foreach

    for ($i = 1; $i <= 10; $i++){
        echo " <br/> $i пункт списка";
    }

    $test = 20;
    while($test < 25){
        echo "<br> $test";
        $test++;
    }

    $names = array(
        'Max',
        'Nick',
        'Grey',
        'Kevin',
        'John'
    );

    foreach($names as $val){
        echo '<br>' . $val;
    }


    //Функции

    function myfunction(){
        echo '<br> Hello, World from function space!';
    }

    myfunction();

    function get_bigger($a, $b){
        if ($a > $b) {
            echo '<br>' . $a;
        } else {
            echo '<br>' . $b;

        }
    }

    get_bigger(12,23);
    get_bigger(-50,100);
    get_bigger(100.123,100.234);
    

    //Математические функции

    //abs, rouns, ceil, floor, rand, min, max

    echo abs(-3000) . '<br>';   //возвращает абсолютное число
    echo round(50.4362) . '<br>';        //округляет по общепринятым правилам 
    echo round(50.5362) . '<br>';        //округляет по общепринятым правилам 
    echo ceil(54.11) . '<br>';      //округляет в большую сторону
    echo floor(54.99) . '<br>';         //округляет в меньшую сторону
    echo rand(0, 100) . '<br>';         //возвращает случайное число от мин. до макс. В данном случае - от 0 до 100
    echo min(4,23,12,6,3,32,6,7,34,52345,3245,33,223) . '<br>';       //возвращает минимальное число из своих аргументов
    echo max(4,23,12,6,3,32,6,7,34,52345,3245,33,223) . '<br>';         //возвращает максимальное число из своих аргументов


?>
