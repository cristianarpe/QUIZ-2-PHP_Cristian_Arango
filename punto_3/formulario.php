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
                <form action="vista_post.php" method="POST">
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
                        <div class="form-group">
                        <label for="numdoc_form_user">Numero de documento</label>
                        <input type="number" class="form-control" id="numdoc_form_user" name="numdoc_form_user">
                    
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
                <form action="vista_get.php" method="GET">
                </div>
                        <div class="form-group col-md-4">
                            <label for="asunto_form_user">Asunto</label>
                            <input type="text" name="asunto_form_user" class="form-control" id="asunto_form_user">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="form-group col-md-4">
                            <label for="mensaje_form_user">Mensaje</label>
                            <input type="text" name="mensaje_form_user" class="form-control" id="mensaje_form_user">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar menjase</button>
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