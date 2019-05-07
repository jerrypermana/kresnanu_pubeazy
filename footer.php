 <!--==========================
    Footer
  ============================-->
 <footer id="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                         <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                         <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                         <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                         <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                         <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">

                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">

                 </div>

                 <div class="col-lg-3 col-md-6 footer-contact">
                     <?php
                        $contact_us      = mysqli_query($konek, "SELECT * FROM contact_us LIMIT 1");
                        $data_contact  = mysqli_fetch_array($contact_us);


                        $sosmed      = mysqli_query($konek, "SELECT * FROM social_media");
                        $data_socmed  = mysqli_fetch_array($sosmed);

                        ?>
                     <h4>Contact Us</h4>
                     <p>
                         <?php echo $data_contact['address_text']; ?><br>
                         <strong>Phone:</strong><?php echo $data_contact['phone_text']; ?><br>
                         <strong>Email:</strong> <?php echo $data_contact['phone_text']; ?><br>
                     </p>

                     <div class="social-links">
                         <a href="<?php echo $data_socmed['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                         <a href="<?php echo $data_socmed['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                         <a href="<?php echo $data_socmed['instagram']; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                       
                     </div>

                 </div>

             </div>
         </div>
     </div>

     <div class="container">
         <div class="copyright">
             &copy; Copyright <strong>PubEazy</strong>
         </div>
         <div class="credits">

         </div>
     </div>
 </footer><!-- #footer -->

 <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

 <!-- JavaScript Libraries -->
 <script src="assets-event/lib/jquery/jquery.min.js"></script>
 <script src="assets-event/lib/jquery/jquery-migrate.min.js"></script>
 <script src="assets-event/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets-event/lib/easing/easing.min.js"></script>
 <script src="assets-event/lib/superfish/hoverIntent.js"></script>
 <script src="assets-event/lib/superfish/superfish.min.js"></script>
 <script src="assets-event/lib/wow/wow.min.js"></script>
 <script src="assets-event/lib/venobox/venobox.min.js"></script>
 <script src="assets-event/lib/owlcarousel/owl.carousel.min.js"></script>

 <!-- Contact Form JavaScript File -->
 <script src="assets-event/contactform/contactform.js"></script>

 <!-- Template Main Javascript File -->
 <script src="assets-event/js/main.js"></script>
 </body>

 </html>