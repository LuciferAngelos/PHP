<?php
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');     //используется для соединения с бд. 4 аргумента: название сервера, имя пользователя, пароль, название бд. Для локального сервера можно написать как 127.0.01, так и localhost. Возвращает false, если не удалось подключиться

    if($connection == false){
        echo 'Не удалось подключиться к бд <br>';
        echo mysqli_connect_error();        //спец. функций, которая возвращает описание ошибки
        exit();     //останавливает выполнение скрипта. Можно написать exit(), можно die()
    }

    $result = mysqli_query($connection, "SELECT * FROM `articles_categories`");     //отправка запроса к соединению. 1 параметр - идентификатор соединения, а 2й аргумент - сам запрос

    // $r1 = mysqli_fetch_assoc($result);      //возвращает первую запись в таблице
    // $r2 = mysqli_fetch_assoc($result);      //возвращает слледующую запись

    $count = mysqli_num_rows($result);       //выводит количество записей по запросу в бд
    if($count == 0){
        echo 'Записей не найдено!';
    }else {
        ?>
        <ul>
            <?php
                while(($record = mysqli_fetch_assoc($result))){     //т.е., будет выполняться, пока есть записи в таблице
                    $articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categories_id` = " . $record['id']);        //нам не нужны все записи. Нам нужно, чтобы на стороне базы скл сам всё посчитал и вернул нам результат - COUNT(`id`). А потом обозначили результат, как total_count

                    $articles_count_result = mysqli_fetch_assoc($articles_count);       //сделали для того, чтобы получали корректный вывод, т.к. mysqli_query возвращает строку, а нам нужно получить запись

                    echo '<li>' . $record['title'] .' (' . $articles_count_result['total_count'] . ')</li>';
                }
            ?>
        </ul>
<?php
    }
?>

<?php
    mysqli_close($connection);      //прерывает соединение с бд
?>