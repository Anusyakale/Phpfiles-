<?php
// there are three different ways to write array in php 
// 1st way to print array in php
$colors = array("red", 20, "green", 30.30);
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3];
//2nd way using print_r function which is specially used with array for testing purpose
$students=["Manoj", 21, "Anusya", 15];
echo "<pre>";
print_r($students);
echo "<pre>";
// 3rd way to use array is create array directly with index number mostly used when we are working with form 
$subject[0]="Math";
$subject[1]="Eng";
$subject[2]="Sci";
$subject[3]="Hist";
echo "<pre>";
print_r($subject);
echo "<pre>";

// to avoid complexity of code we can use loops in array. foreach loop is specially used for array in php 
// here we are using for loop 

$marks=[80,60,50,70];
for ($i=0; $i<4; $i++){
	echo $marks[$i]."<br>";
}
?>
<?php
/*Associative array
in associative array we are giving name for index instead of index number here in associative array the value before => is key and the value after => is value  which is associte with the key. this => symbol represents the value associates with key so this symbol is required to add between key and value
$a= array(
"bill"=> 10,
here bill is key and 10 is value which is associated with bill 
)
we can use numeric keys also 
*****one more function is also usedin php which is var_dump() which shows values as well as datatypes also where as print_r()shows anlo values ***
*/
$age=["bill"=>20,"steve"=>22,"elon"=>20];
echo "<pre>";
// print_r($age);
$age["elon"]=30;
var_dump($age);
echo "</pre>";
echo $age["bill"]."<br>";
echo $age["steve"]."<br>";
echo $age["elon"]."<br>";
?>
