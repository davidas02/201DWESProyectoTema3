<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 22 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor </h1>
            <div id="nav">
                <h2>22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas</h2>
            </div>
        </header>
        
        <?php
        /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 27/10/2022
     */
        if(isset($_POST['enviar'])){
            print "Su nombre es $_REQUEST[nombre]<br>";
            print "Su altura es $_REQUEST[altura] cm<br/>";
        }else{
            ?>
        <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
            <label for="nombre">Nombre:
                <input type="text" name="nombre">
            </label>
            <br/>
            <label for="altura">altura:
                <input type="text" name="altura">
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

