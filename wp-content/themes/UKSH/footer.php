<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<!--==========================
    Footer
  ============================-->
  <footer id="footer" class="wow fadeIn" data-aos="fade-up" data-aos-duration="750" data-aos-once="true" data-aos-offset="100">
  <div class="footer-top">
      <div class="container">
        
        <h4>Knowledge Creates Health</h4>
        <div class="footersection">
        <div class="row">
            <div class="col-lg-6 col-md-6 footer-info">
              <span><img src="<?php bloginfo('template_url'); ?>/img/footerLogo.png" class="img-responsive" alt=""></span>
            </div>

            <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Contact Us</h4>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>
        </div>
        </div>
      </div>
    </div>

    <div class="container">
     <ul class="footerLink">
       <li>
         <a href="">Inprint</a>
       </li>
       <li>
         <a href="">Data Protection</a>
       </li>
     </ul>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div> 

<!-- 
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
  <div id="preloader"></div>
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
