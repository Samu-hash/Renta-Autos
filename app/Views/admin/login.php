<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title; ?></title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url(); ?>/vendor/admin/plantilla/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?= base_url(); ?>/vendor/admin/plantilla/css/styles.css" rel="stylesheet">
        <link href="<?= base_url(); ?>/vendor/cssGnrl/loading.css" rel="stylesheet">
        <link href="<?= base_url(); ?>/vendor/plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-dark" data-baseurl="<?= base_url(); ?>">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenido de nuevo!</h1>
                                            <h6>Bienvenido al sistema de autos para el control de las 
                                                transacciones de los clientes, por favor ingresa correo electronico y clave</h6>
                                            <br>
                                        </div>
                                        <form class="user" id="formLoginRentaAuto">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="userLogin" id="userLogin" aria-describedby="emailHelp" placeholder="correo electronico...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" name="passLogin" id="passLogin" placeholder="clave">
                                            </div>
                                            
                                            <button id="btn-login" type="submit" class="btn btn-warning btn-user btn-block">
                                                Ingresar
                                            </button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/vendor/admin/plantilla/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/vendor/admin/plantilla/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(); ?>/vendor/admin/plantilla/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(); ?>/vendor/admin/plantilla/js/styles.min.js"></script>

        <!--CUSTON JQUERY VALIDATE-->
        <script src="<?= base_url(); ?>/vendor/plugins/validate/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>/vendor/plugins/validate/jquery-validate-additional-methods.min.js"></script>

        <!--SWAL POPUP-->
        <script src="<?= base_url(); ?>/vendor/plugins/sweetAlert2/sweetalert2.all.min.js"></script>

        <!---CONTROL LOGIN-->
        <script src="<?= base_url(); ?>/vendor/admin/controllers/login.js" type="module"></script>


    </body>

</html>
