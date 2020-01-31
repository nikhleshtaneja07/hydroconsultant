<?php 
include_once "header.php";
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$emailfrom=$_POST['emailfrom'];
	$subject='HydroConsultant Query';
	$message=htmlspecialchars($_POST['message']);
	$emailto='rajkhanna1091@gmail.com';
	$headers='From: '.$emailfrom."\r\n".'('.$fullname.')';
	if(mail($emailto, $subject, $comments, $headers))
	{
		echo "<script>alert('Thanks for sending us Email. We will contact you shortly.');</script>";
	}
	else
	{
		echo "<script>alert('Email could not be sent. Please try again later.');</script>";
	}
}
?>

      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/</span>
               </li>
               <li>Contact</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
		 <!---728x90--->

            <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3>Contact Us</h3>
            </div>
			<!---728x90--->

            <div class="agile-info-para">
               <!--contact-map -->
               <form action="#" method="post">
                  <div class="row agile-wls-contact-mid">
                     <div class="col-md-6 form-group contact-forms">
                        <input type="text" name="fullname" class="form-control" placeholder="Name" required="">
                     </div>
                     <div class="col-md-6 form-group contact-forms">
                        <input type="email" name="emailfrom" class="form-control" placeholder="Email" required="">
                     </div>
                  </div>
                  <div class="form-group contact-forms">
                     <textarea class="form-control" name="message" rows="3" placeholder="Message.." required=""></textarea>
                  </div>
                  <div class="text-left click-subscribe">
                     <button type="submit" class="btn click-me" name="submit">Send</button>
                  </div>
               </form>
            </div>
            <!--//contact-map -->
            <!--contact-form-->
			<!-- <div class="title text-center"> -->
			   <h3 class="title-head3">Thapar Consultants India</h3>
			<!-- </div> -->
			
            <div class="row contact-right mt-lg-5 mt-md-4 mt-3">
               <div class="col-lg-4 col-md-5 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-map-marker-alt"></span>
                  </div>
                  <p>Community Centre, <br>BasantLok, VasantVihar, <br>New Delhi-110057</p>
               </div>
               <div class="col-lg-4 col-md-3 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-phone-volume"></span>
                  </div>
                  <p>Tel: 011-2608319 26<br>Fax: 011-2332 7729 / 26877902 </p>
               </div>
               <div class="col-lg-4 col-md-4 footer_grid_left text-center">
                  <div class="contact_footer_grid_left text-center mb-3">
                     <span class="fas fa-at"></span>
                  </div>
                  <p><a href="mailto:info@thaparconsultants.com">info@thaparconsultants.com</a> 
                     
                  </p>
               </div>
            </div>
			<!---728x90--->

         </div>
      </section>
      <!--//contact  -->
      <div class="contact-form ">
         <div class="address_mail_footer_grids">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3373.4210028661446!2d75.6583044146507!3d32.27365721678793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391c7f743e70d055%3A0xacbdd6659f46dfba!2sSuper+Hydro+Generation+Consultancy+Services+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1551832122440"></iframe>
         </div>
      </div>
	
<?php include_once "footer.php";?>