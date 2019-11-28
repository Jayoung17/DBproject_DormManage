<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '1234';
    $dbName = 'student';
    $mysql_port='3306';
    $mysqli = new mysqli($host, $user, $pw, $dbName, $mysql_port);
    
    $id=$_POST['id'];
    $password=$_POST['pw'];
    $name=$_POST['name'];
    $major=$_POST['major'];
    $grade=$_POST['grade'];
    $score=$_POST['score'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $phone_number=$_POST['phone_number'];
    $dorm=$_POST['dorm'];
    $floor=$_POST['floor'];

    $sql="insert into st_info(st_id, st_pw, st_name, st_major, st_grade, st_score, st_gender, st_address, st_phone, st_dorm, st_floor)
    values('$id','$password','$name','$major','$grade','$score','$gender','$address','$phone_number','$dorm','$floor')";  
    if($mysqli->query($sql)==true){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
    $mysqli->close();
?>