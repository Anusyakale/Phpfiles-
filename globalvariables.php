<?php
$x=10;
$y=20;
function test()
{
global $x,$y;
$x= $x+$y;
}
test();
echo "The addition of both x and y variables is: $x <br>" ;
echo "This is example of Global variable"
?>
 