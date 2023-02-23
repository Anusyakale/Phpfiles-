<?php
/*function functionname(){   declaration
	 statement
}
functionname(); callinf a function
*/
function hello()
{
	echo "hello everyone.<br>";
}
hello();
	?>

	<?php

	/* functions with parameters 
syntax  function functioname(parameer1, parameter2){
	 statement
	}
	functionname(argument1, argument2);

*/
function para($fname, $lname){
	echo "hello $fname $lname.<br>";
}
para("Manoj", "Muli");
para("Anusya", "Manoj");
?>

<?php
/* function with return value
function functionname(parameter1, parameter2){
	statements
	return value;     return is a keyword
}
$variable =functionname(argument1,argument2);
*/
function sum($math, $eng, $sci){
	$s= $math + $eng + $sci;
	return $s;
}
$total=sum(20, 30, 40);
echo $total;
echo "</br>";
	?>
	<?php

	/*function call by value and function call by reference
	in call by value it prints the value which is given to the variable but in call by reference it prints the value which is given by address as a reference of the variable*/
function newf($string){
	$string="hello php";
}
$str="this is call by value example<br>";
newf($str);
echo $str;
function reference(&$ref){
	$ref.= "this is call by reference example<br>";
}
$address="merge both variables"."\n";
reference($address);
echo $address;

function first($num){
	$num+=5;
}
function second(&$num){
	$num+=7;
}
$number=10;
first($number);
echo "original value is $number <br>";
second($number);
echo "original value of second number is $number <br>"
?>

<?php
/* variable function the function name whi we are declaring with function keyword use that function name in a variable in the string form its dont allow to use () then that variable is run as a function */
function example(){
	echo "this is variable function example<br>";
}
$func="example";
$func();
// or alternate way to declare variable function which we can called as anonomus functions in php
$sayhello =function($name){
echo "Hello $name";
};
$sayhello("Manoj");
?>
