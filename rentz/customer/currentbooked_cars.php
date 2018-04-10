<?php 
include('../data/data_functions.php');
/*$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'rentz');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}*/
$UNM= $_SESSION['username'];
$carid=get_all_booked_carsid_by_provider($UNM);
$pCnt=count($carid);
?>
<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Slno</th>
        <th>Model</th>
        <th>Company Name</th>
        <th>Regno</th>
        <th>Car Image</th>
      </tr>
    </thead>   
    <tbody>
   <?php  for($a=0;$a<$pCnt;$a++){?>
      <tr>
      	<td class="center"><?php echo $a+1; ?></td>
        <td><?php echo $carid[$a]['car_model']; ?></td>
        <td><?php echo $carid[$a]['car_company_name']; ?></td>
         <td><?php echo $carid[$a]['car_regno']; ?></td>
        <td class="center"> <img src="../<?php echo $carid[$a]['car_image']; ?>" width="100" height="100" alt="Loading...."></td>
      </tr>
      <?php }?>
	</tbody>
</table>
