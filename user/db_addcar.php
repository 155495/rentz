<?php 
include('../data/dbFunctions.php');
if(isset($_POST['ac']))
{$car_ac=0;}else{$car_ac=1;}

if(isset($_POST['musicplayer']))
{$car_music=0;}else{$car_music=1;}

if(isset($_POST['ac']))
{$car_at=0;}else{$car_at=1;}
$car_milage=addslashes($_POST['milage']);
$car_charge=addslashes($_POST['charge']);
$car_catagory=addslashes($_POST['categeory']);
$car_colour=addslashes($_POST['colour']);
$car_company_name=addslashes($_POST['Company']);
$user=addslashes($_POST['usernameid']);
$car_model=addslashes($_POST['model']);
$car_model_year=addslashes($_POST['year']);
$car_regno=addslashes($_POST['reg']);

$car_policy_expdate=addslashes($_POST['policyexp']);

$car_seat_capacity=addslashes($_POST['seat']);



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
$car_image=addslashes($pathname);
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
$car_rcbook=addslashes($pathname3);
include('../data/data_functions.php');
$id=get_single_user_by_lic($user);
$unameid=$id['id'];
echo $unameid;
echo $user;




$sql="INSERT INTO `tbl_cars` (`car_pro_id`, `car_company_name`, `car_rcbook`, `car_model`, `car_colour`, `car_model_year`, `car_seat_capacity`, `car_catagory`, `car_policy_expdate`, `car_image`, `car_ac`, `car_at`, `car_music`, `car_regno`, `car_milage`, `car_sts`, `car_charge`) VALUES ('$user', '$car_company_name','$car_rcbook', '$car_model', '$car_colour', '$car_model_year', '$car_seat_capacity', '$car_catagory', '$car_policy_expdate', '$car_image', '$car_ac', '$car_at', '$car_music', '$car_regno', '$car_milage',  '0', '$car_charge');";
$rs=insert_update($sql);
if($rs=="OK"){
	$msg="Registration Successfully";
	header("Location:../customer/p.index.php?d=1");
	

}else{
	$msg="Error!!! $rs";
	header("Location:../customer/p.index.php?d=1");
	
	}


?>

