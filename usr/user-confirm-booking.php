<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['u_id'];
  //Add Booking
  if(isset($_POST['book_vehicle']))
    {
            $u_id = $_SESSION['u_id'];
            //$u_fname=$_POST['u_fname'];
            //$u_lname = $_POST['u_lname'];
            //$u_phone=$_POST['u_phone'];
            //$u_addr=$_POST['u_addr'];
            $u_car_type = $_POST['u_car_type'];
            $u_car_regno  = $_POST['u_car_regno'];
            $u_car_bookdate = $_POST['u_car_bookdate'];
            $u_car_book_status  = $_POST['u_car_book_status'];
            $query="update tms_user set u_car_type=?, u_car_bookdate=?, u_car_regno=?, u_car_book_status=? where u_id=?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssi', $u_car_type, $u_car_bookdate, $u_car_regno, $u_car_book_status, $u_id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Booking Subitted";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

<body id="page-top">
    <!--Start Navigation Bar-->
    <?php include("vendor/inc/nav.php");?>
    <!--Navigation Bar-->

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("vendor/inc/sidebar.php");?>
        <!--End Sidebar-->
        <div id="content-wrapper">

            <div class="container-fluid">
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

                <?php } ?>
                <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--> <p>
<marquee onMouseOver="this.stop()" onMouseOut="this.start()">This code is not for sale. Its sole owner is Code Camp BD For any need you can message me <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> and don't forget to <a href="https://www.youtube.com/@codecampbdofficial">subscribe</a> the youtube channel.</marquee>
                 </p>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="user-dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Online Car</li>
                    <li class="breadcrumb-item ">Book Online Car</li>
                    <li class="breadcrumb-item active">Confirm Booking</li>
                </ol>
                <hr>
                <div class="card">
                    <div class="card-header">
                        Confirm Booking
                    </div>
                    <div class="card-body">
                        <!--Add User Form-->
                        <?php
            $aid=$_GET['v_id'];
            $ret="select * from tms_vehicle where v_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
                        <!-- Author By: MH RONY
        Author Website: https://developerrony.com
        Github Link: https://github.com/dev-mhrony
        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
        -->
                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Online Car Category</label>
                                <input type="text" value="<?php echo $row->v_category;?>" readonly class="form-control" name="u_car_type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Online Car Registration Number</label>
                                <input type="email" value="<?php echo $row->v_reg_no;?>" readonly class="form-control" name="u_car_regno">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Booking Date</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="u_car_bookdate">
                            </div>
                            <div class="form-group" style="display:none">
                                <label for="exampleInputEmail1">Book Status</label>
                                <input type="text" value="Pending" class="form-control" id="exampleInputEmail1" name="u_car_book_status">
                            </div>

                            <button type="submit" name="book_vehicle" class="btn btn-success">Confirm Booking</button>
                        </form>
                        <!-- End Form-->
                        <?php }?>
                    </div>
                </div>

                <hr>


                <!-- Sticky Footer -->
                <?php include("vendor/inc/footer.php");?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="admin-logout.php">Logout</a>
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

        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
        <!-- Custom scripts for all pages-->
        <script src="vendor/js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="vendor/js/demo/datatables-demo.js"></script>
        <script src="vendor/js/demo/chart-area-demo.js"></script>
        <!--INject Sweet alert js-->
        <script src="vendor/js/swal.js"></script>

</body>

</html>