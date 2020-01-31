 <footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <section>
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <div class="">
                  <div class="row footer-agile-grids ">
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Follow Us</h4>
                        <div class="footer-icons">
                           <ul>
                              <li class="mb-2">
                                 <a href="#"><span class="fab fa-facebook-f"></span></a>
                                 <h6 class="ml-3 text-left">Facebook</h6>
                              </li>
                              <li class="mb-2">
                                 <a href="#"><span class="fas fa-envelope"></span></a>
                                 <h6 class="ml-3 text-left">Gmail</h6>
                              </li>
                              <li class="mb-2">
                                 <a href="#"><span class="fab fa-twitter"></span></a>
                                 <h6 class="ml-3 text-left">Twitter</h6>
                              </li>
                              <li class="mb-2">
                                 <a href="#"><span class="fab fab fa-google-plus-g"></span></a>
                                 <h6 class="ml-3 text-right">Google+</h6>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Nav Links</h4>
                        <nav class="border-line">
                           <ul class="nav flex-column">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a href="about.php" class="nav-link">About Us</a>
                              </li>
                              <li class="nav-item">
                                 <a href="choose.php" class="nav-link">Why Choose Us</a>
                              </li>     
							  <li class="nav-item">
                                 <a href="projects.php" class="nav-link">Our Projects</a>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.php" class="nav-link">Contact</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="wthree-left-right col-lg-4 col-md-4 col-sm-12">
                        <h4 class="pb-lg-3 pb-3">Get In Touch</h4>
                        <div class="wls-hours-list">
                           <ul>
                              <li class="d-flex">Monday-Friday<span class="time ml-auto"> 9:30-18:30</span></li>
                              <li class="d-flex">Saturday <span class="time ml-auto">10:30-14:30</span></li>
                              <li class="d-flex">Sunday   <span class="time ml-auto">     closed</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="copy-agile-right text-center">
            <p>&copy; 2019<a href="index.php" target="_blank">  Thapar Consultants </a> All Rights Reserved </p>
         </div>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!--Nav script scrollon--> 
      <script>
         $(window).scroll(function() {
             if ($(document).scrollTop() > 150) {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
             } else {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
             }
         });
      </script>
      <!--//Nav script scrollon--> 
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true ,
         		nav:false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->  
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1100,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>

</html>
