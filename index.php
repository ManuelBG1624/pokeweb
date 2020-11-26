<?php include('alertas.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="Estilos/index.css">

    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
    .card {
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        transition: all 0.25s;
    }

    .card:hover {
        transform: translateY(-15px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        background-color: #212121;
        color: #fff;
    }
</style>
<body>
    <?php include('header.php'); ?>
    <div id="content">
        <div class="jumbotron card card-image" style="background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);">
            <div class="text-white text-center py-5 px-4">
                <div>
                    <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>¡Bienvenido!</strong></h1>

                    <img src="Imagenes/logo.png" class="img-fluid" alt=""><br>


                    <a class="btn btn-yellow" href="#categorias" data-toggle="collapse"><i class="fas fa-clone left"></i> Ver más</a>
                </div>
            </div>
        </div>
        <!--Carousel Wrapper-->
        <div class="container mt-4">
            <div class="card-deck">
                <div class="card p-4 flex-center">
                    <div class="row">
                        <div class="col-sm-4 p-3 text-center">
                            <i class="fas fa-truck" style="font-size: 70px; color:#ffbb33;"></i>
                        </div>
                        <div class="col-sm-8">
                            <h5 style="color:#ffbb33;" class="font-weight-bold">ENVÍOS A TODO ICA</h5>
                            <p>
                                Envíos gratis a partir de compras de S/.100 a todo Ica de tus productos preferidos!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-4 flex-center">
                    <div class="row">
                        <div class="col-sm-4 p-3 text-center">
                            <i class="fas fa-hand-holding-usd" style="font-size: 70px; color:#ffbb33;"></i>
                        </div>
                        <div class="col-sm-8">
                            <h5 style="color:#ffbb33;" class="font-weight-bold">PAGOS SEGUROS</h5>
                            <p>
                                En toda la web. Recibes una confirmación del pedido y el número de seguimiento.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-4 flex-center">
                    <div class="row">
                        <div class="col-sm-4 p-3 text-center">
                            <i class="fas fa-chart-line" style="font-size: 70px; color:#ffbb33;"></i>
                        </div>
                        <div class="col-sm-8">
                            <h6 style="color:#ffbb33;" class="font-weight-bold">PRODUCTOS DE CALIDAD</h6>
                            <p>
                                Cuidadosamente seleccionados por nuestro equipo comercial para tener el mejor catálogo!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card deck -->
        <div class="container mt-4">
            <div class="card">
                <div class="row no-gutters" style="display: flex; align-items: center;">
                    <div class="col-sm-8 p-5">
                        <h1 style="color:#ffbb33;" class="font-weight-bold">Acerca De</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sint pariatur est voluptatibus vitae minus, alias explicabo, quaerat corporis, corrupti animi. Accusantium iusto iure ducimus, delectus soluta voluptate. Adipisci, voluptate!</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="Imagenes/acerca.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-4" id="categorias">
            <h2 class="text-warning mt-5 mb-5 font-weight-bold">NUESTRAS CATEGORIAS</h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="text-center">Animes</h3>
                            <a href="#" class="btn btn-warning text-left">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card">
                        <div class="card">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="text-center">Peliculas y Videojuegos</h5>
                                <a href="#" class="btn btn-warning text-left">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card">
                        <div class="card">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="text-center">Comestibles</h3>
                                <a href="#" class="btn btn-warning text-left">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card">
                        <div class="card">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="text-center">Otros</h3>
                                <a href="#" class="btn btn-warning text-left">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container m-auto">
            <h2 class="text-warning mt-4 mb-4 font-weight-bold">Nuestros Clientes</h2>
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100 m-auto" src="Imagenes/cliente1.jpg" alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100 m-auto" src="Imagenes/nosotros.jpg" alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100 m-auto" src="Imagenes/cliente1.jpg" alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                </div>
                <div class="col-sm-6 mt-2">
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100 m-auto" src="Imagenes/cliente1.jpg" alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100 m-auto" src="Imagenes/nosotros.jpg" alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100 m-auto" src="Imagenes/cliente1.jpg" alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div><br>
    <?php include('footer.php'); ?>
</body>

</html>