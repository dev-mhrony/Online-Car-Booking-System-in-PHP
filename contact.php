 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
 <!DOCTYPE html>
 <html lang="en">

 <?php include("vendor/inc/head.php");?>

 <body>
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
         <h1 class="mt-4 mb-3">Contact Us
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
             <li class="breadcrumb-item active">Contact</li>
         </ol>
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
         <!-- Content Row -->
         <div class="row">
             <!-- Map Column -->
             <div class="col-lg-8 mb-4">
                 <h3>Send us a Message</h3>
                 <form name="sentMessage" id="contactForm" novalidate>
                     <div class="control-group form-group">
                         <div class="controls">
                             <label>Full Name:</label>
                             <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                             <p class="help-block"></p>
                         </div>
                     </div>
                     <div class="control-group form-group">
                         <div class="controls">
                             <label>Phone Number:</label>
                             <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                         </div>
                     </div>
                     <div class="control-group form-group">
                         <div class="controls">
                             <label>Email Address:</label>
                             <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                         </div>
                     </div>
                     <div class="control-group form-group">
                         <div class="controls">
                             <label>Message:</label>
                             <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                         </div>
                     </div>
                     <div id="success"></div>
                     <!-- For success/fail messages -->
                     <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
                 </form>
             </div>
             <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
             <!-- Contact Details Column -->
             <div class="col-lg-4 mb-4">
                 <h3>Contact Details</h3>
                 <p>
                     Bogura,
                     <br>Bogura,Bangladesh.
                     <br>
                 </p>
                 <p>
                     <abbr title="Phone">Phone</abbr>: +8801608445456
                 </p>
                 <p>
                     <abbr title="Email">E</abbr>:
                     <a href="mailto:support@developerrony.com">support@developerrony.com
                     </a>
                 </p>
                 <p>
                     <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                 </p>
             </div>
         </div>
         <!-- /.row -->
         <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
         <!-- Contact Form -->
         <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
         <div class="row">


         </div>
         <!-- /.row -->

     </div>
     <!-- /.container -->

     <!-- Footer -->
     <?php include("vendor/inc/footer.php");?>
     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Contact form JavaScript -->
     <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
     <script src="js/jqBootstrapValidation.js"></script>
     <script src="js/contact_me.js"></script>

 </body>
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

 </html>