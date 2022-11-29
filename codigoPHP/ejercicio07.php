<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 07 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>7. Mostrar el nombre del fichero que se está ejecutando.</h2>
        </div>
    </header>
    <?php
    //muestra de la ruta y el nombre del fichero
    print $_SERVER['PHP_SELF'];
    print "<br/>";
    //muestra del nombre del fichero
    print basename($_SERVER["PHP_SELF"]);
    ?>
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>


