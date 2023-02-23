<?php
<?php


/* filter_var(var, filtername, flag) 

filtername 1)FILTER_SANITIZE_EMAIL 2)FILTER_SANITIZE_URL 3)FILTER_SANITIZE_NUMBER_INT 4)FILTER_SANITIZE_NUMBER_FLOAT 5)FILTER_SANITIZE_MAGIC QUOTES 6)FILTER_SANITIZE_STRING 7)FILTER_SANITIZE_ENCODED 7)FILTER_SANITIZE_SPECIAL_CHARS*/
/*-------FILTER_SANITIZE_EMAIL -- removes all illegal characters from an email address------- */
$var = "ram(.kumar)@exa//mple.com";
/* $var = "(ram.kumar@example.com)";
$var = "ram/kumar@example.com";
$var = "ram kumar@example.com";

$var = "ram.kumar@example/com";
$var = "ram.kumar@exam/ple.com"; */

echo filter_var($var, FILTER_SANITIZE_EMAIL);

$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if(filter_var($var, FILTER_VALIDATE_EMAIL)){
  echo "<br>$var is valid email.<br>";
}else{
  echo "<br>$var is not an valid email.<br>";
}

/*-------FILTER_SANITIZE_URL------- */
$var = "https://www.yahoo baba.net";
//$var = "https://www.ya hoo baba.net";

//$var = "https://www.yah^^oo//baba.net";

$var = filter_var($var, FILTER_SANITIZE_URL);

if(filter_var($var, FILTER_VALIDATE_URL)){
  echo "<br>$var is valid URL.<br>";
}else{
  echo "<br>$var is not an valid URL.<br>";
}

/*-------FILTER_SANITIZE_NUMBER_INT------- */

$var = "45";
//$var = "45.00";
//$var = "*45";
//$var = "&45";
//$var = "45^^";
//$var = "abcd45@#$%";

//$var = "+45";
//$var = "-45";
//$var = "45+";
//$var = "-45.00";
//$var = "-45.50";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if(filter_var($var, FILTER_SANITIZE_NUMBER_INT)){
  echo "<br>$var is valid Integer.<br>";
}else{
  echo "<br>$var is not an valid Integer.<br>";
}

/*-------FILTER_SANITIZE_NUMBER_FLOAT------- */

 $var = "45.50";
//$var = "45.50abc";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT);

if(filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)){
  echo "<br>$var is valid Float.<br>";
}else{
  echo "<br>$var is not an valid Float.<br>";
}


/*-------FILTER_FLAG_ALLOW_FRACTION - Allow fraction separator (like . )------- */
//$var = "45.50";
$var = "45.50abc";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);

if(filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)){
  echo "<br>$var is valid Float.<br>";
}else{
  echo "<br>$var is not an valid Float.<br>";
}


/*-------FILTER_FLAG_ALLOW_THOUSAND - Allow thousand separator (like , )------- */
$var = "1,50,000";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);

if(filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)){
  echo "<br>$var is valid Float.<br>";
}else{
  echo "<br>$var is not an valid Float.<br>";
}

/*-------FILTER_FLAG_ALLOW_SCIENTIFIC - Allow scientific notation (like e and E)------- */
$var = "10e";
//$var = "10E"; 

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC);

if(filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT)){
  echo "<br>$var is valid Float.<br>";
}else{
  echo "<br>$var is not an valid Float.<br>";
}
?>

<?php
/*-------FILTER_SANITIZE_MAGIC_QUOTES  -- work same as addslashes() function------- */
$var = "Yahoobaba's website!";
//$var = 'Yahoobaba"s website!';
//$var = 'Yahoobaba"s \website!';

echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES)."<br>";

/*-------FILTER_SANITIZE_STRING------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING)."<br>";

/*-------FILTER_FLAG_ENCODE_AMP ------ Convert & to &amp------- */
$var = "<h1>Yahoo & Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP)."<br>";

/*-------Search (Ascii table) - for special characters------- */

//FILTER_FLAG_STRIP_HIGH --- ASCII value > 127
//FILTER_FLAG_STRIP_LOW  --- ASCII value < 32 

$var = "<h1>Yahoo & BabaÈÒØ</h1>";
echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_SANITIZE_ENCODED - Encode every thing------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_FLAG_STRIP_LOW - Remove characters with ASCII value < 32------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_LOW)."<br>";

/*-------FILTER_FLAG_STRIP_HIGH - Remove characters with ASCII value > 127------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH)."<br>";

/*-------FILTER_FLAG_ENCODE_LOW - Encode characters with ASCII value < 32------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_LOW)."<br>";

/*-------FILTER_FLAG_ENCODE_HIGH - Encode characters with ASCII value > 127------- */
$var = "<h1>Yahoo Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH)."<br>";

/*-------FILTER_SANITIZE_SPECIAL_CHARS -- <>& and characters with ASCII value------- */
$var = "<h1>Yahoo & Baba</h1>";

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);