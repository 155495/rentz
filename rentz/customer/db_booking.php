<?php 
include('../data/dbFunctions.php');
$pid=$_POST['pid'];
$cid=$_POST['carid'];
$sql="INSERT INTO `tbl_booking` (`book_id`, `cars_id`, `cust_id`, `book_date`, `comments`, `status`) VALUES (NULL, '$cid', '$pid', CURRENT_TIMESTAMP, '', '0');";
$rs=insert_update($sql);
if($rs=="OK"){
	$sqli="UPDATE `tbl_cars` SET `car_sts` = '1' WHERE `id` = $cid;";
	$rs=insert_update($sqli);
	if($rs=="OK"){
		$msg="Booked  Successfully";
		}
	else{
		$msg="Booking errorrrr";
		}
	$msg="Booked  Successfully";
	header("Location:../customer/c.index.php?d=6");
	

}else{
	$msg="Error!!! $rs";
	//header("Location:../customer/c.index.php?d=1");
	
	}

echo $sql; 
echo $msg;










?>