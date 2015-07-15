<?php 

?>
<?php require("db.php"); ?>
<?php include_once "header.php"; ?>
<?php include_once "leftmenu.php"; ?>
<?php  $view_id= $_GET['id'];?>



                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>View</h1>
                            </div>
                        </div>
                    </div>
                    <?php
                        $app="Select * from delivery where customer_id=$view_id";
                        $app_rs = mysql_query($app);
                        $app_num = mysql_num_rows($app_rs);
                        
                    ?>
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                  <!--   <div class="text-muted bootstrap-admin-box-title">Form</div> -->
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                <table>
                                    <thead>
                                        
                                        <th>Item Name</th>
                                        <th>Delivered</th>
                                    </thead>
                                    <?php 
                                    while($row = mysql_fetch_array($app_rs)){
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $row['name']?></td>
                                        <td style="margin-left:50%;"><?php echo $row['delivered']?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>


<?php include_once "footer.php"; ?>
       
        