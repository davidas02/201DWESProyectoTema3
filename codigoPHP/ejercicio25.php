<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tema 3 ejercicio 24 David Aparicio</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
        <link rel="icon" type="image/x-icon" href="../doc/img/favicon.ico"/>
        <meta author="David Aparicio Sir">
    </head>
</head>
<body>
    <header>
        <h1>Tema 3 Caracteristicas del Lenguaje PHP Desarrollo Web en Entorno Servidor </h1>
        <div id="nav">
            <h2>25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros</h2>
        </div>
    </header>
    <div class="container">
        <?php
        /**
         *  @author David Aparicio Sir
         *  @version 1.0
         *  @since 20/11/2022
         */
        require '../core/221024libreriaValidacionFormularios.php';
        $aErrores = ['alfanumericoOb' => null,
            'alfanumericoOp' => null,
            'alfabeticoOb' => null,
            'alfabeticoOp' => null,
            'enteroOb' => null,
            'enteroOp' => null,
            'floatOb' => null,
            'floatOp' => null,
            'emailOb' => null,
            'emailOp' => null,
            'urlOb' => null,
            'urlOp' => null,
            'fechaOb' => null,
            'fechaOp' => null,
            'dniOb' => null,
            'dniOp' => null,
            'cpOb' => null,
            'cpOp' => null,
            'passwordOb' => null,
            'passwordOp' => null,
            'telefonoOb' =>null,
            'telefonoOp'=>null,
            'radio'=>null,
            'checkbox'=>null,
            'lista'=>null
        ]; //Array de errores inicializado a null
        $aRespuestas = [
            'alfanumericoOb' => null,
            'alfanumericoOp' => null,
            'alfabeticoOb' => null,
            'alfabeticoOp' => null,
            'enteroOb' => null,
            'enteroOp' => null,
            'floatOb' => null,
            'floatOp' => null,
            'emailOb' => null,
            'emailOp' => null,
            'urlOb' => null,
            'urlOp' => null,
            'fechaOb' => null,
            'fechaOp' => null,
            'dniOb' => null,
            'dniOp' => null,
            'cpOb' => null,
            'cpOp' => null,
            'passwordOb' => null,
            'passwordOp' => null,
            'telefonoOb' =>null,
            'telefonoOp'=>null,
            'radio'=>null,
            'checkbox'=>null,
            'lista'=>null
        ]; //array de respuestas inicializado a null
        define('MAX',255);
        define('MIN',0);
        define('OBLIGATORIO',1);
        $entradaOK = true; //variable booleana para comprobar que la entrada sea correcta inicializada a true
        $aRespuestasLista=['opcion1','opcion2','opcion3'];
        if (isset($_POST['enviar'])) {
            $aErrores['alfanumericoOb']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOb'], MAX, MIN, OBLIGATORIO);
            $aErrores['alfanumericoOp']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOb'], MAX, MIN);
            $aErrores['alfabeticoOb']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOb'],MAX,MIN,OBLIGATORIO);
            $aErrores['alfabeticoOp']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOb'],MAX,MIN);
            $aErrores['enteroOb']= validacionFormularios::comprobarEntero($_REQUEST['enteroOb'],MAX, MIN, OBLIGATORIO);
            $aErrores['enteroOp']= validacionFormularios::comprobarEntero($_REQUEST['enteroOb'],MAX, MIN);
            $aErrores['floatOb']= validacionFormularios::comprobarFloat($_REQUEST['floatOb'],MAX, MIN, OBLIGATORIO);
            $aErrores['floatOp']= validacionFormularios::comprobarFloat($_REQUEST['floatOb'],MAX, MIN);
            $aErrores['emailOb']= validacionFormularios::validarEmail($_REQUEST['emailOb'],OBLIGATORIO);
            $aErrores['emailOp']= validacionFormularios::validarEmail($_REQUEST['emailOp']);
            $aErrores['urlOb']= validacionFormularios::validarURL($_REQUEST['urlOb'],OBLIGATORIO);
            $aErrores['urlOp']= validacionFormularios::validarURL($_REQUEST['urlOp']);
            $aErrores['fechaOb']= validacionFormularios::validarFecha($_REQUEST['fechaOb'], obligatorio: OBLIGATORIO);
            $aErrores['fechaOp']= validacionFormularios::validarFecha($_REQUEST['fechaOp']);
            $aErrores['dniOb']= validacionFormularios::validarDni($_REQUEST['dniOb'],OBLIGATORIO);
            $aErrores['dniOp']= validacionFormularios::validarDni($_REQUEST['dniOp']);
            $aErrores['passwordOb']= validacionFormularios::validarPassword($_REQUEST['passwordOb'],16,8,2,OBLIGATORIO);
            $aErrores['passwordOp']= validacionFormularios::validarEmail($_REQUEST['passwordOp']);
            $aErrores['lista']= validacionFormularios::validarElementoEnLista($_REQUEST['select'], $aRespuestasLista);
            /* Si en el array de errores encuentra un error la variable entradaOK pasa a un valor false */
            foreach ($aErrores as $key => $value) {
                if ($value != null) {
                    $entradaOK = false;
                    $_REQUEST[$key] = '';
                }
            }
            //si no se ha metido ningun dato la variable entradaOK será false
        } else {
            $entradaOK = false;
        }
        //si entradaOK es igual a true muestra lo siguiente
        if ($entradaOK) {
            
        } else {
            //si no muestra el siguiente fromulario
            ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <fieldset>
                    <legend>Formulario</legend> 
                    <label for="alfanumericoOb">Alfanumerico Obligatorio:
                        <input style="background-color:yellow;"  type="text" name="alfanumericoOb"  value='<?php echo $_REQUEST['alfanumericoOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['alfanumericoOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="alfanumericoOp">Alfanumerico Opcional:
                        <input style="background-color:orange;" type="text" name="alfanumericoOp"  value='<?php echo $_REQUEST['alfanumericoOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['alfanumericoOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="alfabeticoOb">Alfabetico Obligatorio:
                        <input style="background-color:yellow;" type="text" name="alfabeticoOb"  value='<?php echo $_REQUEST['alfabeticoOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['alfabeticoOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="alfabeticoOp">Alfanumerico Opcional:
                        <input style="background-color:orange;" type="text" name="alfabeticoOp"  value='<?php echo $_REQUEST['alfabeticoOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['alfabeticoOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="enteroOb">Entero Obligatorio:
                        <input style="background-color:yellow;" type="text" name="enteroOb"  value='<?php echo $_REQUEST['enteroOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['enteroOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="enteroOp">Entero Opcional:
                        <input style="background-color:orange;" type="text" name="enteroOp"  value='<?php echo $_REQUEST['enteroOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['enteroOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="floatOb">Float Obligatorio:
                        <input style="background-color:yellow;" type="text" name="floatOb"  value='<?php echo $_REQUEST['floatOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['floatOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="floatOp">Float Opcional:
                        <input style="background-color:orange;" type="text" name="floatOp"  value='<?php echo $_REQUEST['floatOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['floatOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="emailOb">Email Obligatorio:
                        <input style="background-color:yellow;" type="text" name="emailOb"  value='<?php echo $_REQUEST['emailOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['emailOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="emailOp">Email Opcional:
                        <input style="background-color:orange;" type="text" name="emailOp"  value='<?php echo $_REQUEST['emailOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['emailOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="urlOb">URL Obligatorio:
                        <input style="background-color:yellow;" type="text" name="urlOb"  value='<?php echo $_REQUEST['urlOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['urlOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="urlOp">URL Opcional:
                        <input style="background-color:orange;" type="text" name="urlOp"  value='<?php echo $_REQUEST['urlOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['urlOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="fechaOb">Fecha Obligatorio:
                        <input style="background-color:yellow;" type="date" name="fechaOb"  value='<?php echo $_REQUEST['fechaOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['fechaOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="fechaOp">Fecha Opcional:
                        <input style="background-color:orange;" type="date" name="fechaOp"  value='<?php echo $_REQUEST['fechaOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['fechaOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="dniOb">DNI Obligatorio:
                        <input style="background-color:yellow;" type="text" name="dniOb"  value='<?php echo $_REQUEST['dniOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['dniOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="dniOp">DNI Opcional:
                        <input style="background-color:orange;" type="text" name="dniOp"  value='<?php echo $_REQUEST['dniOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['dniOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="cpOb">Codigo Postal Obligatorio:
                        <input style="background-color:yellow;" type="text" name="cpOb"  value='<?php echo $_REQUEST['cpOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['cpOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="cpOp">Codigo Postal Opcional:
                        <input style="background-color:orange;" type="text" name="cpOp"  value='<?php echo $_REQUEST['cpOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['cpOp'] ?>  </a>
                    </label>
                    <br/>

                    <label for="passwordOb">Password Obligatorio:
                        <input style="background-color:yellow;" type="text" name="passwordOb"  value='<?php echo $_REQUEST['passwordOb'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['passwordOb'] ?>  </a>
                    </label>
                    <br/>
                    <label for="passwordOp">Password Opcional:
                        <input style="background-color:orange;" type="text" name="passwordOp"  value='<?php echo $_REQUEST['passwordOp'] ?? ''; ?>'/>
                        <a style=color:red;> <?php echo $aErrores['passwordOp'] ?>  </a>
                    </label>
                    <br/>
                    <label for="opcionR1">Opcion1
                        <input type="radio" name="radio" id="opcionR1" value="opcionR1"/>
                    </label>
                    <label for="opcionR2"> Opcion2
                        <input type="radio" name="radio" id="opcionR2" value="opcionR2"/>
                    </label>
                    <label for="opcionR3"> Opcion3
                        <input type="radio" name="radio" id="opcionR3" value="opcionR3"/>
                    </label>
                    <br/>
                    <label for="opcionCB1">Opcion1
                        <input type="checkbox" name="checkbox1" id="opcionCB1" value="opcionCB1"/>
                    </label>
                    <label for="opcionCB2"> Opcion2
                        <input type="checkbox" name="checkbox2" id="opcionCB2" value="opcionCB2"/>
                    </label>
                    <label for="opcionCB3"> Opcion3
                        <input type="checkbox" name="checkbox3" id="opcionCB3" value="opcionCB3"/>
                    </label>
                    <br/>
                    <label for="listaOpciones">
                        Seleccione una opcion
                        <select name="select" id="select">
                            <option id="opcionS1" value="opcion1">Opcion 1</option>
                            <option id="opcionS2" value="opcion2">Opcion 2</option>
                            <option id="opcionS3" value="opcion3">Opcion 3</option>
                        </select>
                    </label>
                    <br/>
                </fieldset>
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
        }
        ?>
    </div>
    <footer> 
        <a href="../../doc/CVDavidAparicioSir.pdf" target="blank"><img src="../doc/img/cv.png" alt="CV David Aparicio"/></a>
        <a href="../indexProyectoTema3.php"><img src="../doc/img/home.png" alt="HOME"/></a>
        <a href="https://www.github.com/davidas02" target="_blank"><img src="../doc/img/git.png" alt="github David Aparicio"/></a>
        <p>2022-2023 David Aparicio Sir &COPY; Todos los derechos reservados</p>
    </footer>
</body>
</html>
