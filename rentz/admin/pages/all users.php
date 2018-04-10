<?php 
include('data/data_functions.php');
$pgs=get_all_users();
$counts=count($pgs);

?>


<div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                        <th>Address</th>
                                    	<th>Licence number</th>
                                    	<th>Mob:</th>
                                    </thead>
                                    <tbody>
									<?php for($i=0;$i<$counts;$i++){?>
                                        <tr>
                                        	<td><?php echo $i+1 ?></td>
                                        	<td><?php echo $pgs[$i]['firstname']; echo "  "; echo $pgs[$i]['firstname'];?></td>
                                        	<td><?php echo $pgs[$i]['address'];?></td>
                                        	<td><?php echo $pgs[$i]['licenceno'];?></td>
                                        	<td><?php echo $pgs[$i]['mobno'];?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
 </div>