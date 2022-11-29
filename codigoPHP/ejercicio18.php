<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 18 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
    </head>
    </head>
    <body>
        <header>
            <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor</h1>
            <div id="nav">
                <h2>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</h2>
            </div>
        </header>
        <?php
        /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 02/11/2022
     */
        $aTeatro=[[]];
        for ($iFila=0;$iFila<20;$iFila++){
            for($iColumna=0;$iColumna<15;$iColumna++){
                $aTeatro[$iFila][$iColumna]=" ";
            }
        }
        $aTeatro[0][0]="Luis";
        $aTeatro[19][14]="Alejandro";
        $aTeatro[10][10]="Ricardo";
        $aTeatro[6][8]="Josué";
        $aTeatro[9][11]="Manuel";
        reset($aTeatro);
        echo"<table>";
        do{
            echo '<tr><th>fila'. key($aTeatro).'</th>';
            $fila= current($aTeatro);
            do{
                echo '<td>'. current($fila).'</td>'; 
            } while (next($fila));
            echo '</tr>';
        }while (next($aTeatro));
        echo "</table>"
        ?>
        
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>
