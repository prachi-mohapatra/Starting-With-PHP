<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Condition Statement</title>
  </head>
  <body>
    <h1>View code for better understanding...</h1>
    <h2>If/else-Checking performance in exam</h2>
    <?php
    /*If-else*/
    $person= 39;
    echo "percentage of student1: ".$person. "% <br>" ;
    if($person>=85 && $person<100){
      echo"Congrats!! You got A+";
    }elseif ($person>=70 && $person<85) {
      echo"You got B+";
    }elseif($person>=55 && $person<70){
      echo"You got C+";
    }elseif($person>=40 && $person<55){
      echo"You got D+";
    }elseif($person>=30 && $person<40){
      echo"You got E+";
    }else{
      echo"You Failed, Better Luck Next Time";
    }
    ?>
    <h2>Switch statement-Checking your fav colour</h2>
    <?php
        /*Switch*/
  $favcolor = "black";
  echo "Colour: " .$favcolor. "<br>";
  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }
  ?>
  </body>
</html>
