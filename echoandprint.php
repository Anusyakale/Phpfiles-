<?php
echo "Anusya", "\n", "Manoj", "\n";
echo 25.25, "\n";
echo "</br>";
// we can print multiple values using single echo statement, but if we are using print to print values it takes only one value at a time 
// print "anusya", "Manoj"; -> it shows error masg 
// instead of this we can use concatination for concatinate two different values
// eg:print "Anusya"."Manoj";
print "Anusya Manoj". "\n";
print 50.50;
print "</br>";

// variables
// which stores value and print using a variable 
// write ways to declare variables:1)$firstname 2)$_firstname 3)$first_name 4)$first-name 5)$firstName 6)$firstname99
// wrong ways to declare variables: 1) $first name 2) $99firstname 3)$first%name
$name="Anusya Manoj <br>";
$num=2323;
echo $name.$num;
?> 