<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 03 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 03/11/2022
     */
    //establecemos la configuracion por defecto de la zona horaria
    date_default_timezone_set("Europe/Madrid");
    //formato Date
    setlocale(LC_ALL, "es_ES.utf8");
    $fecha = strftime("%A, %d de %B de %G %T");
    //fecha con DateTime
    $oFecha = new DateTime("now", new DateTimeZone("Europe/Madrid"));
    //fecha establecida 
    $oFechaDescAmerica = new DateTime("1492-10-12");

    
    $ndia = $oFecha->format(" j");
    $sFecha = $oFecha->format(" Y H:i:s");
    $sdia= diaEnLetra($oFecha);
    $smes= mesEnLetra($oFecha);
    print("STRFTIME La fecha actual es: $fecha <br/>");
    print("DATETIME La fecha actual es: $sdia,$ndia de $smes de $sFecha <br/>");
    $anyoDescAmerica = $oFechaDescAmerica->format('Y');
    $ndiaDescAmerica = $oFechaDescAmerica->format("j");
    $smesDescAmerica= mesEnLetra($oFechaDescAmerica);
    print("DATETIME La fecha del descubrimiento de america fue: $ndiaDescAmerica de $smesDescAmerica de $anyoDescAmerica ");

    function diaEnLetra($fecha) {
        $ndia = $fecha->format('N');
        $sdia = null;
        switch ($ndia) {
            case 1:
                $sdia = "Lunes";
                break;
            case 2:
                $sdia = "Martes";
                break;
            case 3:
                $sdia = "Miercoles";
                break;
            case 4:
                $sdia = "Jueves";
                break;
            case 5:
                $sdia = "Viernes";
                break;
            case 6:
                $sdia = "Sabado";
                break;
            case 7:
                $sdia = "Domingo";
                break;
            default:
                break;
        }
        return $sdia;
    }
    function mesEnLetra($fecha){
        $nmes = $fecha->format("n");
    switch ($nmes) {
        case 1:
            $smes = "enero";
            break;
        case 2:
            $smes = "febrero";
            break;
        case 3:
            $smes = "marzo";
            break;
        case 4:
            $smes = "abril";
            break;
        case 5:
            $smes = "mayo";
            break;
        case 6:
            $smes = "junio";
            break;
        case 7:
            $smes = "julio";
            break;
        case 8:
            $smes = "agosto";
            break;
        case 9:
            $smes = "septiembre";
            break;
        case 10:
            $smes = "octubre";
            break;
        case 11:
            $smes = "noviembre";
            break;
        case 12:
            $smes = "diciembre";
            break;
    }
    return $smes;
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



