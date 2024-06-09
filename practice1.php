<?php
    // OUTPUT COMMANDS
    // Echo-(display string)  print print_r(display object and array)
    echo "<b>You are welcome to php class</b>";
     
    print('Hi');
    echo "<br/>";
    print_r("Hello"); 

    //VARIABLE DECLARATION
    $name = "Olutayo";
    echo $name;
    echo "<br/>";

    //CONCATINATION
    $details = "Software Developer.";
    echo $name ." is a ". $details;

    //ARRAY 1. indexed Array 2. Associative Array 3. Multi-dimensional Array
    $Array1 = array();
    $Array2 = [];

    $ayanrinde = ["Olutayo", "Olaoluwa", "Olutola", "Olayemi", "Ireoluwa"];
    print_r ($ayanrinde); echo'<br/>';
    print_r($ayanrinde[2] . "is at index array index 2" ); echo "<br>";
    echo 'Lenght of Ayanrinde Array is  '.count($ayanrinde); echo "<br>";
    //Looping through Array
    for ($i = 0; $i < count($ayanrinde); $i++){
        echo "My number is " .$i. "and my name is". $ayanrinde[$i];
        echo "<br/>";
    }

    //ASSOCIATIVE ARRAY
    $studentList = array("name"=> "Dorcas", "department"=>"Computer Science", "school"=>"SQI College Of ICT");
    print_r($studentList); echo"<br/>";
    print_r($studentList['name'] );

    foreach($studentList as $key => $value){
        echo '<br/>';
        echo "The ".  $key. " is ". $value ;
    }

    //WORKING WITH OBJECTS
    echo "<br/>";
    $obj = new StdClass;
    $obj->name = "Inumidun";
    $obj->department = "Cyber Security";
    $obj->school = "SQI";

    print_r($obj); echo "<br/>";
    print_r("Name is ". $obj->name); echo"<br/>";

    //PUSHING TO AN ARRAY
    $studentArray =[];
    array_push($studentArray, $obj );
    print_r($studentArray);
   
    //MULTI-DIMENSIONAL ARRAY
    $firstArray = ["Olutayo", "Olaoluwa", "Olutola", "Olayemi", "Ireoluwa"];
    $secondArray = ["tayo", "oluwa", "tola", "yemi", "oluwa"];
    $thirdArray = ["Olu", "Ola", "Olu", "Ola", "Ire"];
    $mainArray =[];
    array_push($mainArray, $firstArray, $secondArray, $thirdArray);
    echo "<br/>";
    print_r($mainArray); "</br>";
    echo"<br>"; echo"main array"; print_r($mainArray[$firstArray]);

    foreach($mainArray as $each){
        echo '<br/>';
        print_r( $each);
        foreach($each as $key => $value){
            echo "<br/>";
            echo "The" . $key. "is". $value;
        }
    }

?>