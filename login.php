<?php
    echo '<u> welcome </u> to <b> PHP Class</b>';
    echo "<br>";

    $array=[1,2,3,4,5];
    $array2=array('egg', 'yam', 'orange', 'fufu');

    array_push($array, $array2);
    $array[5][2]='cassava';
    print_r($array);
    
    $assoc=[
        'age'=> 20, 'address'=>'ogbomoso', 'email'=> 'olu@gmail.com'
    ]; echo "</br>";
    print_r ('email is ' .($assoc['email'])) ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>