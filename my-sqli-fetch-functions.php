<?php
// mysqli fetch functions
// mysqli_fetch_assoc():- fetch all values and make them as a associative array
// mysqli_fetch_array():- returns both associative array and index array. fetch only one row in one time 
// mysqli_fetch_row():- fetch data from row. instead of using key we have to add index number.
// mysqli_fetch_all()
// mysqli_fetch_field()

$conn=mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql= "SELECT * FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");
// $row=mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

while($row=mysqli_fetch_assoc($result)){
	echo $row['sname']. " ". $row['saddress']."<br>";
}
?>
<!-- fetch row -->
<?php

$conn=mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql= "SELECT * FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");
$row=mysqli_fetch_row($result);
echo $row[1]." ".$row[4];
?>

<?php

$conn=mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql= "SELECT * FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");
// if we want to fetch associative array from array we have to pass second parameter which has three defined values MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH
$row=mysqli_fetch_array($result);
echo "<pre>";
 print_r($row);
echo "</pre>";

echo $row['sname']." ".$row[3];
?>

<?php

$conn=mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql= "SELECT * FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");
$row1=mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($row1 as $data){
echo $data['sid']." ".$data['sname']." ".$data['saddress']." ".$data['sclass']." ".$data['sphone'] . "<br>";
}
?>