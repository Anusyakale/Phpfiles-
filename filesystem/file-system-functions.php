<?php
/*
we can create or read text file json files and csv files on server. using file system function we can 1. create file or folders 2.read files 3. get file information 4.change permission (read only) */


/* file system functions: 1)readfile() 2)file_exist() 3)copy() 4)rename() 5)mkdir 6)rmdir 7)delete
8)unlink() 9)filesize 10)filepath 11)filetype() 12)realpath() 13)pathinfo() 14)dirname() 15)basename()

/* File System*/


// $file = "readme.txt";
// if(file_exists($file)){
//    echo readfile("readme.txt"); 
// }else{
//   echo "File doest not exist". "<br><br>";
// }


$file = "readme.txt";
if(file_exists($file)){
   echo readfile("readme.txt");

   copy($file,"newfile.txt"); 
}else{
  echo "File doest not exist" . "<br><br>";
}


$file = "readme.txt";
if(file_exists($file)){
  rename("newfile.txt","old-file.txt");  
}else{
  echo "File doest not exist" . "<br><br>";
}


$file = "readme.txt";
if(file_exists($file)){
  unlink("old-file.txt");  //remove server file 
}else{
  echo "File doest not exist" . "<br><br>";
}

$file = "readme.txt";

if(!file_exists("textfiles")){
   mkdir("textfiles");
}else{
  echo "File already exist". "<br>";
}

$file = "readme.txt";
echo filesize($file) . "<br>";  

echo filetype($file) . "<br>";   //---- Return type of passing file
echo filetype($file). "<br>";

echo realpath($file) . "<br>"; //--- Get the full path of the file

echo "<pre>";
print_r(pathinfo($file));  //--- passing only file name
echo "</pre>";

$path =  realpath($file) . "<br>"; 
print_r(pathinfo($path));       //--- passing full path

print_r(pathinfo($path,PATHINFO_DIRNAME)). "<br>"; //------- return only dirname

print_r(pathinfo($path,PATHINFO_BASENAME)). "<br>"; //------return only basename

print_r(pathinfo($path,PATHINFO_EXTENSION)). "<br>"; //------return only extension

print_r(pathinfo($path,PATHINFO_FILENAME)). "<br>"; //------return only filename

//Show filename
echo basename($path) ."<br/>";

//Show filename, but cut off file extension for ".php" files
echo basename($path,".txt");


$file = "readme.txt";
$path = realpath($file);

echo dirname($path). "<br>"; //------ Return the path of the parent directory:

echo dirname($path,2) . "<br>";
?>
