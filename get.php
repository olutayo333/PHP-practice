<?php
print_r($_POST);
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*'); //GET, POST, PATCH
header('Access-Control-Allow-Methods:Content-Type,authorization');
    
    $allStudents = [
        [
            "firstname"=>"sola",
            "lastname"=>"sade",
            "email"=>"solaade@gmail.com",
            "password"=>"fish"
        ]
    ];
    echo(json_encode($allStudents));
    //print_r($allStudents);
?>