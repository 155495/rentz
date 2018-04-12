<?php //include('config.php');
include_once('../config.php');
function get_all_users()
{	
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_cars` ORDER BY `id` DESC";
	$result=mysql_query($connection,$sql);
	while($row=mysql_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['address']=stripslashes($row['address']);
		$typ[$a]['category']=stripslashes($row['category']);
		$typ[$a]['firstname']=stripslashes($row['firstname']);
		$typ[$a]['idphoto']=stripslashes($row['idphoto']);
		$typ[$a]['lastname']=stripslashes($row['lastname']);
		$typ[$a]['licenceno']=stripslashes($row['licenceno']);
		$typ[$a]['licencephoto']=stripslashes($row['licencephoto']);
		$typ[$a]['mobno']=stripslashes($row['mobno']);
		$typ[$a]['password']=stripslashes($row['password']);
		$typ[$a]['status']=stripslashes($row['status']);
	$a++;
	}
	return $typ;
}

function get_all_cars()
{	
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_cars` ORDER BY `id` DESC";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['car_ac']=stripslashes($row['car_ac']);
		$typ[$a]['car_at']=stripslashes($row['car_at']);
		$typ[$a]['car_catagory']=stripslashes($row['car_catagory']);
		$typ[$a]['car_charge']=stripslashes($row['car_charge']);
		$typ[$a]['car_colour']=stripslashes($row['car_colour']);
		$typ[$a]['car_company_name']=stripslashes($row['car_company_name']);
		$typ[$a]['car_image']=stripslashes($row['car_image']);
		$typ[$a]['car_milage']=stripslashes($row['car_milage']);
		$typ[$a]['car_model']=stripslashes($row['car_model']);
		$typ[$a]['car_model_year']=stripslashes($row['car_model_year']);
		$typ[$a]['car_music']=stripslashes($row['car_music']);
		$typ[$a]['car_policy_expdate']=stripslashes($row['car_policy_expdate']);
		$typ[$a]['car_pro_id']=stripslashes($row['car_pro_id']);
		$typ[$a]['car_rcbook']=stripslashes($row['car_rcbook']);
		$typ[$a]['car_regno']=stripslashes($row['car_regno']);
		$typ[$a]['car_seat_capacity']=stripslashes($row['car_seat_capacity']);
		$typ[$a]['car_sts']=stripslashes($row['car_sts']);
		
	$a++;
	}
	return $typ;
}



function get_single_cars($cnm)
{
	include('../config.php');
	$sql="SELECT * FROM `tbl_cars` WHERE `id`='$cnm'";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ=array();
		$typ['id']=$row['id'];
		$typ['car_ac']=stripslashes($row['car_ac']);
		$typ['car_at']=stripslashes($row['car_at']);
		$typ['car_catagory']=stripslashes($row['car_catagory']);
		$typ['car_charge']=stripslashes($row['car_charge']);
		$typ['car_colour']=stripslashes($row['car_colour']);
		$typ['car_company_name']=stripslashes($row['car_company_name']);
		$typ['car_image']=stripslashes($row['car_image']);
		$typ['car_milage']=stripslashes($row['car_milage']);
		$typ['car_model']=stripslashes($row['car_model']);
		$typ['car_model_year']=stripslashes($row['car_model_year']);
		$typ['car_music']=stripslashes($row['car_music']);
		$typ['car_policy_expdate']=stripslashes($row['car_policy_expdate']);
		$typ['car_pro_id']=stripslashes($row['car_pro_id']);
		$typ['car_rcbook']=stripslashes($row['car_rcbook']);
		$typ['car_regno']=stripslashes($row['car_regno']);
		$typ['car_seat_capacity']=stripslashes($row['car_seat_capacity']);
		$typ['car_sts']=stripslashes($row['car_sts']);
		
	}
	return $typ;
}
function get_single_user_by_lic($cnm)
{
	$sql="SELECT * FROM `tbl_user` WHERE `licenceno`='$cnm'";
	$result=mysqli_query( $GLOBALS['connection'],$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ=array();
		$typ['id']=$row['id'];
		$typ['licenceno']=stripslashes($row['licenceno']);
		$typ['address']=stripslashes($row['address']);
		$typ['category']=stripslashes($row['category']);
		$typ['firstname']=stripslashes($row['firstname']);
		$typ['idphoto']=stripslashes($row['idphoto']);
		$typ['lastname']=stripslashes($row['lastname']);
		$typ['licencephoto']=stripslashes($row['licencephoto']);
		$typ['mobno']=stripslashes($row['mobno']);
	}
	return $typ;
}

function get_all_booked_cars($cid)
{	include('../config.php');
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_booking` WHERE `cust_id`='$cid'ORDER BY `book_id` DESC";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['book_id']=$row['book_id'];
		$typ[$a]['book_date']=stripslashes($row['book_date']);
		$typ[$a]['cars_id']=stripslashes($row['cars_id']);
		$typ[$a]['comments']=stripslashes($row['comments']);
		$typ[$a]['cust_id']=stripslashes($row['cust_id']);
		$typ[$a]['status']=stripslashes($row['status']);
	$a++;
	}
	return $typ;
}
function get_all_booked_cars_current($cid)
{	include('../config.php');
	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_booking` WHERE `cust_id`='$cid' AND dateDiff(current_timeStamp,`book_date`)<5 ORDER BY `book_id` DESC";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['book_id']=$row['book_id'];
		$typ[$a]['book_date']=stripslashes($row['book_date']);
		$typ[$a]['cars_id']=stripslashes($row['cars_id']);
		$typ[$a]['comments']=stripslashes($row['comments']);
		$typ[$a]['cust_id']=stripslashes($row['cust_id']);
		$typ[$a]['status']=stripslashes($row['status']);
	$a++;
	}
	return $typ;
}
function get_all_booked_carsid_by_provider($cid)
{	include('../config.php');
	$a=0;
	$typ=array();
	$sql="SELECT DISTINCT tbl_cars.id,tbl_cars.car_company_name,tbl_cars.car_model,tbl_cars.car_regno,tbl_cars.car_image,tbl_booking.cust_id FROM tbl_cars RIGHT OUTER JOIN tbl_booking ON tbl_cars.id = tbl_booking.cars_id WHERE tbl_cars.car_pro_id = '$cid'";
	$result=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$typ[$a]=array();
		$typ[$a]['id']=$row['id'];
		$typ[$a]['car_company_name']=stripslashes($row['car_company_name']);
		$typ[$a]['car_model']=stripslashes($row['car_model']);
		$typ[$a]['car_regno']=stripslashes($row['car_regno']);
		$typ[$a]['car_image']=stripslashes($row['car_image']);
		$typ[$a]['cust_id']=stripslashes($row['cust_id']);
		//$typ[$a]['cust_id']=stripslashes($row['cust_id']);
		
	$a++;
	}
	return $typ;
	
}

?>