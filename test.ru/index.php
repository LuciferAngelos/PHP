<?php
include('includes/db.php');     //функция импорта. Просто указываем адрес
?>

<form method='POST' action='/handler.php'>
    <input type='text' placeholder='Ваш логин' name='login'>
    <input type='password' placeholder='Ваш пароль' name='password'>
    <hr>
    <input type='submit' value='Отправить'>
</form>