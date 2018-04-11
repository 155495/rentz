<?php 
include('../data/dbFunctions.php');
$address=$_POST['address'];
$category=addslashes($_POST['category']);
$firstname=addslashes($_POST['fname']);
$lastname=addslashes($_POST['lname']);
$licenceno=addslashes($_POST['lic1']).addslashes($_POST['lic2']).addslashes($_POST['lic3']);
$password=addslashes($_POST['pass']);
$mobno=addslashes($_POST['mob']);

$imgTp=$_FILES["idpic"]["type"];
	if($imgTp=="image/jpeg"||$imgTp=="image/png"||$imgTp=="image/gif")
	{ 
		$ret=rand('6000001','8000000');
		$rnam=".jpg";
		$path="../uploads/images/";
		$img=$_FILES['idpic']['tmp_name'];
		$name="rentz_$ret$rnam";
		$filename=move_uploaded_file($img,$path.$name);
		$pathname="uploads/images/$name";	
	 }
$idphoto=addslashes($pathname);
$imgTp3=$_FILES["img"]["type"];
	if($imgTp3=="image/jpeg"||$imgTp3=="image/png"||$imgTp3=="image/gif")
	{ 
		$ret3=rand('3000001','5000000');
		$rnam3=".jpg";
		$path3="../uploads/images/";
		$img3=$_FILES['img']['tmp_name'];
		$name3="rentz_$ret3$rnam3";
		$filename3=move_uploaded_file($img3,$path3.$name3);
		$pathname3="uploads/images/$name3";	
	 }
$licencephoto=addslashes($pathname3);

$sql="INSERT INTO `tbl_user` (`category`, `firstname`, `lastname`, `address`, `mobno`, `licenceno`, `licencephoto`, `idphoto`, `password`, `status`) VALUES ('$category', '$firstname', '$lastname', '$address', '$mobno', '$licenceno', '$licencephoto', '$idphoto', '$password', '0');";

$rs=insert_update($sql);
if($rs=="OK"){
	$msg="Registration Successfully";
	header("Location:../index.php");
	echo $msg;

}else{
	$msg="Error!!! $rs";
	//header("Location:../admin/?d=7&m=$msg&b=2");
	echo $msg;
	}








?>