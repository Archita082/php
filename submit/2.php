<?php 

    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    
    echo "Amount is $amount <br> Rate is $rate <br> Year is $year";

    $result = $amount *$rate *$year / 100;
    echo "<br> Result is $result";

?>