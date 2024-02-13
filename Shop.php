    <?php include('php/secction/header.php') ?>
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="pagination-area">
                <h2>Acerca de Nosotros</h2>
                <ul>
                    <li><a href="index.php">Inicio</a> /</li>
                    <li>Informacion</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="project-gallery4-area">
        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i <= 7; $i++) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="product-card">
                        <div class="badge">OFFERTA</div>
                        <div class="product-tumb">
                            <img src="img/product/1.png" alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Café en granos</span>
                            <h4><a href=""><?php echo $Name[$i];?></a></h4>
                            <p><?php echo $Detail[$i];?></p>
                            <div class="product-bottom-details">
                                <div class="product-price">U$<?php echo $Small[$i];?></div>
                                <div class="product-links">
                                    <a href=""><i class="fa fa-heart"></i></a>
                                    <a href=""><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include('php/secction/footer.php') ?>