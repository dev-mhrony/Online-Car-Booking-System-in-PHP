 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
?>
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
 <!DOCTYPE html>
 <html lang="en">

 <!--Head-->
 <?php include("vendor/inc/head.php");?>
 <!--End Head-->

 <body>
     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
     <!-- Navigation -->
     <?php include("vendor/inc/nav.php");?>

     <!-- Page Content -->
     <div class="container">

         <!-- Page Heading/Breadcrumbs -->
         <h1 class="mt-4 mb-3">Our Gallery
         </h1>
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="index.php">Home</a>
             </li>
             <li class="breadcrumb-item active">Gallery</li>
         </ol>
         <?php

      $ret="SELECT * FROM tms_vehicle  ORDER BY RAND() LIMIT 10 "; //get all feedbacks
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
         <!-- Project One -->
         <div class="row">
             <div class="col-md-7">
                 <a href="#">
                     <img class="img-fluid rounded mb-3 mb-md-0" src="vendor/img/<?php echo $row->v_dpic;?>" alt="">
                 </a>
             </div>
             <div class="col-md-5">
                 <h3><?php echo $row->v_category;?></h3>
                 <ul class="list-group list-group-horizontal">
                     <li class="list-group-item"><?php echo $row->v_name;?></li>
                     <li class="list-group-item"><?php echo $row->v_pass_no ;?></li>
                     <li class="list-group-item"><span class="badge badge-success">Available</span></li>
                     <li class="list-group-item"><?php echo $row->v_reg_no;?></li>
                 </ul><br>
                 <a class="btn btn-success" href="usr/">Hire Vehicle
                     <span class="glyphicon glyphicon-chevron-right"></span>
                 </a>
             </div>
         </div>
         <!-- /.row -->

         <hr>
         <?php }?>

         <hr>
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

     </div>

     <?php include("vendor/inc/footer.php");?>

     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->