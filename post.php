<?php
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods:*'); //GET, POST, PATCH
    header('Access-Control-Allow-Methods:Content-Type,authorization');
    $resp=[];
    $resp['sucess']=true;

    echo json_encode($resp);
    
    $_POST= json_decode(file_get_contents("php://input"));
    
?>