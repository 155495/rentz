<?php 
include('../data/dbFunctions.php');
$d=$_GET['id'];
$sqli="UPDATE `tbl_user` SET `status` = '1' WHERE `id` = $d;";
	$rs=insert_update($sqli);
	if($rs=="OK"){
		$msg="blocking  Successfully";
		header("Location:../index.php?d=1");
		}
	else{
		$msg="blocking  errorrrr";
		echo $msg;
		}


	
	
	?>