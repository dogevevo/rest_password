<section class="service-bgc-section p-r z-1 main-bg pt-150 pb-70">
            <!--div class="shape shape-one"><span><img src="img/shape/leaf-1.png" alt="Leaf Png"></span></div>
            <div class="shape shape-two"><span><img src="img/shape/leaf-2.png" alt="Leaf Png"></span></div>
            <div class="shape shape-three"><span><img src="img/shape/leaf-3.png" alt="Leaf Png"></span></div-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12">
                        <!--====== Section Title ======-->
                        <div class="section-title text-white text-center mb-50 wow fadeInDown">
                            
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php for ($i=1; $i <=3; $i++) {?>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <!--====== Service Item ======-->
                        
                            <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                                
                                <div class="service-info">
                                    <div class="shape icon-shape"></div>
                                    <div class="icon">
                                        <img src="img/icons/icons-services/<?php echo $i?>.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services.php"><?php echo $SN[$i];?></a></h3>
                                    <!-- <p class="title"><?php echo $SD[$i]?></p> -->
                                </div>
                                <div class="service-img">
                                    <a href="services.php" class="icon-btn"><i class="far fa-plus"></i></a>
                                    <img src="img/service/<?php echo $i?>.jpg" alt="Service Image">
                                </div>                           
                            </div>

                            
                        </div>

                    <?php }?>
                    <a href="services.php" class="main-btn golden-btn mb-10">Learn More Us</a>
                </div>
            </div>
        </section><!--====== End Service Section ======-->