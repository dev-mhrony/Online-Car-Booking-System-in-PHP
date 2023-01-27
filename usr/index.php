<!--Server Side Scripting Language to inject login code-->
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php
    session_start();
    include('vendor/inc/config.php');//get configuration file
    if(isset($_POST['user_login']))
    {
      $u_email=$_POST['u_email'];
      $u_pwd=($_POST['u_pwd']);//
     
      $stmt=$mysqli->prepare("SELECT u_email, u_pwd, u_id FROM tms_user WHERE u_email=? and u_pwd=? ");//sql to log in user
      $stmt->bind_param('ss',$u_email,$u_pwd);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($u_email,$u_pwd,$u_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['u_id']=$u_id;//assaign session to admin id
      //$uip=$_SERVER['REMOTE_ADDR'];
      //$ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//if its sucessfull
        header("location:user-dashboard.php");
      }

      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "User Name & Password Not Match";
      }
  }
?>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
<!--End Server Side Script Injection-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Car Booking System - Client Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Client Login Panel</div>
            <div class="card-body">
                <!--INJECT SWEET ALERT-->
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
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="u_email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="u_pwd" id="inputPassword" class="form-control" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <input type="submit" name="user_login" class="btn btn-success btn-block" value="Login">
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="usr-register.php">Register an Account</a>
                    <a class="d-block small" href="usr-forgot-password.php">Forgot Password?</a>
                    <a class="d-block small" href="../index.php">Home</a>
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
    <!--INject Sweet alert js-->
    <script src="vendor/js/swal.js"></script>

</body>

</html>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->