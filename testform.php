<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo $_POST['firstname']. "</br>"; 
echo $_POST['lastname']. "</br>";
echo $_POST['country']. "</br>"; 
echo $_POST['subject']. "</br>"; 
?>
<?php
echo $_REQUEST['firstname']. "</br>"; 
echo $_REQUEST['lastname']. "</br>";
echo $_REQUEST['country']. "</br>"; 
echo $_REQUEST['subject']; 
?>
<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>