<?php require("db.php"); ?>
<?php include_once "header.php"; ?>
<?php include_once "leftmenu.php"; ?>

<?php 
 $type=$_SESSION['type'];
            if($type=='user')
            { ?>
                <script type="text/javascript">
                window.location.href="logout.php";
                </script>
                <?php
            }
?>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>Tables</h1>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Table with actions</div>
<a href="adduser.php" class="actions">
<button class="btn btn-sm btn-primary">Add</button>
</a>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <table class="table bootstrap-admin-table-with-actions">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Email ID</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $app="Select * from login_details";
                                            $app_rs = mysql_query($app);
                                            $app_num = mysql_num_rows($app_rs);
                                            if($app_num == 0){
                                            echo 'No result found.';
                                                    }
                                                    else{
                                                        while($row = mysql_fetch_assoc($app_rs)){
                                        ?>
                                        
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['firstname'];?></td>
                                                <td><?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['username'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td class="actions">
    <a href="adduser.php?id=<?php echo $row['id'];?>">
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            Edit
                                                        </button>
                                                    </a>

                                                    <!--
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-success">
                                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                                            Confirm
                                                        </button>
                                                    </a>


<a href="#">
<button class="btn btn-sm btn-warning">
<i class="glyphicon glyphicon-bell"></i>
Notify
</button>
</a> -->
<a href="deleteuser.php?id=<?php echo $row['id'];?>" class="actions">
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            Delete
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php                    
                                                            
                                                    }
                                                       
                                                }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

      
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/DT_bootstrap.js"></script>
    
