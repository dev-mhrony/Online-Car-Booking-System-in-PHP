 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['u_id'];
?>
 <!DOCTYPE html>
 <html lang="en">
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
 <!--Head-->
 <?php include ('vendor/inc/head.php');?>
 <!--End Head-->

 <body id="page-top">
     <!--Navbar-->
     <?php include ('vendor/inc/nav.php');?>
     <!--End Navbar-->

     <div id="wrapper">

         <!-- Sidebar -->
         <?php include('vendor/inc/sidebar.php');?>
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
                         <a href="user-dashboard.php">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">Vehicle</li>
                     <li class="breadcrumb-item active">Book Vehicle</li>

                 </ol>


                 <!--Bookings-->
                 <div class="card mb-3">
                     <div class="card-header">
                         <i class="fas fa-bus"></i>
                         Available Vehicles
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Vehicle Name</th>
                                         <th>Reg No.</th>
                                         <th>Seats</th>
                                         <th>Driver</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <?php

                  $ret="SELECT * FROM tms_vehicle  where   v_status ='Available' "; //get all bookings
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
                                         <td><?php echo $row->v_name;?></td>
                                         <td><?php echo $row->v_reg_no;?></td>
                                         <td><?php echo $row->v_pass_no;?> Passengers</td>
                                         <td><?php echo $row->v_driver;?></td>
                                         <td>
                                             <a href="user-confirm-booking.php?v_id=<?php echo $row->v_id;?>" class="btn btn-outline-success"><i class="fa fa-clipboard"></i> Book Vehicle</a>
                                         </td>
                                     </tr>
                                     <?php  $cnt = $cnt +1; }?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class="card-footer small text-muted">
                         <?php
              date_default_timezone_set("Africa/Nairobi");
              echo "Generated At : " . date("h:i:sa");
            ?>
                     </div>
                 </div>

             </div>
             <!-- /.container-fluid -->

             <!-- Sticky Footer -->
             <?php include("vendor/inc/footer.php");?>
             <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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
                     <a class="btn btn-danger" href="user-logout.php">Logout</a>
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

     <!-- Custom scripts for all pages-->
     <script src="vendor/js/sb-admin.min.js"></script>

     <!-- Demo scripts for this page-->
     <script src="vendor/js/demo/datatables-demo.js"></script>
     <script src="vendor/js/demo/chart-area-demo.js"></script>

 </body>

 </html>