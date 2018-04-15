<?php 
include('data/data_functions.php');
$pgs=get_all_bookedcars();
$counts=count($pgs);

?>


<div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Booking Date</th>
                                        <th>Customer Name</th>
                                    	<th>Car Name</th>
                                    	<th>Mob:</th>
                                    </thead>
                                    <tbody>
									<?php for($i=0;$i<$counts;$i++){?>
                                        <tr>
                                        	<td><?php echo $i+1 ?></td>
                                        	<td><?php echo $pgs[$i]['book_date']; echo "  ";?></td>
                                        	<td><?php $user=get_single_user_by_lic($pgs[$i]['cust_id']); echo $user['firstname']; echo " "; echo $user['lastname']; echo "<br>"; echo $user['address']; ?></td>
                                        	<td><?php  $cars=get_single_cars($pgs[$i]['cars_id']); echo $cars['car_model'];?></td>
                                        	<td><?php echo $user['mobno'];?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
 </div>