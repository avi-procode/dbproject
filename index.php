<?php require("db.php"); ?>
<?php
$base_url='http://demo.avinashjain.net/exceldatawork';
if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql = "select * FROM `login_details` WHERE `username` = '".$username."'  AND `password` = '".$password."'";
    $rs = mysql_query($sql);
    @$row = mysql_fetch_array($rs);
    $user_id=$row['id'];
    @$num = mysql_num_rows($rs);
    if($num==0){
        echo $msg="Invalid Details.";
        
    }
    else
    {
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['userid']=$user_id;
        $_SESSION['type']=$row['login_type'];
        $_SESSION['baseurl']= 'http://demo.avinashjain.net/exceldatawork';
        if($row['login_type']=='admin')
        {
            header("Location: $base_url/user.php");    

        }
        if($row['login_type']=='user')
        {
            //header("Location: $base_url/user_home.php");  
            header("Location: $base_url/home.php");   
        }

        
    }
}
?>

<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>Login page | Bootstrap 3.x Admin Theme</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="css/bootstrap-admin-theme.css">

        <!-- Custom styles -->
        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-without-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                        Press enter key or click the Submit button
                    </div>
                    <form method="post" action="" class="bootstrap-admin-login-form">
                        <h1>Login</h1>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember_me">
                                Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary" name="submit" type="submit" style="background: #800080;">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // Setting focus
                $('input[name="username"]').focus();

                // Setting width of the alert box
                var alert = $('.alert');
                var formWidth = $('.bootstrap-admin-login-form').innerWidth();
                var alertPadding = parseInt($('.alert').css('padding'));

                if (isNaN(alertPadding)) {
                    alertPadding = parseInt($(alert).css('padding-left'));
                }

                $('.alert').width(formWidth - 2 * alertPadding);
            });
        </script>
    </body>
</html>
