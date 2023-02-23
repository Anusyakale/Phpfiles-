<?php
// loops divided into three parts1 initialization 2. condition {statement} 3. increment/decrement
// types of loops 1. while loop 2.do/whileloop  3. for loop 4.foreach loop
// while loop: execute loops while condition becomes true
$a=1; 
while ($a<=5) {
	// echo "hello Manoj<br>";
	// we can add counting also for that we need to add echo $a.") 
echo $a.") hello Manoj<br>";
$a= $a+1;
// or we can use increment operator $a++;

}

$b=10;
while($b>=1){
	// echo "Anusya is Here<br>";
	echo $b. ") Anusya is Here<br>";
	$b--;
}

// we can use ul or ol tags also in loop
$p=1;
while($p<=11)
{
	echo "<ul>";
	echo "<li>". "Hello Mr.And Mrs.Muli.". "</li>";
	echo "</ul>"; 
	$p=$p+2;
	// it increments value by two 
}
?>
<!-- do/while loop
loop will execute until condition becomes false 
first executes statement then increment/ decrement then checkcondition once the conditio become false loop will execute 
 -->
 <?php
$x=1;
do{
	// echo "<ul>";
echo $x."). Hello Anusya<br>";
	// echo "</ul>";
		$x++;
	}
	while ($x<=10)
?>
<!-- for loop 
syntax for(initialize; condition; increment/decrement){statement}
-->
<?php
$m=10;
for($m=1; $m<=11; $m++)
echo "<b>".$m.") Hello World.</b><br>";

	?>
	<!-- nested loop
     loop in loop
	 -->
	 <?php
echo "<table border = 1; cellpadding='5px' cellspacing='0px'>";
$count=1;
		for($n=1; $n<=100; $n=$n+10){
 print("<tr>");
for($l= $n; $l<$n+10; $l++){
	  print("<td>" . $count . "</td>");
	  $count++;
}
print ("<tr>");
}
	echo "</table>";
?>
