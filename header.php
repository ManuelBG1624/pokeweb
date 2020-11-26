<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="MaterialDS/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="MaterialDS/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="MaterialDS/css/style.css">
    <link rel="stylesheet" href="Estilos/style.css">
</head>
<style>
    #categorias {
        font-size: 14px;
    }

    #sidebarCollapse:hover {
        color: #fff;
        background-color: #2E2E2E;
    }

    .navbar-toggler {
        background-color: #2E2E2E;
    }

    .navbar-toggler:hover {
        background-color: #2E2E2E;
        color: #fff;
    }

    #sidebar ul li a:hover {
        color: #000;
    }
</style>

<body>

    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-light unique-color-dark fixed-top">
        <a id="sidebarCollapse" class="btn">
            <i class="fas fa-lg fa-bars"></i>
        </a>
        <a class="navbar-brand" href="#">
            <img src="Imagenes/logo.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-chevron-down"></i>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="link" href="#">
                        <i class="fas fa-id-card"></i>Contactanos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="link" href="#" data-toggle="modal" data-target="#login">
                        <i class="fas fa-user"></i>
                        Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="link" href="#">
                        <i class="fas fa-shopping-cart"></i>Mis compras</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="wrapper  fixed-left ">
        <nav id="sidebar" class="fixed-top unique-color-dark h-100">
            <div class="sidebar-header special-color-dark text-center">
                <h3><i class="fas fa-user"></i></h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><i class="fas fa-home"></i>Inicio</a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#categorias" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-clipboard"></i>Categorias</a>
                </li>
                <div class="collapse p-2" id="categorias">
                    <li><a href="#"><i class="fas fa-boxes"></i>Animes</a></li>
                    <li><a href="#"><i class="fas fa-boxes"></i>Peliculas y VideoJuegos</a></li>
                    <li><a href="#"><i class="fas fa-boxes"></i>Comestibles</a></li>
                    <li><a href="#"><i class="fas fa-boxes"></i>Otros</a></li>
                </div>
                <li>
                    <a href="#"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
                </li>
            </ul>

        </nav>
        <!--Modal: Login / Register Form-->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-users prefix grey-text"></i>Iniciar sesión</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body mx-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-dark active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-shield"></i>Login</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-plus"></i>Registro</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form>
                                    <div class="md-form mb-5">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="number" id="form3" class="form-control validate" placeholder="DNI" required>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fas fa-unlock-alt prefix grey-text"></i>
                                        <input type="password" id="form2" class="form-control validate" placeholder="Contraseña" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-warning btn-block"><i class="fas fa-sign-in-alt"></i>Ingresar</button>
                                        </div>
                                    </div>
                                    <p class="text-right mt-4">¿Olvidaste tu contraseña? <a class="text-warning bg-white" data-toggle="collapse" href="#recuperar-clave" role="button" aria-expanded="false" aria-controls="recuperar-clave">Recuperar</a></p>
                                    <div class="collapse" id="recuperar-clave">
                                        <form>
                                            <input type="mail" class="form-control mb-2" placeholder="Correo">
                                            <button class="btn-dark btn-lg "><i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="Model/insertarModel.php" method="POST" class="mt-4">
                                    <input type="hidden" name="h_insertarUsuario" value="1">
                                    <h5>Formulario de Registro</h5>
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="txtnombre" class="form-control mb-2" placeholder="Nombres" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="txtapellido" class="form-control mb-2" placeholder="Apellidos" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="number" name="txtdni" class="form-control mb-2" placeholder="DNI" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="txtcelular" class="form-control mb-2" placeholder="Celular" required>
                                            </div>
                                        </div>
                                        <input type="mail" name="txtcorreo" class="form-control mb-2" placeholder="Correo Electronico" required>
                                        <input type="text" name="txtdireccion" class="form-control mb-2" placeholder="Direccion" required>
                                        <input type="password" name="txtclave" class="form-control mb-2" placeholder="Clave" required>
                                        <!-- Default inline 1-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" value="MASCULINO" id="defaultInline1" name="rdosexo" required>
                                            <label class="custom-control-label" for="defaultInline1">Masculino</label>
                                        </div>
                                        <!-- Default inline 2-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" value="FEMENINO" id="defaultInline2" name="rdosexo" required>
                                            <label class="custom-control-label" for="defaultInline2">Femenino</label>
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-block"><i class="fas fa-save"></i>Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
</body>

</html>