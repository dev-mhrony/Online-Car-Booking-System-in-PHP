 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  //Add USer
  if(isset($_POST['add_veh']))
    {

            $v_name=$_POST['v_name'];
            $v_reg_no = $_POST['v_reg_no'];
            $v_category=$_POST['v_category'];
            $v_pass_no=$_POST['v_pass_no'];
            $v_status=$_POST['v_status'];
            $v_driver=$_POST['v_driver'];
            $v_dpic=$_FILES["v_dpic"]["name"];
		        move_uploaded_file($_FILES["v_dpic"]["tmp_name"],"../vendor/img/".$_FILES["v_dpic"]["name"]);
            $query="insert into tms_vehicle (v_name, v_pass_no, v_reg_no, v_driver, v_category, v_dpic, v_status ) values(?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('sssssss', $v_name, $v_pass_no, $v_reg_no, $v_driver, $v_category, $v_dpic, $v_status);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Vehicle Added";
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
             <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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
                 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                 <?php } ?>
                 <p>
                     <marquee onMouseOver="this.stop()" onMouseOut="this.start()">This code is not for sale. Its sole owner is Code Camp BD For any need you can message me <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> and don't forget to <a href="https://www.youtube.com/@codecampbdofficial">subscribe</a> the youtube channel.</marquee>
                 </p>
                 <!-- Breadcrumbs-->
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="#">Vehicles</a>
                     </li>
                     <li class="breadcrumb-item active">Add Vehicle</li>
                 </ol>
                 <hr>
                 <div class="card">
                     <div class="card-header">
                         Add Vehicle
                     </div>
                     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                     <div class="card-body">
                         <!--Add User Form-->
                         <form method="POST" enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Vehicle Name</label>
                                 <input type="text" required class="form-control" id="exampleInputEmail1" name="v_name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Vehicle Registration Number</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" name="v_reg_no">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Vehicle Number Of Seats</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" name="v_pass_no">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Driver</label>
                                 <select class="form-control" name="v_driver" id="exampleFormControlSelect1">
                                     <?php

                $ret="SELECT * FROM tms_user where u_category = 'Driver' "; //sql code to get to ten trains randomly
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
                                     <option><?php echo $row->u_fname;?> <?php echo $row->u_lname;?></option>
                                     <?php }?>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Vehicle Category</label>
                                 <select class="form-control" name="v_category" id="exampleFormControlSelect1">
                                     <option>Bus</option>
                                     <option>Sedan</option>
                                     <option>SUV</option>
                                     <option>Van</option>

                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Vehicle Status</label>
                                 <select class="form-control" name="v_status" id="exampleFormControlSelect1">
                                     <option>Booked</option>
                                     <option>Available</option>

                                 </select>
                             </div>
                             <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                             <div class="form-group col-md-12">
                                 <label for="exampleInputEmail1">Vehicle Picture</label>
                                 <input type="file" class="btn btn-success" id="exampleInputEmail1" name="v_dpic">
                             </div>

                             <button type="submit" name="add_veh" class="btn btn-success">Add Vehicle</button>
                         </form>
                         <!-- End Form-->
                     </div>
                 </div>

                 <hr>

                 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
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

         <!-- Custom scripts for all pages-->
         <script src="vendor/js/sb-admin.min.js"></script>
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
         <!-- Demo scripts for this page-->
         <script src="vendor/js/demo/datatables-demo.js"></script>
         <script src="vendor/js/demo/chart-area-demo.js"></script>
         <!--INject Sweet alert js-->
         <script src="vendor/js/swal.js"></script>

 </body>
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

 </html>