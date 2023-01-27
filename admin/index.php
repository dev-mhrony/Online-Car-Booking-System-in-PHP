<!--Server Side Scripting Language to inject login code-->
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php
    session_start();
    include('vendor/inc/config.php');//get configuration file
    if(isset($_POST['admin_login']))
    {
      $a_email=$_POST['a_email'];
      $a_pwd=($_POST['a_pwd']);//
      $a_pwd= md5($a_pwd);//
      $stmt=$mysqli->prepare("SELECT a_email, a_pwd, a_id FROM tms_admin WHERE a_email=? and a_pwd=? ");//sql to log in user
      $stmt->bind_param('ss',$a_email,$a_pwd);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($a_email,$a_pwd,$a_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['a_id']=$a_id;//assaign session to admin id
      //$uip=$_SERVER['REMOTE_ADDR'];
      //$ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//if its sucessfull
        header("location:admin-dashboard.php");
      }

      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "Admin User Name & Password Not Match";
      }
  }
?>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
<!--End Server side-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
    <meta name="author" content="MartDevelopers">

    <title>Online Car Booking System - Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin.css" rel="stylesheet">
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
</head>

<body class="bg-dark">
    <!--Trigger Sweet Alert-->
    <?php if(isset($error)) {?>
    <!--This code for injecting an alert-->
    <script>
    setTimeout(function() {
            swal("Failed!", "<?php echo $error;?>!", "error");
        },
        100);
    </script>

    <?php } ?>
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">

                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="a_email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="a_pwd" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="admin_login" value="Login">
                </form>

                <div class="text-center">
                    <a class="d-block small mt-3" href="../index.php">Home</a>
                    <a class="d-block small" href="admin-reset-pwd.php">Forgot Password?</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!--Sweet alerts js-->
    <script src="vendor/js/swal.js"></script>


</body>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

</html>