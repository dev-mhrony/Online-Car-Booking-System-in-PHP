<!--Server Side Scripting To inject Login-->
<?php
  //session_start();
  include('vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['add_user']))
    {

            $u_fname=$_POST['u_fname'];
            $u_lname = $_POST['u_lname'];
            $u_phone=$_POST['u_phone'];
            $u_addr=$_POST['u_addr'];
            $u_email=$_POST['u_email'];
            $u_pwd=$_POST['u_pwd'];
            $u_category=$_POST['u_category'];
            $query="INSERT into `tms_user` (u_fname, u_lname, u_phone, u_addr, u_category, u_email, u_pwd) values(?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('sssssss', $u_fname,  $u_lname, $u_phone, $u_addr, $u_category, $u_email, $u_pwd);
            
                if($stmt)
                {
                    $succ = "Account Created Proceed To Log In";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
<!--End Server Side Scriptiong-->
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
    <meta name="description" content="Tranport Management System, Saccos, Matwana Culture">
    <meta name="author" content="MartDevelopers ">

    <title>Transport Managemennt System Client- Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

<body class="bg-dark">
    <?php if(isset($succ)) {?>
    <!--This code for injecting an alert-->
    <script>
    setTimeout(function() {
            swal("Success!", "<?php echo $succ;?>!", "success");
        },
        100);
    </script>

    <?php } ?>
    <?php if(isset($err)) {?>
    <!--This code for injecting an alert-->
    <script>
    setTimeout(function() {
            swal("Failed!", "<?php echo $err;?>!", "Failed");
        },
        100);
    </script>
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
    <?php } ?>
    <div class="container">
        <p>
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()">This code is not for sale. Its sole owner is Code Camp BD For any need you can message me <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> and don't forget to <a href="https://www.youtube.com/@codecampbdofficial">subscribe</a> the youtube channel.</marquee>
        </p>
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Create An Account With Us</div>
            <div class="card-body">
                <!--Start Form-->
                <form method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <input type="text" required class="form-control" id="exampleInputEmail1" name="u_fname">
                                    <label for="firstName">First name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" id="u_lname" name="u_lname">
                                    <label for="u_lname">Last name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" id="u_phone" name="u_phone">
                                    <label for="u_phone">Contact</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="u_addr" name="u_addr">
                            <label for="u_addr">Address</label>
                        </div>
                    </div>
                    <div class="form-group" style="display:none">
                        <div class="form-label-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" value="User" name="u_category">
                            <label for="inputEmail">User Category</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" class="form-control" name="u_email"">
              <label for=" inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <input type="password" class="form-control" name="u_pwd" id="exampleInputPassword1">
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add_user" class="btn btn-success">Create Account</button>
                </form>
                <!--End FOrm-->
                <div class="text-center">
                    <a class="d-block small mt-3" href="index.php">Login Page</a>
                    <a class="d-block small" href="usr-forgot-pwd.php">Forgot Password?</a>
                </div>
                <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!--INject Sweet alert js-->
    <script src="vendor/js/swal.js"></script>

</body>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

</html>