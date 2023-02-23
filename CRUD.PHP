<?php
echo "<h1>All Records</h1>";
//con is variable which inclued the connection of sql 
$conn= mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
//$sql variable is used in future for sql query 
$sql ="SELECT  * FROM students JOIN studentclass WHERE students.sclass=studentclass.cid";
// mysquli_query has two parameters 1 is connection name and second query here we have stored query in $sql variable
$result=mysqli_query( $conn, $sql) or die("query unsuccessful");
// mysqli_num_rows ():function chwcks how many row we have in database 
if (mysqli_num_rows($result)>0){
?>

	<table cellpadding='7px' border="1px solid" cellspacing="0">
	<thead>
	<th>Id</th>
		<th>Name</th>
			<th>Address</th>
				<th>Class</th>
					<th>Phone</th>
				</thead>
				<tbody>
					<?php
while($row= mysqli_fetch_assoc($result)){
?>
					<tr>
<td> <?php echo $row['sid']; ?></td>
<td> <?php echo $row['sname']; ?></td>
<td> <?php echo $row['saddress']; ?></td>
<td> <?php echo $row['cname']; ?></td>
<td> <?php echo $row['sphone']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php 
mysqli_close($conn);
?>
<?php } ?>