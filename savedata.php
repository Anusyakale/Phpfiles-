<?php
echo $stu_name= $_POST['sname'];
echo $stu_address= $_POST['saddress'];
echo $stu_class= $_POST['class'];
echo $stu_phone= $_POST['sphone'];

$conn= mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
$sql ="INSERT INTO students(sname,saddress,sclass,sphone)VALUES('{$stu_name}', '{$stu_address}','{$stu_class}','{$stu_phone}')";
//{}used to store variable names 
$result=mysqli_query( $conn, $sql) or die("query unsuccessful");

header("location: http://localhost/basicsofphp/CRUD.php");
mysqli_close($conn);
?>