<?php 
    //create associative array
    //1st method to create associative array
   
   $subject = array('name'=>'PHP','duration'=>150,'is certified'=>true);
   print_r($subject);

   //ad new key
   $subject['trainer'] = "Archita";
   echo "<br/>";
   print_r($subject); //will display whole array on screen

   //2nd method to create associative array
   $country['population'] = 14370000;
   $country['capital'] = 'Delhi';
   $country['minimum_latitude'] = 8.4;
   $country['maximum_latitude'] = 37.6;
   echo "<br/>";
   print_r($country);
   ?>