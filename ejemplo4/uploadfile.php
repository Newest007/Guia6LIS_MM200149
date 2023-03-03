<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/materialize.css" />
</head>
<body>
    <section>
        <article>
            <div class="row">
                <h1 class="tittle-form">Adjuntar un archivo de imagen</h1>
                <?php
                    if(isset($_POST['send'])):
                        //Incluir librería de funciones
                        require_once("comprobarimagen.php");
                        //Verificar si se han enviado uno o varios archivos valiéndonos de una expresión regular
                        $archivos = array();
                        if(!empty($_FILES['files']['name'][0])):
                            $list = "<ol class=\"list-files\">\n";
                            foreach ($_FILES['files']['name'] as $i => $archivo):
                                $archivos[$i] = $archivo;
                                //Invocar a la función que verificará mediante expresión regular si el archivo pasado como argumento es o no es imagen
                                $list.= "<li>\n<a href=\"#\">"
                            
                ?>
            </div>
        </article>
    </section>
    
</body>
</html>