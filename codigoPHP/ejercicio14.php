<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 14 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
            <div id="nav">
                <h2>14. Comprobar las librerías que estás utilizando en tu 
                    entorno de desarrollo y explotación. Crear tu propia 
                    librería de funciones y estudiar la forma de usarla en el 
                    entorno de desarrollo y en el de explotación.</h2>
            </div>
        </header>
        <?php
        require_once '../core/libreriaCalculadora.php';
        /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 04/11/2022
     */
        $iv1=1;
        $iv2=1;
        //usamos la funcion sumar de la libreriaCalculadora para sumar las 2 variables anteriores
        print "Suma $iv1+$iv2=".sumar($iv1,$iv2)."<br/>";
        //usamos la funcion restar de la libreriaCalculadora para restar las 2 variables anteriores
        print "Resta $iv1-$iv2=".restar($iv1,$iv2)."<br/>";
        //usamos la funcion multiplicar de la libreriaCalculadora para multiplicar las 2 variables anteriores
        print "Multiplicar $iv1*$iv2=". multiplicar($iv1, $iv2)."<br/>";
        //usamos la funcion dividir de la libreriaCalculadora para dividir las 2 variables anteriores
        print "Division $iv1/$iv2=". dividir($iv1, $iv2)."<br/>";
        //usamos la funcion potenciar de la libreriaCalculadora para hacr la potencia de la 1º variable elevada a la 2º variable
        print "Exponer $iv1**$iv2=". potenciar($iv1, $iv2)."<br/>";
        //usamos la funcion modulo de la libreriaCalculadora para hallar el resto de la division entre la 1º variable y la 2º variable
        print "Modulo $iv1%$iv2=". modulo($iv1, $iv2)."<br/>";
        ?>
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>