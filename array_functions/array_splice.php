<?php
/*------ Array Splice ------*/
$color =["red","green","blue","yellow","brown"];

$fruit = ["Orange", "Apple"];

array_splice($color, 2 ); /* ----- First Method-------*/

array_splice($color, 1, -1); /* ---- Second Method----*/

array_splice($color, 1, -2); /* ---- Third Method ------- */

/* -------Remove the last element of $color-------- */
array_splice($color, -1);

/* -------Remove the first element of $color------- */
array_splice($color, 0, 1);

/* -----------Remove First Two elements and add new elements in $color ------------- */
array_splice($color, 0 , 2, $fruit);

/* -----------Replace Third and fourth element in $color ------------- */
array_splice($color, 2 , 2, $fruit);

/* -----------use count method in $color ------------- */
array_splice($color, 2, count($color), $fruit);

/* -----------add new elements in $color with count method ------------- */
array_splice($color, 2, 0, $fruit);

/* -----------add new elements in begining of $color with count method ------------- */
array_splice($color, 0, 0, $fruit);

/* -----------add new elements in the end of $color with count method ------------- */
array_splice($color,count($color),0, $fruit);

echo "<pre>";
print_r($color);
echo "</pre>";

?>