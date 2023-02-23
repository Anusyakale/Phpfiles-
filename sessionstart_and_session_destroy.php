<?php
session_start();
echo "User Name :"." " .$_SESSION['username'];
?>
<?php
session_unset();
session_destroy();
 echo "session is destroy";

?>