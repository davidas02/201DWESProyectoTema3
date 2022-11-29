<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 05 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 03/11/2022
     */
    $fecha = new DateTime("now");
    //convertimos la fecha actual a timestamp
    print date_timestamp_get($fecha);
    ?>
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>
