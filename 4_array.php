<?php
    //example of numeric array
    $cars = array('Maruti','Audi','BMw','Ferrari','Toyota');
    $person[0] = "Archita";

    $person[1] = TRUE;
    $person[2] = 20;
    $person[3] = 26.08;
    $person[]  = 'abc@02gmail.com';
    $person[]  = 'Gujarat';
    $person[]  = 'India';
    //display array
    print_r($cars);
    print_r("<hr/>");
    print_r($person);

    //change value in array

    $cars[0] = 'Tata';

    unset($cars[4]); //delete array

    echo "<hr/>";
    print_r($cars); //it will display whole array
    $person[6] = 'Bhavnagar';
    echo "<hr/>";
    print_r($person);

 ?>