<?php
// datatypes in php 
// string: eg $x="hello";
// integer: eg $x=$x=25;
// float: eg $x=$x=$x=20.2;
// boolean:  eg $x=$x=$x=$x=true;
// Array: eg $x=array("html", "css", "js"); 
// object: eg $x=new MyClass();
// Null : eg $x=null;
// var_dump() function basically return two things 1.variable data type 2. variable value
$x="Anusya Manoj Muli";
echo $x."<br>";
var_dump($x); 
echo "</br>";
$y=30;
echo $y."<br>";
var_dump($y);
echo "</br>";
?>
<?php
// comments in php 
// Single line comment(//) Multiline comment(/*.....*/)

// constants and variables in php 
// constant variables
// define(name, value, case-insensitive) third parameter is particularly used to print value doesent matter it is in small case or in upper case or simply it removes case sensitivity 

// cant use $ sign with constant variable name.
// constant variables are global variables
define("test", 50);
$sum= test +20;
echo $sum;
echo "</br>";
// example with using thirst parameter case-insensitive
define("result",60, true);
$sub= Result-10;
echo $sub;
?>