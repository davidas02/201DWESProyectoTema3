<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 04 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
        <div id="nav">
            <h2>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h2>
        </div>
    </header>
    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 03/11/2022
     */
    ini_set("date.timezone", "Europe/Lisbon");
    $locale = "pt_PT.UTF-8";
    setlocale(LC_ALL, $locale);
    $fecha = strftime("%A, %d do %B do %G %T");
    $oFecha=new DateTime("now", new DateTimeZone("Europe/Lisbon"));
    print 'STRFTIME La fecha y hora local en Oporto es : ' . $fecha."<br/>";
    $ndia = $oFecha->format(" j");
    $sFecha = $oFecha->format(" Y H:i:s");
    $sdia= diaEnLetra($oFecha);
    $smes= mesEnLetra($oFecha);
    print("DATE  La fecha y hora local en Oporto es : $sdia, $ndia do $smes do $sFecha");
    /**
     * Funcion que recogiendo una fecha en DateTime la convierte en un dia de la semana en numerico
     * y a continuacion la convierte a dia de la semana en portugues
     * @param type $fecha fecha en formato DateTime
     * @return string dia de la semana en portugues
     */
    function diaEnLetra($fecha) {
        $ndia = $fecha->format('N');
        $sdia = null;
        switch ($ndia) {
            case 1:
                $sdia = "segunda";
                break;
            case 2:
                $sdia = "Terça";
                break;
            case 3:
                $sdia = "Quarta";
                break;
            case 4:
                $sdia = "Quinta";
                break;
            case 5:
                $sdia = "Sexta";
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
    /**
     * Funcion que recoge una fecha extrae el mes en formato numerico y lo convierte al portugues
     * @param type $fecha fecha en formato DateTime
     * @return string mes en portugues
     */
    function mesEnLetra($fecha){
        $nmes = $fecha->format("n");
    switch ($nmes) {
        case 1:
            $smes = "Janeiro";
            break;
        case 2:
            $smes = "Fevreiro";
            break;
        case 3:
            $smes = "Março";
            break;
        case 4:
            $smes = "Abril";
            break;
        case 5:
            $smes = "Maio";
            break;
        case 6:
            $smes = "Junho";
            break;
        case 7:
            $smes = "Julho";
            break;
        case 8:
            $smes = "Agosto";
            break;
        case 9:
            $smes = "Septembro";
            break;
        case 10:
            $smes = "Outubro";
            break;
        case 11:
            $smes = "Novembro";
            break;
        case 12:
            $smes = "Decembro";
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
