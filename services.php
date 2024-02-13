<?php include('php/secction/header.php') ?>


        <section class="page-title-area text-white bg_cover" style="background-image: url(img/bg/13.png);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Service</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.php">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Service</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->



             <!--====== Start Features Section ======-->
        <section class="features-section pt-95">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="features-content-box p-r z-2 mb-20">
                            <!--====== Section-title ======-->
                            <div class="section-title mb-50 wow fadeInDown">
                                <span class="sub-title"><img src="img/icons/T1.png" alt=""></i>What We Do For Home</span>
                                <h2> <?php echo $Phrase[0]?></h2>
                            </div>
                            <div class="features-item-area">
                                <div class="row">
                                    <?php for($i = 1; $i <= 3; $i++)  {?>
                                        <div class="col-md-6">
                                            <div class="fancy-icon-box-two mb-30 wow fadeInUp">
                                                <div class="shape icon-shape"></i></div>
                                                <div class="icon">
                                                <img src="img/icons/<?php echo $i ?>.png" alt="">
                                                </div>
                                                <div class="text">
                                                    <h5 class="title"><?php echo $Desc[$i]?></h5>
                                                    <!-- <p><?php //echo $service[$i]?></p> -->
                                                </div>
                                            </div>
                                        </div>                                       
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="features-two_image-box p-r z-1 text-center pr-lg-60 mb-50 wow fadeInRight">
                            <img src="img/features/f1.png" class="mt-50" alt="features image">
                            <div class="shape shape-one"><span></span></div>
                            <div class="circle-logo">
                                <div class="inner-circle">
                                    <img src="img/logo/logo.png" alt="">
                                    <!-- <h5>Garden</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->

         <!-- Me veo en la necesidad de comentar este codigo 
            seccion servicios  -->
        <section class="service-bgc-section p-r z-1 main-bg pt-150 pb-70" style="background-color: #1b4b8f; ">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12">
                        <!--====== Section Title ======-->
                        <div class="section-title text-white text-center mb-50 wow fadeInDown" style="">
                            
                            <h2> Services </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                       
                    
                    
                    <?php for ($i=1; $i <=11; $i++) {?>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <!--====== Service Item ======-->
                       
                        <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                             
                            <div class="service-info">
                                <div class="shape icon-shape"></div>
                                <div class="icon">
                                    <img src="img/icons/icons-services/<?php echo $i?>.png" alt="">
                                </div>
                                <h3 class="title"><a href="services.php"><?php echo $SN[$i];?></a></h3>
                                <p class="title" style="color:azure"><?php echo $SD[$i]?></p>
                            </div>
                            <div class="service-img">
                                
                                <img src="img/service/<?php echo $i;?>.jpg" alt="Service Image">
                            </div>
                             
                        </div>
                        
                       
                    </div>
                     <?php }?>

                    
                </div>
            </div>
        </section><!--====== End Service Section ======--> 


<?php include('php/secction/slider-partner.php')?>
<?php include('php/secction/footer.php') ?>
