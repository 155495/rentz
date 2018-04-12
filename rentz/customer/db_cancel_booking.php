<?php 
include('../data/dbFunctions.php');
$cid=$_GET['cid'];
$sqli="UPDATE `tbl_cars` SET `car_sts` = '0' WHERE `id` = $cid;";
	$rs=insert_update($sqli);
	if($rs=="OK"){
		$msg="Booked  Successfully";
		header("Location:../customer/p.index.php?d=4");
		}
	else{
		$msg="Booking errorrrr";
		echo $msg;
		}


	
	
	?>