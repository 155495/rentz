<?php 

$UNM= $_SESSION['username'];

include('../data/data_functions.php');
$pgs=get_all_booked_cars_current($UNM);
//$cars=get_single_cars($pgs['cars_id']);
$pCnt=count($pgs);
?>
<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Slno</th>
        <th>Date</th>
        <th>Car Owner Deatils</th>
        <th>Car Deatils</th>
        <th>Car Image</th>
        <th>Action</th>
      </tr>
    </thead>   
    <tbody>
   <?php  for($a=0;$a<$pCnt;$a++){?>
      <tr>
      	<td class="center"><?php echo $a+1; ?></td>
        <td><?php echo $pgs[$a]['book_date']; ?></td>
        <td><?php $cars=get_single_cars($pgs[$a]['cars_id']); $prov=get_single_user_by_lic($cars['car_pro_id']);echo $prov['firstname']; echo "   ";echo $prov['lastname']; echo "<br>"; echo $prov['address'];echo "<br>";echo "<b>MOB:</b> " .$prov['mobno'];  ?></td>
         <td><?php echo $cars['car_company_name']; echo "<br>".$cars['car_model']; ?></td>
        <td class="center"> <img src="../<?php echo $cars['car_image']; ?>" width="100" height="100" alt="Loading...."></td>
        <td class="center" style="width:80px;">
        <a class="btn btn-danger btn-xs" href="delete_car.php?id=<?php echo $pgs[$a]['book_date']; ?>"><i class="glyphicon glyphicon-trash"></i></a>			
		</td>
      </tr>
      <?php }?>
	</tbody>
</table>
