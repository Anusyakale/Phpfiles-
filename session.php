<?php
session_start();

$_SESSION['username']="admin";
 if (isset($_SESSION['username'])){
echo "Username is". " ".$_SESSION['username'];
}
?>