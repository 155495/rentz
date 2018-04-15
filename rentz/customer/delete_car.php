<?php 
$id=$_GET['id'];

include_once('../data/dbFunctions.php');
$sql="DELETE FROM `tbl_cars` WHERE `id` = '$id'";
 $res=insert_update($sql);
if($res=="OK"){
	$msg="Car  Removed successfully";

	header("Location:p.index.php?d=1");
}else{
	$msg="Error ".$res;
	echo $msg;
} 

?>