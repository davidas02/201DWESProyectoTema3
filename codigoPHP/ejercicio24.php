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
            <h2>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</h2>
        </div>
    </header>

    <?php
    /**
     *  @author David Aparicio Sir
     *  @version 1.0
     *  ultima actualizacion 11/11/2022
     */
    require '../core/221024libreriaValidacionFormularios.php';
    $aErrores = ['dni' => null,
        'nombre' => null,
        'altura' => null,
        'dniOp' => null,
        'nombreOp' => null,
        'alturaOp' => null,
        'fecha'=>null,
        'fechaOp' => null]; //Array de errores inicializado a null
    $aRespuestas = ['dni' => null,
        'nombre' => null,
        'altura' => null,
        'dniOp' => null,
        'nombreOp' => null,
        'alturaOp' => null,
        'fecha'=>null,
        'fechaOp' => null,
        'nombreBl'=>null
        ];//array de respuestas inicializado a null
    $entradaOK = true; //variable booleana para comprobar que la entrada sea correcta inicializada a true
    if (isset($_POST['enviar'])) {
        //Validacion entrada
        $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], 1); //contenido de dni en el array de errores puede ser null o una cadena
        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 100, 0, 1);//contenido de nombre en el array de errores puede ser null o una cadena
        $aErrores['altura'] = validacionFormularios::comprobarEntero($_REQUEST['altura'], 300, 0, 1);//contenido de altura en el array de errores puede ser null o una cadena
        $aErrores['dniOp'] = validacionFormularios::validarDni($_REQUEST['dni'], 0); //contenido de dni Opcional en el array de errores puede ser null o una cadena
        $aErrores['nombreOp'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 100, 0, 0);//contenido de nombre opcional en el array de errores puede ser null o una cadena
        $aErrores['alturaOp'] = validacionFormularios::comprobarEntero($_REQUEST['altura'], 300, 0, 0);//contenido de altura opcional en el array de errores puede ser null o una cadena
        $aErrores['fecha']= validacionFormularios::validarFecha($_REQUEST['fecha'], obligatorio:1);//contenido de fecha obligatoria en el array de errores puede ser null o una cadena
        $aErrores['fecha']= validacionFormularios::validarFecha($_REQUEST['fechaOp']);//contenido de fecha opcional en el array de errores puede ser null o una cadena
        
        /* Si en el array de errores encuentra un error la variable entradaOK pasa a un valor false*/
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
    //si entradaOK es igual a true(Formulario rellenado correctamente) muestra lo siguiente
    if ($entradaOK) {
        $aRespuestas['dni'] = $_REQUEST['dni'];
        $aRespuestas['nombre'] = $_REQUEST['nombre'];
        $aRespuestas['altura'] = $_REQUEST['altura'];
        $aRespuestas['dniOp'] = $_REQUEST['dniOp'];
        $aRespuestas['nombreOp'] = $_REQUEST['nombreOp'];
        $aRespuestas['alturaOp'] = $_REQUEST['alturaOp'];
        $aRespuestas['fecha']=$_REQUEST['fecha'];
        $aRespuestas['fechaOp']=$_REQUEST['fechaOp'];
        $aRespuestas['nombreBl']=$_REQUEST['nombreBl'];
        $oFecha=new DateTime($aRespuestas['fecha']);
        $time=$oFecha->format(" j/m/Y");
        print "Su dni es $aRespuestas[dni]<br/>";
        print "Su nombre es $aRespuestas[nombre] <br/>";
        print "Su altura es de $aRespuestas[altura] cm<br/>";
        print "Su dni Opcional es $aRespuestas[dniOp]<br/>";
        print "Su nombre Opcional es $aRespuestas[nombreOp] <br/>";
        print "Su altura Opcional es de ". ($aRespuestas['alturaOp']??0) ."cm <br/>";
        print "Su fecha de nacimiento es ".$time  ."<br/>";
        print "Su fecha Opcional es ". $aRespuestas['fechaOp']."<br/>";
        print "Su nombre bloqueado es $aRespuestas[nombreBl] <br/>";
    } else {
        ?>
        <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
            <label for="dni">DNI:
                <input style="background-color:lightgoldenrodyellow;" type="text" name="dni" placeholder="Introduce su DNI" value='<?php echo $_REQUEST['dni'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['dni']?>  </a>
            </label>
            <br/>
            <label for="dni">DNI Opcional:
                <input  type="text" name="dniOp" placeholder="Introduce su DNI" value='<?php echo $_REQUEST['dniOp'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['dniOp']?>  </a>
            </label>
            
            <br/>
            <label for="nombre">Nombre:
                <input style="background-color:lightgoldenrodyellow;" type="text" name="nombre" placeholder="Introduce su Nombre" value='<?php echo $_REQUEST['nombre'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['nombre']?>  </a>
            </label>
            <br/>
            <label for="nombre">Nombre Opcional:
                <input  type="text" name="nombreOp" placeholder="Introduce su Nombre" value='<?php echo $_REQUEST['nombreOp'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['nombreOp']?>  </a>
            </label>
            <br/>
            <label for="nombre">Nombre Bloqueado:
                <input style="background-color: grey" type="text" name="nombreBl" placeholder="Introduce su Nombre" value='pepe' readonly="true"/>
                <a style=color:red;> <?php echo $aErrores['nombreOp']?>  </a>
            </label>
            <br/>
            <label for="altura">Altura:
                <input style="background-color:lightgoldenrodyellow;" type="text" name="altura" placeholder="Introduce su altura (en CM)" value='<?php echo $_REQUEST['altura'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['altura']?>  </a>
            </label>
            <br/>
            <label for="altura">Altura Opcional:
                <input  type="text" name="alturaOp" placeholder="Introduce su altura (en CM)" value='<?php echo $_REQUEST['alturaOp'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['alturaOp']?>  </a>
            </label>
            <br/>
            <label for="fecha">Fecha :
                <input style="background-color:lightgoldenrodyellow;" type="text" name="fecha" placeholder="DD-MM-AAAA" value='<?php echo $_REQUEST['fecha'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['altura']?>  </a>
            </label>
            <br/>
            <label for="fecha">Fecha Opcional:
                <input  type="text" name="fechaOp" placeholder="DD-MM-AAAA" value='<?php echo $_REQUEST['fechaOp'] ?? ''; ?>'/>
                <a style=color:red;> <?php echo $aErrores['alturaOp']?>  </a>
            </label>
            <br/>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
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
