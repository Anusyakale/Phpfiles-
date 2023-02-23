<?php
/*------ Array Slice ------*/
$color=array("red","green","blue","yellow","brown");

$newArray = array_slice($color, 1, 2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* -------------with Negative Index---------- */
print_r(array_slice($color,-2,1));
echo '<br>';
echo '<br>';

/* ---------Preserve Parameter----------- */
print_r(array_slice($color,1,2,true)); 
echo '<br>';

/* ---------------Preserve Parameter With Associative Array --------------------- */
$color = array('a'=>'red', 'b'=>'green', '42'=>'blue', 'd'=>'yellow');

array_slice($color, 0, 3);
echo '<br>';
array_slice($color, 0, 3, true);
echo '<br>';
/* -------------Preserve Parameter - III-------------- */
$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
print_r(array_slice($a,1,2));

?>