<?php
$cookie_name="user";
$cookie_value="Anusya ManoJ Muli";

setcookie($cookie_name,$cookie_value, time() +(86400 * 30), "/");
// here we can use calculator to calculate when we want to expire cookie here cookie will expire after 30 days 
?>
<html>
<head>
	<title>
		
	</title>
	</head>
	<body>
		<?php 
   if (!isset($_COOKIE[$cookie_name])){
   echo "cookie is not set";
   }
   else
   {
echo $_COOKIE[$cookie_name];
   }
   ?>

	</body>
</html>
