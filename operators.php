<?php
// + addition, - substraction, * multiplication, **exponentiation(power of value), / Division, % reminder, ++increament, --decrement 
$a=30;
$b=2;
$c=$a**$b;
echo $c;
echo "</br>";
$p=20;
$p++;
// or ++$p also we can use for increment
echo $p;
echo "</br>";
$q=30;
$q--;
echo $q;
echo "</br>";
$r=20;
$s=30;
$t=($r+$s)*3;
echo $t;
echo "</br>";
?>

<?php
// Assignment operators
/*operator      example        same as
 =              X=Y            X=Y
 +=             X+=Y           X=X+Y
 -=				X-=Y		   X=X-Y
 *=				X*=Y           X=X*+Y
 /= 			X/=Y           X=X/Y
 %= 			X%=Y           X=X%Y
 **= 		    X**=Y          X=X**Y
*/
 $a=20;
 $b=20;
 $a+=$b;
 echo $a;
 echo "</br>";
?>
<?php
/*comparison operators
 it returns only true or false result if condition match returns true else returns false 
 specially used in if else statement 
 it returns 1 if answer is true else rturns 0 if answer is false or returns empty string

 operator   Description                             Example
 ==         Equal to                                $X==$Y
 ===        equal value and equal type              $X===$Y
 !=         Not Equal                               $X!=$Y
 <>         Not Equal                               $X<>$Y
 !==        Not Equal value or not equal type       $X!==$Y
 >          greater than                            $X>$Y
 <          less than                               $X<$Y
 >=         greater than or equal to                $X>=$Y
 <=         less than or equal to                   $X<=$Y
 */
$x=20;
$y=20;
echo $x==$y;
echo "</br>";
?>
<!-- string operators 
there are two string operators in php 1). 2).= we can concate two values with two different datatypes 
-->
<?php
$a="Hii"."\n";
$a.="Manoj Muli"."\n";
$a.="Your Birthdate is"."\n";
$a.=21;
$a.="sept";
echo $a;
?>