<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loop Statements</title>
  </head>
  <body>
    <h1>View code for better understanding...</h1>
    <h2>For Loop-star pyramid</h2>
    <?php
    /*For Loop*/
    for($i=0;$i<6;$i++){
      for($j=0;$j<=$i;$j++){
      echo"&nbsp *";
    }
      echo"<br>";
  }
    ?>
    <h2>For Each loop Eg.</h2>
    <?php
    /*For Each Loop*/
    $colour=array("red","yellow");
      echo"colour=[red,yellow]<br>";
    foreach ($colour as $value) {
      echo"$value <br>";
    }
    ?>
    <h2>While Loop-star pyramid</h2>
    <?php
    /*While Loop*/
    $i=1;
    while($i<=6){
      $j=6;
      while($j>=$i){
      $j--;
      echo"&nbsp *";
      }
        $i++;
    echo"<br>";
  }
    ?>
      <h2>Do-While Loop-star square</h2>
    <?php
        /* Do While Loop*/
    $i=0;
    do{

      $j=5;
      do{
        echo"&nbsp *";
        $j--;
      }while($j>0);
      $k=0;
      do{
        echo"&nbsp *";
        $k++;
      }while($k<=0);
      $i++;
      echo"<br>";

    }while($i<6);
    ?>
  </body>
</html>
