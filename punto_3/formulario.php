<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Quiz 2</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-6">
                <form action="usuarios.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_form_user">Nombre</label>
                            <input type="text" name="name_form_user" class="form-control" id="name_form_user">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apell_form_user">Apellido</label>
                            <input type="text" name="apell_form_user" class="form-control" id="apell_form_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_form_user">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="date_form_user" name="date_form_user">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="t_doc_form_user">Tipo de documento</label>
                            <select id="t_doc_form_user" name="t_doc_form_user" class="form-control">
                                <option disable selected value="">Seleccione uno...</option>
                                <option value="1">CC</option>
                                <option value="2">TI</option>
                                <option value="3">CE</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rol_form_user">Rol usuario</label>
                            <select id="rol_form_user" name="rol_form_user" class="form-control">
                                <option disabled selected value="">Seleccione uno...</option>
                                <?php
                                //FORMA 3.1
                                foreach ($roles as $data_rol) {
                                    ?>
                                    <option value="<?php echo $data_rol['id_rol'] ?>"><?php echo $data_rol['nombre'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tyc_form_user" id="tyc_form_user">
                            <label class="form-check-label" for="tyc_form_user">
                                Acepta terminos y condiciones
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <hr>
    <hr>
    <br>
    <div class="container">
        <a href="consulta_usuarios.php?gato_user=4">Consultar info</a>
    </div>
    <!--
    Crea un formulario donde se pida la siguiente información
    - Nombres
    - Apellidos
    - Fecha de nacimiento
    - Tipo de documento
    - Numero de documento
    - Asunto
    - Mensaje
    Al momento de enviar la informacion debe ser mostrada por medio de los metodos GET y POST
    -->
</body>

</html>