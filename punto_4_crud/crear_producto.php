<?php
require_once "class_panaderia.php";
$postres_form = new Panaderia();
$insert_postres = $postres_form->crear_postre($_POST['name_form_postre'],$_POST['ex_form_postre'],$_POST['desc_form_postre']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="crear_producto.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_form_postre">Nombre del postre</label>
                            <input type="text" name="name_form_postre" class="form-control" id="name_form_postre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ex_form_postre">Existencias</label>
                            <input type="number" name="ex_form_postre" class="form-control" id="ex_form_postre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc_form_postre">Descripción</label>
                        <input type="text" class="form-control" name="desc_form_postre" id="desc_form_postre">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
   
   
</body>

</html>