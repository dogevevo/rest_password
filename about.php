<?php include('php/secction/header.php') ?>

        <section class="page-title-area text-white bg_cover" style="background-image: url(img/bg/13.png);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">About Us</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.php">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">About Us</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->

        <section class="about-section pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-50 wow fadeInLeft">
                            <span class="sub-title"><img src="img/icons/T1.png" alt=""><?php echo $Home[1]?></span>
                            <h2><?php echo $Phrase[0]?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--====== About Content Box ======-->
                        <div class="about-content-box mb-50 wow fadeInRight">
                            <p class="mb-30"><?php echo $About [0]?></p>
                            <ul class="check-style-one mb-40">
                                <li><i class="far fa-check"></i><?php echo $About_tittle[1]?></li>
                                <li><i class="far fa-check"></i><?php echo $About_tittle[2]?></li>
                            </ul>
                            <div class="about-button">
                                <a href="about.php" class="main-btn secondary-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--====== About Image Item ======-->
                        <div class="about-img-item mb-30 wow fadeInUp">
                            <img src="img/about/1.jpg" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--====== About Image Item ======-->
                        <div class="about-img-item mb-30 wow fadeInDown">
                            <img src="img/about/2.jpg" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--====== About Image Item ======-->
                        <div class="about-img-item mb-30 wow fadeInUp">
                            <img src="img/about/3.jpg" alt="About Image">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!--====== About Wrapper ======-->
                        <div class="about-wrapper-two gray-bg mt-minus-110 p-r wow fadeInDown">
                            <div class="row no-gutters justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--====== About features Item ======-->
                                    <div class="about-features-item text-center">
                                        <div class="hover-bg bg_cover" style="background-image: url(img/about/bg1.png);"></div>
                                        <div class="icon">
                                            <i class="flaticon-target"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Our Mission</h3>
                                            <p><?php echo $About[4] ?></p>
                                            <a href="about.php" class="btn-link">Read More<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--====== About features Item ======-->
                                    <div class="about-features-item item-active text-center">
                                        <div class="hover-bg bg_cover" style="background-image: url(img/about/bg1.png);"></div>
                                        <div class="icon">
                                            <i class="flaticon-vision"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Our Vision</h3>
                                            <p><?php echo $About[3]?></p>
                                            <a href="about.php" class="btn-link">Read More<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <!--====== About features Item ======-->
                                    <div class="about-features-item text-center">
                                        <div class="hover-bg bg_cover" style="background-image: url(img/about/bg1.png);"></div>
                                        <div class="icon">
                                            <i class="flaticon-management"></i>
                                        </div>
                                        <div class="text">
                                            <h3 class="title">Plan & Goals</h3>
                                            <p><?php echo $About[5]?></p>
                                            <a href="about.php" class="btn-link">Read More<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======-->

        <section class="features-section p-r z-1 pb-100">
            <div class="features-wrapper">
                <div class="features-bg bg_cover" style="background-image: url(img/bg/11.png);"></div>
                <div class="features-bgc-content-box main-bg text-white wow fadeInRight">
                    <div class="features-content-box">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-50 wow fadeInUp">
                            <span class="sub-title"><img src="img/icons/T1.png" alt="">Modern Homes</span>
                            <h2><?php echo $Phrase[0]?></h2>
                        </div>
                        <p class="mb-40"><?php echo $About[2] ?></p>
                        <div class="single-features-item mb-30 wow fadeInDown">
                            <div class="icon">
                                <img src="img/icons/A2.png" alt="">
                                <span class="shape-circle"></span>
                            </div>
                            <div class="text">
                                <h5 class="title"><?php echo $About_tittle[3]?></h5>
                                
                            </div>
                        </div>
                        <div class="single-features-item mb-30 wow fadeInUp">
                            <div class="icon">
                                <img src="img/icons/A1.png" alt="">
                                <span class="shape-circle"></span>
                            </div>
                            <div class="text">
                                <h5 class="title"><?php echo $About_tittle[4]?> </h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->

<?php include('php/secction/slider-partner.php')?>
<?php include('php/secction/footer.php') ?>
