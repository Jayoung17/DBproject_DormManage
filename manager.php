<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '1234';
    $dbName = 'manager';
    $mysql_port='3306';
    $mysqli = new mysqli($host, $user, $pw, $dbName, $mysql_port);
    
    $id=$_POST['id'];
    $password=$_POST['pw'];
    $name=$_POST['nam'];
    $gender=$_POST['gender'];
    $phone_number=$_POST['phone_number'];
    $dorm=$_POST['dorm'];

    $sql="insert into mng_info(mng_id, mng_pw, mng_name, mng_gender, mng_phone, mng_dorm)
    values('$id','$password','$name','$gender','$phone_number','$dorm')";  
    if($mysqli->query($sql)==true){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
    $mysqli->close();
?>