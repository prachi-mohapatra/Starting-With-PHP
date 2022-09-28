<html>
<head>
  <title>Starting with PHP</title>
  <body>
  <h1>View code for better understanding...</h1>
    <h2>Variable</h2>
    <?php
    /*Variable*/
    $color="red";
    $color1="blue";
    echo "Variable: " .$color. "<br>";
    echo "Joining two variables: ".$color.$color1;
    ?>
    <h2>DataType of Variable</h2>
    <?php
    /*DataType of Variable*/
    var_dump($color);
    ?>
    <h2>String Check</h2>
    <?php
    /*Length of Variable*/
    echo "String Length: ".strlen($color);
    echo "<br>";
    echo "Word Length: " .str_word_count($color);
    echo "<br>";
    echo "String Reverse: ".strrev($color);
     ?>
     <h2>Casting float to int</h2>
     <?php
     /*Casting float to int*/
     $x=123.456;
     echo "x: ".$x. "<br>";
     $int_cast=(int)$x;
     echo "Casting float to int:" .$int_cast;
      ?>
      <h2>pi, min, max, +ve, sqrt, round, random</h2>
      <?php
      /*pi,min,max*/
      echo "pi: ".(pi()). "<br>";
      echo "List: 10,0,20,30,70 <br>";
      echo "min: ".(min(10,0,20,30,70)). "<br>";
      echo "max: ".(max(10,0,20,30,70)). "<br>";
      echo "+ve of -6.74: ".(abs(-6.74))."<br>";
      echo "sqrt of 64: ".(sqrt(64))."<br>";
      echo "round of 64.8: ".(round(64.8))."<br>";
      echo "random no. from 1-100: ".(rand(1,100))."<br>";
      ?>
      <h2>incre & decre</h2>
      <?php
      /*incre & decre*/
      $x=2;
      echo "x: ".$x . "<br>";
      echo "x++: ". $x++. "<br>";
      echo "x--: ". $x--. "<br>";
      echo "++x: ". ++$x. "<br>";
      echo "--x: ". --$x. "<br>";
      ?>

  </body>
</head>
</html>
