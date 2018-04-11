<?php 
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'rentz');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$username = 1234;
$password = 1234;
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `tbl_user` WHERE `licenceno`='$username' AND `password`='$password' AND `status`=0";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
echo "login success";
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
echo $fmsg;
}














?>