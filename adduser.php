<?php include_once "header.php"; ?>
<?php include_once "leftmenu.php"; ?>
<?php require("db.php"); ?>

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

<?php
@$admin_id= $_GET['id'];
if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $phone_no= $_POST['phone_no'];
    $email= $_POST['email'];
    $sql2 = "INSERT INTO `login_details` (`username`,`email`,`phone_no`,`password`,`firstname`,`lastname`,`login_type`) values ('".$username."','".$email."','".$phone_no."','".$password."','".$firstname."','".$lastname."','user')";
    mysql_query($sql2);
    $user_id=mysql_insert_id();
     "Registered Successfully";
}
?>
<?php
if(isset($_POST['update']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $phone_no= $_POST['phone_no'];
    $email= $_POST['email'];
   $sql21 = "update `login_details` set `email`='".$email."',`phone_no`='".$phone_no."',`password`='".$password."',`firstname`='".$firstname."',`lastname`='".$lastname."' where id='".$admin_id."'";
    mysql_query($sql21);
    $user_id=mysql_insert_id();
     "update Successfully";
}
?>
<script src="js/ckeck_validation.js"></script>
<style>
.error{
    color:red;
}
</style>
 
<?php
    
    
    
    if(!empty($admin_id))
    {
        $app="Select * from `login_details` where id=$admin_id";
        $app_rs = mysql_query($app);
        $row = mysql_fetch_array($app_rs);
       

        // $app_num = mysql_num_rows($app_rs);
        // if($app_num == 0){
        //                   echo 'No result found.';
        //                 }
    }

                    
                       
                                        ?>
                                        
                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>User Forms</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Form</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" action="" method="post" id="member_form">
                                        <fieldset>
                                            <legend>Add User</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput">First name</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control req" name="firstname" id="Firstname" type="text" value="<?php if(!empty($row['firstname'])) echo $row['firstname']; ?>" onclick="remove_validation_error(this.id);">
                                                    <div id="error_Firstname" class="error"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Last name</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control req" name="lastname" id="Lastname" type="text" value="<?php if(!empty($row['lastname'])) echo $row['lastname']; ?>"  onclick="remove_validation_error(this.id);">
                                                    <div id="error_Lastname" class="error"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="disabledInput">Username</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control req" id="Username" value="<?php if(!empty($row['username'])) echo $row['username']; ?>"  name="username" type="text"  onclick="remove_validation_error(this.id);">
                                                     <div id="error_Username" class="error"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="optionsCheckbox2">Password</label>
                                                <div class="col-lg-10">
                                                    <label>
                                                        <input type="password" class="form-control req" id="Password" value="<?php if(!empty($row['password'])) echo $row['password']; ?>"  name="password" onclick="remove_validation_error(this.id);">
                                                    <div id="error_Password" class="error"></div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group has-warning">
                                                <label class="col-lg-2 control-label" for="inputError">E-mail</label>
                                                <div class="col-lg-10">
                                                    <input type="text" value="<?php if(!empty($row['email'])) echo $row['email']; ?>"  id="Email" name="email" class="form-control req" onclick="remove_validation_error(this.id);">
                                                     <div id="error_Email" class="error"></div>
                                                </div>
                                            </div>
                                            <div class="form-group has-error">
                                                <label class="col-lg-2 control-label" for="inputError">Phone No</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="Phoneno" value="<?php if(!empty($row['phone_no'])) echo $row['phone_no']; ?>"  name="phone_no" class="form-control req" onclick="remove_validation_error(this.id);">
                                                    <div id="error_Phoneno" class="error"></div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group has-error">
                                                <label class="col-lg-2 control-label" for="inputError">Input group with error</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="text" id="inputError" class="form-control">
                                                        <span class="input-group-addon">%</span>
                                                    </div>
                                                    <span class="help-block">Please correct the error</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="col-lg-2 control-label" for="inputError">Input with success</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="inputSuccess" class="form-control">
                                                    <span class="help-block">Woohoo!</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="col-lg-2 control-label" for="selectError">Select with success</label>
                                                <div class="col-lg-10">
                                                    <select id="selectError" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <span class="help-block">Woohoo!</span>
                                                </div>
                                            </div> -->
                                            <?php
                                             if(!empty($admin_id))
                                            {
                                            ?>
                                            <button type="submit" name="update" onclick="return check_validation('member_form');" class="btn btn-primary">Edit</button>
                                            <?php }else{ ?>
                                            <button type="submit" name="submit" onclick="return check_validation('member_form');" class="btn btn-primary">Save changes</button>
                                            <?php } ?>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

        
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
    <?php include_once "footer.php"; ?>