<?php
// basically error functions used to show proper error meassge
// there are four error functions in php 
// mysqli_connect_error()
// mysqli_connect_errno()
// mysqli_error()
// mysqli_error_list()

// $conn=mysqli_connect("localhost", "root", "", "crud1") or die("connection failed:".mysqli_connect_errno());
// $sql= "SELECT * FROM students";
// $result=mysqli_query($conn, $sql) or die("query failed");
// $str="";
// if(mysqli_num_rows($result)>0){
// 	while($row= mysqli_fetch_assoc($result)){
// 	echo $row['sname']. " ". $row['saddress']."<br>";
// 	}
// }

// // output //

// Warning: mysqli_connect(): (HY000/1049): Unknown database 'crud1' in C:\xampp\htdocs\basicsofphp\errorfunctions.php on line 8
// connection failed:1049
?>

<?php
$conn=mysqli_connect("localhost", "root", "", "crud1") or die("connection failed:".mysqli_connect_error());
$sql= "SELECT * FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");
$str="";
if(mysqli_num_rows($result)>0){
	while($row= mysqli_fetch_assoc($result)){
	echo $row['sname']. " ". $row['saddress']."<br>";
	}
}
//output//
// Warning: mysqli_connect(): (HY000/1049): Unknown database 'crud1' in C:\xampp\htdocs\basicsofphp\errorfunctions.php on line 26
// connection failed:Unknown database 'crud1
?>


