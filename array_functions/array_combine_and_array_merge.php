<?php
/* Multiple Array Merge */
$fruit = ["orange", "banana", "grapes"];
$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* Multiple Array Merge */
$color = ['red', 'blue'];

$multi=array_merge($fruit,$veggie,$color);

echo "<pre>";
print_r($multi);
echo "</pre>";

/* ASSOCIATIVE Index Array */
$fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];

$veggie = ['d' => 'carrot','e' => 'pea']; /* ---- Also with SAME KEY */
$asso=array_merge($fruit,$veggie);

echo "<pre>";
print_r($asso);
echo "</pre>";
/* Numberic Value Enter */
$veggie = ['b' => 'carrot','e' => 'pea', 55, 68];


/* if u want the duplicate key entry of first array */
$newArray = $fruit + $veggie;


/* array_merge_recursive */
$newArray = array_merge_recursive($fruit,$veggie); /* for common key built new array  */


$veggie = ['b' => ['color' => ['red','blue','green']],  /* ---- more complex multidim array ----*/
            'e' => 'pea',
            55,
            68
          ];

$newArray = array_merge_recursive($fruit,$veggie);


/* array_combine */
$name = array("Ram","Mohan","Salman");
$age = array("35","37","43");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>