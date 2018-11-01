<?php
include 'header.php';
?>

 
 

  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">
      <a href="#top" class="scrolltop">Top</a>
      <div class="row" id="contact">

		<div class="col-md-6"> 
			
					<h4 class="text-uppercase">
							Information
					</h4>
			
			<div class="form">
            <div id="sendmessage"> Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="User id:" data-rule="minlen:4" data-msg="Please enter at least 4 chars or digit " />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="name" class="form-control" name="name" id="name" placeholder="couple name:" data-rule="name" data-msg="Please enter a valid name" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="regID" id="regID" placeholder="Registrar's Id:" data-rule="minlen:4" data-msg="Please enter at least 8 digit of subject" />
                <div class="validation"></div>
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="status" id="status" placeholder="Status:" data-rule="name" data-msg="Married or Unmarried" />
                <div class="validation"></div>
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address:" data-rule="name" data-msg="Please enter your full address" />
                <div class="validation"></div>
              </div>
              
			  
              <div class="text-center"><button type="submit">Save</button></div>
            </form>
          </div>
		</div>
        
      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © BD govt</p>
          <div class="credits">
            
            Designed by <a href="#">BootstrapMade</a>
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>

</body>

</html>
