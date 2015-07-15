<?php require("db.php"); ?>
<?php
$base_url= 'http://demo.avinashjain.net/exceldatawork';

     $admin_id= $_GET['id'];
     $sql2 = "Delete from `login_details` where id=$admin_id";
    mysql_query($sql2);

    //echo "delete Successfully";
     header("Location: $base_url/user.php");    

?>
