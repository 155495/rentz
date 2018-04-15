<?php 
include('config.php');

//$UNM= $_SESSION['username'];

	$a=0;
	$typ=array();
	$sql="SELECT * FROM `tbl_cars` WHERE `car_sts` <> 1  ORDER BY `id` DESC";
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
		
	$a++;}

//$pgs=get_all_cars();
$pCnt=count($typ);
$pgs=$typ;
?>
<!--<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Slno</th>
        <th>Model</th>
        <th>Company Name</th>
        <th>Regno</th>
        <th>Car Image</th>
        <th>Action</th>
      </tr>
    </thead>   
    <tbody>
   <?php  /*for($a=0;$a<$pCnt;$a++){?>
      <tr>
      	<td class="center"><?php echo $a+1; ?></td>
        <td><?php echo $pgs[$a]['car_model']; ?></td>
        <td><?php echo $pgs[$a]['car_company_name']; ?></td>
         <td><?php echo $pgs[$a]['car_regno']; ?></td>
        <td class="center"> <img src="../<?php echo $pgs[$a]['car_image']; ?>" width="100" height="100" alt="Loading...."></td>
        <td class="center" style="width:80px;">
        <a class="btn btn-danger btn-xs" href="c.index.php?d=4&cid=<?php echo $pgs[$a]['id']; ?>&pid=<?php echo "123";?>">Book Now</i></a>			
		</td>
      </tr>
      <?php }*/
	  
	  
	  
	  ?>
      
	</tbody>
</table>-->
<?php if($pCnt==0){?>
	<h2> No Cars Availiable Now ..All Are Booked</h2>
	<?php }?>
 <?php  for($a=0;$a<$pCnt;$a++){?>
<div class="col-lg-4" align="center">
          <img class="img-circle" src="<?php echo $pgs[$a]['car_image']; ?>" alt="Generic placeholder image" width="180" height="180">
          <h2 align="center"><?php echo $pgs[$a]['car_company_name']; ?></h2>
          <p align="center"><?php echo $pgs[$a]['car_model']; ?></p>
          <p align="center"><a class="btn btn-default" href="customer/c.index.php?d=4&cid=<?php echo $pgs[$a]['id']; ?>" role="button">Book Now &raquo;</a></p>
        </div>
   <?php }