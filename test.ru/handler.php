<?php 

include('includes/db.php');
//если в форме указывали метод передачи данных GET, то данные будут храниться в переменной $_GET. Эта переменная создаётся самим пхп и называется суперглобальный массив. Доступна отовсюду
//если в форме указан метод передачи POST, то переменная будет $_POST

$login = $_POST['login'];       //получили логин
$password = $_POST['password'];     //получили пароль

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($count) == 0){
    echo 'Вы не зарегистрированы';
}else{
    echo "Привет, $login!";
}

echo  '<br>' . 'Введённый логин: ' . $_POST['login'] . ', а введённый пароль - ' . $_POST['password'];