<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 17 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>Ejercicio 17 Inicializar un array (bidimensional con dos índices numéricos) 
                donde almacenamos el nombre de las personas que tienen reservado el asiento en 
                un teatro de 20 filas y 15 asientos por fila.(Inicializamos el array ocupando 
                únicamente 5 asientos).Recorrer el array con distintas técnicas 
                (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila 
                y las personas que lo ocupan.</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 11/11/2022
     */
    //array con los dias de la semana y el sueldo de la semana
    $aSueldoSemana = ["lunes" => 20,
        "martes" => 20,
        "miercoles" => 20,
        "jueves" => 20,
        "viernes" => 20,
        "sabado" => 0,
        "domingo" => 0];
    reset($aSueldoSemana);
    while (is_numeric(current($aSueldoSemana))) {
        print "El " . key($aSueldoSemana) . " Has ganado " . current($aSueldoSemana) . "€ <br/>";
        next($aSueldoSemana);
    }
    echo 'El sueldo total en la semana es: '. array_sum($aSueldoSemana);
    ?>
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>


