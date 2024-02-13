        <section class="partners-section">
            <div class="container">
                <div class="partner-slider-one pt-80 pb-70 border-top-1 wow fadeInDown">
                    <?php for ($i=1; $i <=2 ; $i++) { ?>
                        <div class="single-partner-item">
                            <div class="partner-img">
                                <a href="<?php echo $urls[$i]?>"><img src="img/partners/<?php echo $i?>.png" alt="Partner Image" width="300"></a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>  