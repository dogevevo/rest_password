<?php include('php/secction/header.php') ?>

<section class="page-title-area text-white bg_cover" style="background-image: url(img/bg/13.png);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.php">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Contact Us</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->




        <section class="contact-info-section pt-100">
            <div class="container">
                <div class="contact-info-wrapper wow fadeInUp">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-1.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Location</span>
                                    <h6><?php echo $Address?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-2.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Email Address</span>
                                    <h6 style="color: #a81010;" ><?php echo $Mail?></h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!--====== Contact Info Item ======-->
                            <div class="contact-info-item text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-3.png" alt="icon">
                                </div>
                                <div class="info">
                                    <span class="title">Phone No</span>
                                    <h6><?php echo $Phone?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Info section ======-->


        <!--====== Start Contact section ======-->
        <section class="contact-section pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!--====== Section-title ======-->
                        <div class="section-title wow fadeInRight mb-50">
                            <span class="sub-title"><i class="flaticon-plant"></i>Contact Us</span>
                            <h2>Ready to Work 
                                With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--=== Map Box ===-->
                            <div class="map-box wow fadeInLeft mb-50">
                                <?php echo $GoogleMap?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Contact Form Wrapper ======-->
                            <div class="contact-form-wrapper mb-50 wow fadeInRight">
                                <form method="post" action="mail.php" class="contact-form">
                                    <div class="form_group">
                                        <label><i class="far fa-user"></i></label>
                                        <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-envelope"></i></label>
                                        <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-phone-plus"></i></label>
                                        <input type="text" class="form_control" placeholder="Phone Number" name="number" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-map-marker-exclamation"></i></label>
                                        <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                    </div>
                                    <div class="form_group">
                                        <label><i class="far fa-pen-fancy"></i></label>
                                        <textarea class="form_control" rows="3" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="form_group">
                                        <button class="main-btn primary-btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact section ======-->



        <section class="info-section pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-one mb-40 wow fadeInUp">
                            <div class="shape shape-one"><span><img src="img/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>Get Consultations</span>
                                <h4 class="title">Need Any Consultations
                                    to Build ?</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-two mb-40 wow fadeInDown">
                            <div class="shape shape-one"><span><img src="img/shape/info-shape-1.png" alt="shape"></span></div>
                            <div class="info">
                                <span>Get Consultations</span>
                                <h4 class="title">Get Every Single Update
                                    Or 24/7 Support</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--====== Single Info Item ======-->
                        <div class="single-info-item style-three mb-40 wow fadeInUp">
                            <div class="shape shape-one"><span><img src="img/shape/info-shape-2.png" alt="shape"></span></div>
                            <div class="info">
                                <span>Need A Career ?</span>
                                <h4 class="title">Need Any Jobs Or Work With a Team Member?</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Info Section ======-->


        <section class="map-section">
        <div class="map mar-bottom-30">
            <div id="map" style="height: 300px; width: 100%;">
            <?php echo $GoogleMap?>
            </div>
        </div>
    </section>
    <!--*End Newsletter*-->


    <style>
        .map-section{
    	    position:relative;
        }

        .map-section iframe{
            position:relative;
            width:100%;
            height:670px;
            margin-top:-180px;
        }

    </style>
<?php include('php/secction/footer.php') ?>
