<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 01 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>Ejercicio 1. Inicializar variables de los distintos 
                tipos de datos básicos(string, int, float, bool) 
                y mostrar los datos por pantalla (echo, print, printf, 
                print_r, var_dump).</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 03/11/2022
     */
    /*
     * ejercicio que muestra 4 variables cada una con un tipo de dato basico(texto,real,entero o booleano )extra mustra de una constante
     */
    $texto = 'Hola Mundo'; //variable de tipo string(tipo texto)
    $entero = 25; //variable de tipo int(tipo entero)
    $real = 25.5; //variable de tipo float(tipo real)
    $booleano = true; //variable de tipo boolean(tipo booleano)
    define("CONSTANTE", "Constante"); //constante de tipo texto
    //muestra por pantalla con el metodo echo
    echo 'echo' . "<br/>";

    echo "La variable \$texto tiene un valor de '$texto' y es de tipo " . gettype($texto) . "<br/>";

    echo "La variable \$entero tiene un valor de '$entero' y es de tipo " . gettype($entero) . "<br/>";

    echo "La variable \$real tiene un valor de '$real' y es de tipo " . gettype($real) . "<br/>";

    echo "La variable \$booleano tiene un valor de '$booleano' y es de tipo " . gettype($booleano) . "<br/>";

    echo "La variable \$CONSTANTE tiene un valor de " . CONSTANTE . " y es de tipo " . gettype(CONSTANTE) . "<br/>";

    //mustra por pantalla con el metodo print
    print 'print' . "<br/>";

    print "La variable \$texto tiene un valor de '$texto' y es de tipo " . gettype($texto) . "<br/>";

    print "La variable \$entero tiene un valor de '$entero' y es de tipo " . gettype($entero) . "<br/>";

    print "La variable \$real tiene un valor de '$real' y es de tipo " . gettype($real) . "<br/>";

    print "La variable \$booleano tiene un valor de '$booleano' y es de tipo " . gettype($booleano) . "<br/>";

    print "La variable \$CONSTANTE tiene un valor de " . CONSTANTE . " y es de tipo " . gettype(CONSTANTE) . "<br/>";

    //muestra por pantalla con el metodo printf (print con formato)
    printf('printf' . "<br/>");

    printf("La variable \$texto tiene un valor de '$texto' y es de tipo " . gettype($texto)) . "<br/>";

    printf("La variable \$entero tiene un valor de '$entero' y es de tipo " . gettype($entero)) . "<br/>";

    printf("La variable \$real tiene un valor de '$real' y es de tipo " . gettype($real)) . "<br/>";

    printf("La variable \$booleano tiene un valor de '$booleano' y es de tipo " . gettype($booleano)) . "<br/>";

    printf("La variable \$CONSTANTE tiene un valor de " . CONSTANTE . " y es de tipo " . gettype(CONSTANTE)) . "<br/>";

    //muestra por pantalla con el metodo print_r
    print_r("print_r" . "<br/>");

    print_r("La variable \$texto tiene un valor de '$texto' y es de tipo " . gettype($texto) . "<br/>");

    print_r("La variable \$entero tiene un valor de '$entero' y es de tipo " . gettype($entero) . "<br/>");

    print_r("La variable \$real tiene un valor de '$real' y es de tipo " . gettype($real) . "<br/>");

    print_r("La variable \$booleano tiene un valor de '$booleano' y es de tipo " . gettype($booleano) . "<br/>");

    print_r("La variable \$CONSTANTE tiene un valor de " . CONSTANTE . " y es de tipo " . gettype(CONSTANTE) . "<br/>");
    //muestra por pantalla con el metodo var_dump
    echo'var_dump' . "<br/>";

    var_dump($texto);
    echo "<br/>";
    var_dump($entero);
    echo "<br/>";
    var_dump($real);
    echo "<br/>";
    var_dump($booleano);
    echo "<br/>";
    var_dump(CONSTANTE);
    ?>
    <footer> 
        <a href="../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>

