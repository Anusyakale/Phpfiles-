<?php
/* specially used for array 
syntax  foreach($variable as $value)
*/
$age= [
	"bill"=>22,
	"steve"=>30,
	"elon"=>28
];
echo "<ul>";
foreach ($age as $key => $value) {
	echo "<li> $key = $value </li>";
}
echo "</ul>";
?>

<!-- Multidimentional array -->
<?php
$emp=[
	[1, "krishna", "Manager", 50000],
	[2, "Ram", "Salesman", 30000],
	[3, "Laxman", "computer operator", 10000],
	[4, "Hari", "Driver", 5000]
];
echo "<table border='1px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
<th> Emp Id</th>
<th> Emp Name</th>
<th>Designation</th>
<th> Salary </th>
</tr>";
foreach($emp as $v1){
echo "<tr>";
foreach($v1 as $v2){
	echo "<td> $v2</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<br>"
?>
<!-- Multidimentional associative array -->
<?php
$marks=["krishna"=> ["physics"=>35, "Maths"=>45, "Chemistry"=>83],
"Ram"=> ["physics"=>55, "Maths"=>40, "Chemistry"=>60],
"Laxman"=> ["physics"=>65, "Maths"=>65, "Chemistry"=>43],
];
echo "<table border='1px' cellpadding='10px' cellspacing='0px'>";
echo "<tr>
<th> Name Of Student</th>
<th> Physics</th>
<th>Maths</th>
<th>Chemistry</th>
</tr>";
foreach($marks as $key=>$value1){
	echo "<tr>";
	echo "<td> $key </td>";

	foreach($value1 as $value2){
		echo "<td>  $value2 </td>";
	}
	echo "</tr>";
}
echo "</table>";
?>