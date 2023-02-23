<?php
$cookie_name = "user";
$cookie_value = "Hello PHP Learner";

setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
?>

<html>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set";
        }else {
            echo $_COOKIE[$cookie_name];
        }
        echo "<br>";
    ?>
</body>
</html>
<?php
 echo "Cookie Value :" . $_COOKIE["user"];

 setcookie("user", "" ,time() - (86400 * 30), "/");
?>
