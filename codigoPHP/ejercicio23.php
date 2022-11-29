<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 23 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
        <meta author="David Aparicio Sir">
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor </h1>
        <div id="nav">
            <h2>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 02/11/2022
     */
    require_once '../core/221024libreriaValidacionFormularios.php';
    $aErrores = ['dni' => null, 'nombre' => null, 'altura' => null];
    $entradaOK = true;
    if (isset($_POST['enviar'])) {
        $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], 1);
        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 100, 0, 1);
        $aErrores['altura'] = validacionFormularios::comprobarEntero($_REQUEST['altura'], 300, 0, 1);
        foreach ($aErrores as $key => $value) {
            if ($value != null) {
                $entradaOK = false;
                
            }
        }
    } else {
        $entradaOK = false;
    }
    if ($entradaOK) {
        
        print "Su dni es $_REQUEST[dni]<br/>";
        print "Su nombre es $_REQUEST[nombre] <br/>";
        print "su altura es de $_REQUEST[altura] cm";
    } else {
        ?>
        <form name="formulario" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
            <label for="dni">DNI:
                <?php
                if ($aErrores['dni'] == null) {
                    echo "<input  type='text' name='dni' />";
                } else {
                    echo" <input type='text' name='dni'>";
                    echo "<a style='color:red;'>$aErrores[dni]</a>";
                }
                ?>
            </label>

            <br/>
            <label for="nombre">Nombre:
                <?php
                if ($aErrores['nombre'] == null) {
                    echo "<input  type='text' name='nombre' />";
                } else {
                    echo" <input  type='text' name='nombre' >";
                    echo "<a style='color:red;'>$aErrores[nombre]</a>";
                }
                ?>

            </label>
            <br/>
            <label for="altura">altura:
                <?php
                if ($aErrores['altura'] == null) {
                    echo "<input  type='text' name='altura'";
                } else {
                    echo" <input  type='text' name='altura' >";
                    echo "<a style='color:red;'>$aErrores[altura]</a>";
                }
                ?>

            </label>
            <br/>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <?php
    }
    ?>  
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>
