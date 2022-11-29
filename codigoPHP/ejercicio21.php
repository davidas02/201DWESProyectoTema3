<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 21 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor </h1>
            <div id="nav">
                <h2>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</h2>
            </div>
        </header>
        <form name="formularioEdadAltura" action="Tratamiento.php" method="post">
            <label for="nombre">Nombre:
            <input type="text" name="nombre" />
            </label>
            <br/>
            <label for="altura">Altura:
            <input type="text" name="altura"/>
            </label>
            <br/>
            
            <br/>
            <input type="submit" value="enviar"/>
        </form>
        <?php
        
        ?>
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>