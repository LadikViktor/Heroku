<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
/*
Username: 5UKVOnKf31
Database name: 5UKVOnKf31
Password: gIuNH1PtMv
Server: remotemysql.com
Port: 3306

guest_book
*/

$link = mysqli_connect("remotemysql.com", "5UKVOnKf31", "gIuNH1PtMv")
    or die("Не удалось соединиться с сервером");

    mysqli_select_db($link, "5UKVOnKf31")
    or die("Не удалось выбрать БД");


    // echo "Hello World!!";


    // for ($i=1; $i<=10 ; $i++) { 
    //    echo $i . "<br>";
    // }


    ?>
</body>

</html>