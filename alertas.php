<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $r = 2;
    if (isset($_GET['r'])) {
        $r = $_GET['r'];
    } ?>
    <?php
    if ($r == 0) {
    ?>
        <script>
            window.addEventListener('load', errorRegistro, false);

            function errorRegistro() {
                $('#msjNORegistrado').modal('show');
            }
        </script>
    <?php }
    if ($r == 1) { ?>
        <script>
            window.addEventListener('load', errorRegistro, false);

            function errorRegistro() {
                $('#msjRegistrado').modal('show');
            }
        </script>
    <?php } ?>
    <!--Modal -->
    <div class="modal fade" id="msjRegistrado" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="modal-body text-center text-success font-weight-bold">
                    <h1 class="font-weight-bold pb-2" style="font-size: 80px;"><i class="fas fa-check-circle"></i></h1>
                    <h3 class="pb-2">Registrado Correctamente</h3>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="msjNORegistrado" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="modal-body text-center text-danger font-weight-bold">
                    <h1 class="font-weight-bold pb-2" style="font-size: 80px;"><i class="fas fa-exclamation-circle"></i></h1>
                    <h3 class="pb-2">Error: No se Registró</h3>
                    <p class="text-muted">
                        Verifique los datos ingresados, es probable que ya se encuentre registrado..
                    </p>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>