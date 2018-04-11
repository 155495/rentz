<?php 
if(!session_id()) session_start();
include('config.php');
$unm=$_POST['email'];
$pas=$_POST['pass'];
if($unm!="" && $pas!=""){
	$sql="SELECT * FROM `tbl_admin` WHERE `username`='$unm' AND `password`='$pas' AND `status`=0";
	
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
/*while($row=mysqli_fetch_array($result))
	{
		$typ=array();
		$typ['category']=$row['category'];
		
		}*/
if ($count == 1){
$_SESSION['username'] =$unm;
echo"success";
/*if($typ['category']==0){
	
	header("Location:../customer/p.index.php?id=100");
	}
else{
	header("Location:../customer/c.index.php?id=101");
	}
*/
header("Location:index.php");		
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
echo $fmsg;
}
}
?>
