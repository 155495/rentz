
<?php 
include('data/data_functions.php');
$pgs=get_all_providers();
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
                                        <th>Status</th>
                                        <th>Block a user</th>
                                    </thead>
                                    <tbody>
									<?php for($i=0;$i<$counts;$i++){?>
                                        <tr>
                                        	<td><?php echo $i+1 ?></td>
                                        	<td><?php echo $pgs[$i]['firstname']; echo "  "; echo $pgs[$i]['lastname'];?></td>
                                        	<td><?php echo $pgs[$i]['address'];?></td>
                                        	<td><?php echo $pgs[$i]['licenceno'];?></td>
                                        	<td><?php echo $pgs[$i]['mobno'];?></td>
                                             <td><?php if($pgs[$i]['status']==0){?> <Label class="btn btn-round btn-fill btn-success"> Active</label> <?php } else { ?> <Label class="btn btn-round btn-fill btn-danger"> Blocked</label> <?php }?></td>
                                            <td><a href="pages/db_blockuser.php?id=<?php echo $pgs[$i]['id']; ?>"><Label class="btn btn-round btn-fill btn-warning"><i class="pe-7s-unlock"></i></label></a></td>
                                           
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
 </div>