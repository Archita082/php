<?php
    
    if(isset($_GET['length'], $_GET['width'], $_GET['depth'],)&&isset($_GET['submit'])) {

      $length = $_GET['length'];
      $width = $_GET['width'];
      $depth = $_GET['depth'];

      echo "Length: $length<br>";
      echo "Width: $width<br>";
      echo "Depth: $depth<br>";

      $volume = $length* $width * $depth;
      echo "<h3>Volume is = $volume </h3>";

    } else {

      header('location: ../3_input_volume_calculator.php');
      exit;

    } 
  
?>