
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .contact-area {
            padding: 100px 0;
        }
        .form-content {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #17a2b8;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .alert-msg {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="form-content"> 
                        <h2>Welcome</h2>
                        <form action="controlador.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                                <span class="alert-error"></span>
                            </div>
                            <button type="submit" name="btningresar" class="btn">Login</button>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Show Password</button>
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
</body>
</html>











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
    margin: 0 auto; /* Para centrar el contenedor */
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
                                <input class="form-control" id="password" name="password" placeholder="password" type="password">
                                <span class="alert-error"></span>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="btningresar" class="btn btn-primary" value="INICIAR SECION">Login</button>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
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
