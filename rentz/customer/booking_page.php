<?php
	if(!isset($_GET['pid'])){
		$pid=$_SESSION['username'];
		}
		else{
	$pid=$_GET['pid'];}
	
	if(isset($_GET['cid'])){
		$carid=$_GET['cid'];
		
		}
		else{
			$carid=0;
			}
	include('../config.php');
	include('../data/data_functions.php');
	
$car=get_single_cars($carid);


?>




<div class="col-md-10 col-md-offset-1">

<form id="frmaddcar" action="db_booking.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <label>Car Name</label>
        <input type="text"  readonly class="form-control" id="carname" name="carname" value="<?php echo $car['car_company_name']; ?>">
 	 </div>
     <div class="form-group">
        <label>Car Colour</label>
        <input type="text" readonly  class="form-control" id="carcolour" name="carcolour" value="<?php echo $car['car_colour']; ?>">
 	 </div>
     <div class="form-group">
        <label>Car Image</label><br/>
        <img src="../<?php echo $car['car_image']; ?>" class="img-circle" width="300px" height="300px">
 	 </div>
     <div class="form-group">
        <label>Car Provider Details</label>
        <input type="text" readonly  class="form-control" id="carprovider" name="carname" value="<?php echo $car['car_pro_id']; ?>">
        <input type="hidden" class="form-control" id="carid" name="carid" value="<?php echo $carid; ?>">
         <input type="hidden" class="form-control" id="pid" name="pid" value="<?php echo $pid; ?>">
 	 </div>
     <div class="form-group ">
       
       	<button  type="submit" class="btn btn-primary">Book Now</button>
  		<button   type="reset" class="btn btn-default">Cancel</button>
       
      </div> 
</form>
</div>
