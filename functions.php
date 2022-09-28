<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funcions</title>
  </head>
  <body>
    <h1>View code for better understanding...</h1>
    <h2>Simple Function Eg.</h2>
    <?php
function writeMsg() {
  echo "Hello world!";
}
writeMsg();
?>
<h2>Function 1 Arguments Eg.</h2>
<?php
function famname1($name) {
echo "$name<br>";
}
echo"function fname1(name)<br>....<br>";
famname1("Payal");
famname1("Prachi");
famname1("Madhumita");
famname1("Pradosh");
?>
<h2>Function 2 Arguments Eg.</h2>
<?php
function famname2($name,$year) {
echo "$name<br>";
}
echo"function fname2(name,year)<br>....<br>";
famname2("Payal","2008");
famname2("Prachi","2002");
famname2("Madhumita","1974");
famname2("Pradosh","1969");
?>
<h2>Default Argument Value</h2>
<?php
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight();
?>
<h2>Returning values-1</h2>
<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . sum(5,10) . "<br>";
?>
<h2>Returning values-2</h2>
<?php
function addNumbers1($a, $b){
  return $a + $b;
}
echo addNumbers1(1.2, 5.2);
?>
<h3>specify a different return type, than the argument types</h3>
<?php
function addNumbers2(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers2(1.2, 5.2);
?>
<h2>Passing Arguments by Reference (&)</h2>
<h5>without "&" the output would be 2</h5>
<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
<h2>PHP-Loosely Typed Language (normal code without adding "strict")</h2>
<h5>*since strict is NOT enabled "5 days" is changed to int(5), and it will return 10</h5>
<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo "Ans: " .addNumbers(5, "5 days")."<br>";
?>
<h5>*since strict is enabled and "5 days" is not an integer, an error will be thrown</h5>
//
<br>
declare(strict_types=1);
<br>
function addNumbers(int $a, int $b) {
<br>
  return $a + $b;
<br>
}
<br>
echo "Ans: " .addNumbers(5, "5 days");
<br>
//

</body>
</html>
