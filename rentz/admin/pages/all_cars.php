<?php 
include('data/data_functions.php');
$pgs=get_all_cars();
$counts=count($pgs);

?>


<div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Car Name</th>
                                        <th>Colour</th>
                                    	<th>Regno</th>
                                    	<th>Provider details</th>
                                        <th> Image</th>
                                    </thead>
                                    <tbody>
									<?php for($i=0;$i<$counts;$i++){?>
                                        <tr>
                                        	<td><?php echo $i+1 ?></td>
                                        	<td><?php echo $pgs[$i]['car_model']; echo "  ";?></td>
                                        	<td><?php echo $pgs[$i]['car_colour'];?></td>
                                        	<td><?php echo $pgs[$i]['car_regno'];?></td>
                                        	<td><?php echo $pgs[$i]['car_pro_id'];?></td>
                                            <td> <img src="../<?php echo $pgs[$i]['car_image'];?>" alt="car image" height="50px" width="100px"/> </td>
                                        	
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
 </div>