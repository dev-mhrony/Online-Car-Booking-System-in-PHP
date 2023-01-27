<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vehicle Booking System Transport Saccos, Matatu Industry">
    <meta name="author" content="MartDevelopers">

    <title>Vehicle Booking System - Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>

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
                <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                <p>
                    <marquee onMouseOver="this.stop()" onMouseOut="this.start()">This code is not for sale. Its sole owner is Code Camp BD For any need you can message me <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> and don't forget to <a href="https://www.youtube.com/@codecampbdofficial">subscribe</a> the youtube channel.</marquee>
                </p>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="admin-dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
                <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-users"></i>
                                </div>
                                <?php
                  //code for summing up number of users 
                  $result ="SELECT count(*) FROM tms_user where u_category = 'User'";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($user);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                                <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                <div class="mr-5"><span class="badge badge-danger"><?php echo $user;?></span> Users</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="admin-view-user.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa fa-id-card"></i>
                                </div>
                                <?php
                  //code for summing up number of drivers
                  $result ="SELECT count(*) FROM tms_user where u_category = 'Driver'";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($driver);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                                <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                <div class="mr-5"><span class="badge badge-danger"><?php echo $driver;?></span> Drivers</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="admin-view-driver.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa fa-bus"></i>
                                </div>
                                <?php
                  //code for summing up number of vehicles
                  $result ="SELECT count(*) FROM tms_vehicle";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($vehicle);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                                <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                <div class="mr-5"><span class="badge badge-danger"><?php echo $vehicle;?></span> Vehicles</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="admin-view-vehicle.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa fa-address-book"></i>
                                </div>
                                <?php
                  //code for summing up number of booking 
                  $result ="SELECT count(*) FROM tms_user where u_car_book_status = 'Approved' || u_car_book_status = 'Pending' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($book);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                                <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                <div class="mr-5"><span class="badge badge-danger"><?php echo $book;?></span> Bookings</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="admin-view-booking.php">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                <!--Bookings-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Bookings
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Vehicle Type</th>
                                        <th>Reg No</th>
                                        <th>Booking date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                  $ret="SELECT * FROM tms_user where u_car_book_status = 'Approved' || u_car_book_status = 'Pending' "; //get all bookings
                  $stmt= $mysqli->prepare($ret) ;
                  $stmt->execute() ;//ok
                  $res=$stmt->get_result();
                  $cnt=1;
                  while($row=$res->fetch_object())
                {
                ?>
                                    <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></td>
                                        <td><?php echo $row->u_phone;?></td>
                                        <td><?php echo $row->u_car_type;?></td>
                                        <td><?php echo $row->u_car_regno;?></td>
                                        <td><?php echo $row->u_car_bookdate;?></td>
                                        <td><?php if($row->u_car_book_status == "Pending"){ echo '<span class = "badge badge-warning">'.$row->u_car_book_status.'</span>'; } else { echo '<span class = "badge badge-success">'.$row->u_car_book_status.'</span>';}?></td>

                                    </tr>
                                    <?php  $cnt = $cnt +1; }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">
                        <?php
              date_default_timezone_set("Africa/Nairobi");
              echo "Generated : " . date("h:i:sa");
            ?>
                        <!-- Author By: MH RONY
            Author Website: https://developerrony.com
            Github Link: https://github.com/dev-mhrony
            Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
            -->
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php include("vendor/inc/footer.php");?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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

</body>
<!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

</html>