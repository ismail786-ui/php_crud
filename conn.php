<?php
$server = 'localhost';
$userName = 'root';
$password = '';
$dataBase = 'php_crud';

//connecttion 
$conn = mysqli_connect($server,$userName,$password,$dataBase);
//check connect
if(!$conn){
die("Connection failed: " . mysqli_connect_error());;
}







?>