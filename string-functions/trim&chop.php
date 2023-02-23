<?php
/*-------String Trim Function------- */
$str = "hello  world";

echo '<pre>';
print_r($str);
echo '</pre>';

$newstr = trim($str,"e");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = trim($str,"l"); //-- no effect

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = trim($str,"ld");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = trim($str,"hld");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String Left & Right Trim Function------- */
$newstr = rtrim($str,"hld");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = ltrim($str,"hld");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String Remove Trim Function------- */
$str = "hello manoj";

$newstr = trim($str);

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = rtrim($str);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String Chop Trim Function-- work same as rtrim------- */

$newstr =  chop($str, "hoj");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr =  chop($str, "manoj");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr =  chop($str); //-- remove extra right space

echo '<pre>';
print_r($newstr);
echo '</pre>';
?>