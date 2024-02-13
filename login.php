<?php session_start() ?>
<style>
    .contact-area {
        position: relative;
    }

    .R-forfotPassword{
        text-align: center;
        color: #000
    }

    .bottons-r{
        display: flex;
        justify-content: space-between;
        margin-top: -60px;
    }

    .default-padding {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .btn-roger {
        width: 193px;
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
                        <h2>Welcome</h2>
                        <form action="controlador.php" method="POST">

                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="password" name="password" placeholder="password"
                                    type="password">
                                <span class="alert-error"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="btningresar" class="btn btn-primary btn-roger"
                                    value="INICIAR SECION">LOGIN</button>
                            </div>
                            <br> <br>
                            <div class="col">
                                <!-- <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button> -->
                            </div>
                            <div class="bottons-r">
                                <a class="R-forfotPassword" href="passwordreset.php">Forgot Password ?</a>
                                <a class="R-forfotPassword" href="singup.php">Sing Up ?</a>
                            </div>
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
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