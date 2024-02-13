<?php include('php/secction/header.php') ?>

        <section class="page-title-area text-white bg_cover" style="background-image: url(img/bg/13.png);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Project</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.php">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Project</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->  





        <!--====== Start Masonry Gallery section ======-->
        <section class="Masonry-gallery-section pt-95 pb-70">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <!--====== Section Title ======-->
                        <div class="section-title text-center mb-65">
                            <span class="sub-title"> <img src="img/icons/T1.png" alt="">Photo Gallery</span>
                            <h2>Inside Our Photo Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php for ($b=1; $b <=27; $b++) {?>
                        <div class="col-lg-4 col-sm-6 order-lg-1">
                            <!--====== Gallery Item ======-->
                            <div class="masonry-project-item mb-30 wow fadeInUp">
                                <div class="project-img">
                                    <img src="img/gallery/temp/<?php echo $b?>.jpg" alt="Gallery Image">
                                    <div class="hover-overlay">
                                        <div class="hover-content">
                                            <a href="services.php"> <img src="favicon_r.png" alt=""> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php for ($b=1; $b <=33; $b++) {?>
                        <div class="col-lg-4 col-sm-6 order-lg-1">
                            <!--====== Gallery Item ======-->
                            <div class="masonry-project-item mb-30 wow fadeInUp">
                                <div class="project-img">
                                    <img src="img/gallery/galleris/<?php echo $b?>.jpg" alt="Gallery Image">
                                    <div class="hover-overlay">
                                        <div class="hover-content">
                                            <a href="services.php"> <img src="favicon_r.png" alt=""> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
               
            </div>
        </section><!--====== End Masonry Gallery section ======-->


<?php include('php/secction/slider-partner.php')?>
<?php include('php/secction/footer.php') ?>