<?php session_start() ?>
<style>
    .contact-area {
        position: relative;
    }

    .default-padding {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    @media (min-width: 1200px) {
        .container-full {
            max-width: 1400px;
            width: 90%;
        }
    }

    .align-center {
        align-items: center;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width: 992px) {
        .col-lg-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }
    }

    .contact-area .form-content {
        padding: 90px;
        background: #ffffff;
        box-shadow: 0 0 10px #cccccc;
        position: relative;
        z-index: 1;
    }

    .contact-area .form-content h2 {
        font-weight: 600;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-content {
        padding: 50px;
        background: #ffffff;
        box-shadow: 0 0 10px #cccccc;
        position: relative;
        z-index: 1;
    }

    .container-full {
        max-width: 1400px;
        width: 90%;
        margin: 0 auto;
        /* Para centrar el contenedor */
    }

    .align-center {
        align-items: center;
    }
</style>
<?php include('php/secction/header.php') ?>


<!-- Start Contact -->
<div class="contact-area default-padding">
    <div class="container-full">
        <div class="contact-items">
            <div class="row justify-content-center"> <!-- Se cambió align-center por justify-content-center -->
                <div class="col-lg-5">
                    <div class="form-content">


                            <h2>Forgot Password</h2>
                            <form action="reset_password.php" method="post" class="form-content">
                                <!-- Clase "form-content" añadida -->
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" required class="form-control"><br><br>
                                <!-- Clase "form-control" añadida -->
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <!-- Clase "btn btn-primary" añadida -->
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("php/secction/footer.php"); ?>

<script>
    function mostrarContrasena() {
        var tipo = document.getElementById("password");
        if (tipo.type == "password") {
            tipo.type = "text";
        } else {
            tipo.type = "password";
        }
    }
</script>