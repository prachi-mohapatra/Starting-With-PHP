<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Break & Continue Statements</title>
  </head>
  <body>
    <h1>View code for better understanding...</h1>
    <h2>Break statment Eg.1-10</h2>
        <?php
          /*Break Statement*/
        for($i=1;$i<=10;$i++){
          if($i==5){
            break;
          }
          echo"number: " .$i. "<br>";
        }
        ?>
    <h2>Continue statment Eg.1-10</h2>
       <?php
       /*Continue Statement*/
        for($i=1;$i<=10;$i++){
         if($i==5){
           continue;
          }
         echo"number: " .$i. "<br>";
        }
      ?>
  </body>
</html>
