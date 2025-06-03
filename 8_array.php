<?php 
    $states = "kerala gujarat madhyapradesh uttarpradesh punjab";
    $state_array = explode("kerala gujarat madhyapradesh uttarpradesh punjab",$states);
    print_r($state_array);

    $subject = ['HTML','CSS','JAVASCRIPT','PHP','WORDPRESS'];

    $subject_as_string = implode("<br/>",$subject);
    echo "<br/> $subject_as_string";

    $person = array("Name"=>"Archita","Age"=>20,"Gender"=>'Female');
    print_r($person);

    $person = array_change_key_case($person,CASE_LOWER);
    echo "<br/> after changing cases <hr/>";
    print_r($person);

    //check wheather person has email key or not
    $isFound = array_key_exists("email",$person);
    echo "<br/> is email exists in array $isFound";

    $isFound = array_key_exists("age",$person);
    echo "<br/> is email exists in array $isFound";

?>