<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'chef_cusinier';

$conn = mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
    die("Error" .mysqli_connect_error());
}
?>
