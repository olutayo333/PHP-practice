<?php
    $host = 'localhost';
    $username= 'root';
    $password = '';
    $db='student_table';

   // CONNECTING USING OOP
    $connect=new mysqli($host, $username, $password, $db);
    
    if($connect){
        // echo' ';
    }
    else{
        // echo 'not connected'.$connect->connect_error;

    }
?>