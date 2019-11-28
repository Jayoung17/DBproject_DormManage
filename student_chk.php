<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '1234';
    $dbName = 'student';
    $mysql_port='3306';
    $mysqli = new mysqli($host, $user, $pw, $dbName, $mysql_port);
    
    $id=$_POST['id'];
    $password=$_POST['pw'];

    $sql="select*from st_info where st_id ='$id'";
    $result=$mysqli->query($sql);
    if($result->num_rows == 1){
        $row=$result->fetch_array(MYSQLI_ASSOC);
        if($row['st_pw']==$password){
            $_SESSION['st_id']=$id;
            if(isset($_SESSION['st_id'])){
                header('Location: ./student_main.html');
            }
            else{
                echo "fail";
            }
        }
        else{
            echo "wrong id or pw";
        }
    }
    else{
        echo "wrong id or pw";
    }


?>