<div class=".container_icons_new">
		<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
	</div>

	<div class="social_icons_news">

        <!-- <a href="<?php echo $Facebook?>" target="_blank"><img src="img/icons/facebook.png"  alt="facebook"></a> -->

		<!-- <a href="https://www.youtube.com/"><img src="img/icons/youtube.png" alt="youtube"></a> -->
		<a href="<?php echo $Map_url?>" target="_blank"><img src="img/icons/google-maps.png" alt="linkedin"></a>
		<a href="<?php echo $instagram?>"><img src="img/icons/instagram.png" alt="instagram"></a>
        <a href="<?php echo $tiktok?>"> <img src="img/icons/tik-tok.png" alt="tik-tok"></a>
		<a href="https://www.google.com/maps/place/Antonios+Painting/@40.847001,-73.6948234,15z/data=!4m6!3m5!1s0x89c28f8e7dc3cd83:0x6aace6595f542d8a!8m2!3d40.847001!4d-73.6948234!16s%2Fg%2F11rxpv6g33?entry=ttu" target="_blank"><img src="img/icons/business.png" alt="business"></a>
	</div>


<style>
	
*{box-sizing:border-box;}

.container_icons_new{
			width:95%;
			max-width:900px;
			padding:32px 64px;
			margin:auto;
			z-index: 2;
}

.social_icons_news{
			/*las imágenes usadas tienen width de 48px*/
			width:40px;
			position:fixed;
			top:50px;
			left: 0;
}

		/* Extra centrado vertical*/

.social_icons_news{
			/*border:1px solid #000;*/
			top:67%;
			height:205px;
			/*para poner height 192 deberíamos haber indicado en el reset de estilos font-size:0;*/
			margin-top:120px;
			z-index: 2;
}
</style>
	







<!--====== Start Footer ======-->
<footer class="footer-area footer-wave pt-100 p-r z-1">
            <div class="wave-shapes">
                <img src="img/shape/wave-shape-1.png" class="w-shape one" alt="wave shape">
                <!-- <img src="img/shape/wave-shape-2.png" class="w-shape two" alt="wave shape"> -->
            </div>
            <div class="footer-wrapper text-white main-bg p-r z-1">
                <!-- <div class="shape shape-one animate-float-y"><span><img src="img/shape/tree.png" alt="Tree Image"></span></div>
                <div class="shape shape-two animate-float-y"><span><img src="img/shape/tree2.png" alt="Tree Image"></span></div> -->
                <div class="container">
                    <!--====== Footer Widget ======-->
                    <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                                    <div class="widget-content">
                                        <div class="footer-logo mb-25">
                                            <a href="index.php"><img src="img/logo/logo.png" alt="Logo"></a>
                                        </div>
                                        <!-- <p>Quis autem eum reprehenderit volutate 
                                            velit quam molestiae conseuatur </p> -->
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                                    <h4 class="widget-title">Get In Touch</h4>
                                    <div class="widget-content">
                                        <ul class="info-list">
                                            <li><?php echo $Address?></li>
                                            <li><a href="<?php echo $MailRef?>"><?php echo $Mail?></a></li>
                                            <li><a href="tel: <?php echo $Phone?>"><?php echo $Phone?></a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                    <h4 class="widget-title">Quick Link</h4>
                                    <div class="widget-content">
                                        <ul class="footer-nav">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-2 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                    <h4 class="widget-title">Services</h4>
                                    <div class="widget-content">
                                        <ul class="footer-nav">
                                                   
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[1]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[2]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[3]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[4]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[5]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php"><?php echo $SN[6]?></a>
                                                        </li>
                                                        <li>
                                                            <a href="services.php">See More</a>
                                                        </li>
                                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Copyright Area ===-->
                    
                </div>
            </div>
            
                       
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="vendor/isotope.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="vendor/imagesloaded.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="vendor/jquery.waypoints.js"></script>
        <!--====== Nice-select js ======-->
        <script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== jquery UI js ======-->
        <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
        <!--====== WOW js ======-->
        <script src="vendor/TweenMax.min.js"></script>
        <script src="vendor/jquery.wavify.js"></script>
        <!--====== WOW js ======-->
        <script src="vendor/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="js/theme.js"></script>
            
    </footer>
</body>
</html>