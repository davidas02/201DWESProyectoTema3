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
                <h2>17 Inicializar un array (bidimensional con dos índices numéricos) 
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
     *  ultima actualizacion 04/11/2022
     */
        $aTeatro=[[]];
        for ($iFila=1;$iFila<=20;$iFila++){
            for($iColumna=1;$iColumna<=15;$iColumna++){
                $aTeatro[$iFila][$iColumna]=null;
            }
        }
        $aTeatro[1][1]="Luis";
        $aTeatro[20][15]="Alejandro";
        $aTeatro[10][10]="Ricardo";
        $aTeatro[6][8]="Josué";
        $aTeatro[9][11]="Manuel";
        print '<table>';
        print '<tr><th colspan=16>foreach</th></tr>';
                foreach($aTeatro as $aFila){
                    print("<tr>");
                        printf("<td>Pasillo %d</td>", $aFila);
                    foreach($aFila as $asiento){
                        print("<td>$asiento</td>");
                    }
                     print("</tr>");
                }
        print '<tr><th colspan=16>for</th></tr>';
        for ($index = 1; $index < count($aTeatro); $index++) {
             printf("<tr><td>Pasillo %d</td>",$index);
            for ($index1 = 1; $index1 <= count($aTeatro[1]); $index1++) {
                print("<td>".$aTeatro[$index][$index1]."</td>");
            }
            print'</tr>';
        }
        print '<tr><th colspan=16>while</th></tr>';
         reset($aTeatro);
         $fila=1;
         
         while ($fila<=20){
             $columna=1;
             printf("<tr><td>Pasillo %d</td>",$fila);
             while ($columna<=15){
                 printf("<td>%s</td>",$aTeatro[$fila][$columna]);
                 $columna++;
             }
             $fila++;
         }
            print"</table>"
        ?>
        
        <footer> 
            <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
            <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
            <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
            <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
        </footer>
    </body>
</html>
