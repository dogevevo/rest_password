<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $ExDescription;?>" />
<meta name="author" content="MAVEN" />

<!-- Page Title -->
<title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
</title>    

<!-- LINKS -->
        <link rel="shortcut icon" href="favicon_r.png" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="fonts/flaticon/flaticon_gadden.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="vendor/slick/slick.css">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- links java -->
        

</head>

<body>
<?php $_SESSION['token'] = md5(microtime()); ?>

    <!-- <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName.$Phone;?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#8b3e0e", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
     -->
<div class="wrapper-area">
<!-- Header Area Start Here -->
<!--====== Start Preloader ======-->
         <div class="preloader">
            <div class="loader">
                
                <div class="img-loader"> 
                    <center><img src="img/logo/logo.png" alt=""></center> 
                </div>
            </div>
        </div>
        
        <!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="text" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        <!--====== Search From ======-->
        <!--====== Sidebar Wrapper ======-->
        <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                    <div class="sidebar-wrapper">
                        <div class="sidebar-information-area">
                            <div class="row no-gutters">
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                    <a href="index.php" class="brand-logo" style="position: fixed;width: 311px; margin-top: -100px; margin-left: -60px;"><img src="img/logo/logo.png" alt="Site Logo"></a>
                                        <p></p>
                                        <div class="social-item">
                                            <h6>Follow Us</h6>
                                            <ul class="social-link">
                                                <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                                                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Get In Touch</h4>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                            <p> <?php echo $Address?></p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                            <p><a href="<?php echo $MailRef?>"><?php echo $Mail?></a></p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                            <p><a href="tel: <?php echo $Phone?>"><?php echo $Phone?></a></p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="sidebar-gallery pt-80">
                            <div class="row">


                                <?php for ($b=1; $b <=6; $b++) {?>
                                    <div class="col-lg-2 col-md-4 col-4">
                                        <div class="single-gallery-item">
                                            <div class="gallery-img">
                                                <img src="img/gallery/galleryHeader/<?php echo $b?>.png" alt="Gallery Image">
                                                <div class="hover-overlay">
                                                    <a href="img/gallery/galleryHeader/<?php echo $b?>.png" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--====== Sidebar Wrapper ======-->
        <!--====== Start Header ======-->
        <header class="header-area header-three">
            <div class="header-top-bar-two white-bg d-none d-xl-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <!--====== Top Left ======-->
                            <div class="top-left">
                                
                                <span><i class="far fa-envelope"></i><b class="title">Email :</b><a href="<?php echo $MailRef?>"><?php echo $Mail?></a></span>
                                <span><i class="far fa-phone-plus"></i><b class="title">Call :</b><a href="tel: <?php echo $Phone?>"><?php echo $Phone?></a></span>
                                <!--<span><i class="far fa-map-marker-alt"></i><b class="title">Location :</b><?php echo $Address?></span>-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--====== Top Right ======-->
                            <div class="top-right float-lg-right">
                                <ul class="top-left">
                                    <span><i class="far fa-map-marker-alt"></i><b class="title">Location : </b><a href="mailto:support@gmail.com"><?php echo $Address?></a></span>
                                    <span><i class="fa fa-sign-in"></i> <a href="login.php">Login</a></span>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--======= Header Navigation ======-->
            <div class="header-navigation main-bg navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <!--======= Primary Menu ======-->
                    <div class="primary-menu">
                        <!--======= Site Branding ======-->
                        <div class="site-branding">
                            <a href="index.php" class="brand-logo"><img src="img/logo/logo.png" alt="Site Logo"></a>
                            <!-- <a href="index.html" class="sticky-logo"><img src="img/logo/logo-white.png" alt="Site Logo"></a> -->
                        </div>
                        <!--======= Nav Menu ======-->
                        <div class="nav-menu">
                            <!-- Mobile Logo -->
                            <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                <a href="index.php" class="brand-logo"><img src="img/logo/logo.png" alt="Site Logo"></a>
                            </div>
                            
                            <!--=== Main menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="index.php">Home</a></li>
                                    <li class="menu-item"><a href="about.php">About</a></li>

                                    <li class="menu-item has-children"><a href="services.php">Service</a></li>
                                    <li class="menu-item has-children"><a href="gallery.php">Gallery</a></li>
                                    <li class="menu-item has-children"><a href="contact.php">Contact</a></li>
                                   
                                    
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.php" class="main-btn secondary-btn">Get a Quote</a>
                            </div>
                        </div>
                        <!--======= Nav Right Item ======-->
                        <div class="nav-right-item d-flex align-items-center">


                            <div class="outer-box clearfix">
                                
                                <!-- Search Box -->
                                <div id="google_translate_element" class="google"></div>

                                    <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'eu', includedLanguages: 'es,en,fr,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
                                            }
                                    </script>

                                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                
                                <!-- Nav Btn -->
                                <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
                                
                                
                            </div>
                        



                           
                            
                            
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

