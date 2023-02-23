<html>
<head>

  <title>Save data into database</title>
  </head>
  <tbody>
<form class="post_form" action="savedata.php" method="post">
  <div class="form-group">
    <label>Name</label>
<input type="text" name="sname"></div>
<div class="form-group">
    <label>Address</label>
<input type="text" name="saddress"></div>

<div class="form-group">
    <label>Class</label>
    <select name="class">
      <option value= "" selected disabled>select class</option>
      <?php
$conn= mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
//$sql variable is used in future for sql query 
$sql ="SELECT  * FROM studentclass";
// mysquli_query has two parameters 1 is connection name and second query here we have stored query in $sql variable
$result=mysqli_query( $conn, $sql) or die("query unsuccessful");
 while ($row= mysqli_fetch_assoc($result)){

      ?>
      <option value ="<?php echo $row['cid'];?>"><?php echo $row['cname'];?>
    </option>
      <?php  } ?>
</select>
</div>
<div class="form-group">
    <label>phone</label>
<input type="text" name="sphone"></div>
<input class="submit" type="submit" value="save">
</form>

  </tbody>
</html>
<?php
  mysqli_close($conn);
?>