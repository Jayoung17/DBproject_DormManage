<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '1234';
    $dbName = 'st_info';
    $mysql_port='3306';
    $mysql_charset='UTF8';
    $mysqli = new mysqli($host, $user, $pw, $dbName, $mysql_port, $mysql_charset);
 
    if($mysqli->connect_errno){
        echo "MySQL 접속 실패";
    }else{
        echo "MySQL 접속 성공";
    }
?>