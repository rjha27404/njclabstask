<?php
    $user="root";
    $pass="";
    $host = "localhost";
    $db="njclabs_task";
    $mysqli = mysqli_connect($host,$user,$pass,$db);
    if($mysqli){
        // echo "Database connected";
    }
    else{
        echo "connection failed";
    }
?>