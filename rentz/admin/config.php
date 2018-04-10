<?php 

//define('con',mysqli_connect("localhost", "root", "","rentz"));
//@mysqli_connect("localhost", "root", "","rentz")or die(mysqli_error());
//@mysqli_select_db("rentz")or die(mysqli_error());

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'rentz');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>