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
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
 <!DOCTYPE html>
 <html lang="en">
 <?php include("vendor/inc/head.php");?>
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
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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
                         <a href="user-dashboard.php">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">Booking</li>
                     <li class="breadcrumb-item ">View My Booking</li>
                 </ol>
                 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                 <!-- My Bookings-->
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
                                         <th>Name</th>
                                         <th>Phone</th>
                                         <th>Vehicle Type</th>
                                         <th>Vehicle Reg No</th>
                                         <th>Booking date</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <?php
                    $aid=$_SESSION['u_id'];
                    $ret="SELECT * from tms_user where u_id=? ";
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
                                     <tr>
                                         <td><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></td>
                                         <td><?php echo $row->u_phone;?></td>
                                         <td><?php echo $row->u_car_type;?></td>
                                         <td><?php echo $row->u_car_regno;?></td>
                                         <td><?php echo $row->u_car_bookdate;?></td>
                                         <td><span class="badge badge-success"><?php echo $row->u_car_book_status;?></span></td>
                                         <td>
                                             <a href="user-delete-booking.php?u_id=<?php echo $row->u_id;?>" class="badge badge-danger"><i class="fa fa-trash"></i> Cancel</a>
                                             </i>
                                         </td>
                                     </tr>

                                     <?php  }?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class="card-footer small text-muted">
                         <?php
              date_default_timezone_set("Africa/Nairobi");
              echo "Generated:" . date("h:i:sa");
            ?>
                     </div>
                 </div>
                 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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
     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
 </body>
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

 </html>