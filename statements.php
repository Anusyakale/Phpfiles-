<?php
// if statement
// syntax if(condition true){ statement}
// or we can write if (condition): statement endif;
$x=20;
if ($x>=10){
	echo "X is grater than 20<br>";
}
echo "here is another statement<br>";
?>
<!-- conditional operators 
if condition1 false
           condition2 false  out
               |
               true
               |             
               statement
-->
<!-- operator  Name            syntax                                      description
     &&        Logical AND    if(condition1 &&condition2)  runs when both conditions are true if 									  {statement} 			      one of them or both are false is dosent run 
     ||        Logical OR     if(condition1||condition2)   runs when both conditions are true if 									         {statement}          one of them or true are true then also statement 							                    	      will run but if both statements are flase it dosent 													    run            
     !         Logical 		  if !(condition)              it returns reverse ans if condition true it returns 						    {statements}			     false if condition false it returns true
     and       Logical AND
     or        Logical OR
     xor       Exclusive Or  if !(condition1 xor condition2) it returns false if both conditions asre either   									 {statements}		   true or both are false but one of them is false & 													     atleast one is true it returns true 
                            
     -->

 
 <?php
// logical AND
 $age=20;
 if ($age>=18 && $age<=21){
 	echo "you are eligible.<br>";
 }
 // logical OR
 $marks=35;
 if($marks>=35 || $marks<=40)
 {
 	echo "you are pass<br>";
 }
 // exclusive or
 $result=34;
if($result>=20 xor $result<=35)
{
	echo "you are fail";
}
 ?>
<!-- if else statement
if (conditiontrue){
	statement for true
}
else {
	statement for false 
}
 -->
 <?php
$name="Manoj Muli";
$gender="male";
if($gender=="male")
{
echo "hello Mr."."\n".$name;
}else{
echo "Hello Miss.".$name;
}
echo "</br>";

?>
<!-- if elseif : used to use multiple statements
syntax: if (condition1){statement1}elseif(condition2){statement2}else{default statement}  we can use multiple elseif statements
-->
<?php
$per=80;
if($per>=80 && $per <=100){
	echo "you are in 1st Division<br>";
}else if($per>=60 && $per <=80){
	echo "you are in 2nd Division<br><br>";
}else if($per>=35 && $per <=60){
	echo "you are in 3rd Division<br><br><br>";
}else if($per>=35){
	echo "you are fail<br>";
}
else
{
	echo "enter valid percentage<br>";
}
	?>
<!-- switch statement -->
<!-- syntax
switch (expression){
	case condition1: statements
	break;
	case condition2: statements
	break;
	case condition3: statements
	break;
	default:statements
	}
 -->
 <?php
$weekday=2;
switch($weekday){
case 1:
echo "Today is Monday<br>";
break;
case 2:
echo "Today is Tuesday<br>";
break;
case 3:
echo "Today is Thursday<br>";
break;
case 4:
echo "Today is Friday<br><br>";
break;
case 5:
echo "Today is Saturday<br><br><br>";
break;
case 6:
echo "Today is Sunday<br><br><br><br>";
break;
default: "enter valid day<br>";
}

?>
<!-- ternary operator
syntax (condition)? true statement: fa;se statement  mostly use comparison operators
 -->
<?php
$x=10;
($x>=20)? $Z="greater":$Z="smaller";
echo $Z;
echo "<br>";
$a=40;
$b=($a>=30)? "Greater": "Smaller";
echo $b;
// we can use concatination to concate string with statement
// eg :in above example: 
// $b="value is :". ($a >20 ? "Greater": "Smaller");
?>
<!-- break and continue statement -->
<?php
for ($o=1; $o<=10; $o++){
	if($o==5){
		echo "this is number". $o. "<br>";
		continue;

	}
	echo "Number: ". $o. "<br>";
}
for ($t=1; $t<=10; $t++){
	if($t==5){
		echo "this is number". $t. "<br>";
		break;

	}
	echo "Number: ". $t. "<br>";
}
?>
<!-- goto statement -->
<!-- for(initialization; condition; increment/decrement){
	if(condition){
	goto label;
	}
	echo "";
} 
echo "";
label:
echo "";
-->
<?php
echo "this is goto statement example1<br>";
echo "this is goto statement example2<br>";
goto newline;
echo "this is goto statement example3<br>";
echo "this is goto statement example4<br>";
newline:
echo "print new statement in new line<br>"
	?>