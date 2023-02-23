<?php
/* File Put Content Function-Writes data to a file */
echo file_put_contents("readme1.txt","This is testing text.") . "<br><br>"; 

//o/p 21 it shows no. of characters in new text // 

echo file_put_contents("readme1.txt","The new text.",FILE_APPEND) . "<br><br>"; //------- with MODE

echo file_put_contents("readme1.txt","Another new text.",FILE_APPEND | LOCK_EX) . "<br><br>"; 

/* File Gets Content Function-Reads a file into a string */
echo file_get_contents("readme1.txt"). "<br><br>";

echo file_get_contents("readme1.txt",FALSE, NULL, 0, 36). "<br><br>"; 
?>