<br><br>

<section class="features-section pt-95">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-55 wow fadeInLeft">
                            <span class="sub-title"> <img src="img/icons/T1.png" alt=""> </i> <?php echo $Home[0] ?></span>
                            <h2><?php echo $Phrase[0]?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features-content-box mb-55 wow fadeInRight">
                            <p><?php echo $About[0]?></p>
                            <a href="about.php" class="btn-link">Learn More<i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php for($i = 6; $i <= 9; $i++) {?>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                                <div class="thumb">
                                    <img src="img/service/<?php echo $i?>.jpg" >
                                </div>
                                <div class="text">
                                    <div class="icon">
                                        <img src="img/icons/<?php echo $i?>.png" alt="">
                                    </div>
                                    <h5 class="title"><?php echo $SN[$i]?></h5>
                                    <p><?php echo $SD[$i]?></p>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    
                </div>
            </div>
        </section><!--====== End Features Section ======-->