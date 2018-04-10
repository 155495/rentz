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
                                        	<td><?php echo $pgs[$i]['cust_id'];?></td>
                                        	<td><?php echo $pgs[$i]['cars_id'];?></td>
                                        	<td><?php echo $pgs[$i]['comments'];?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
 </div>