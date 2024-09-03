<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li> <a href="./index.php"> HOME </li>
                <li> <a href="tienda.php"> TIENDA </li>
                <li> <a href="contacto.php"> Contacto </li>
            </ul>
        </nav>
    </header>

    <h1>Introduccion a PHP</h1>

    <!-- LOS ARCHIVOS PUEDEN SER 100% PHP O PUEDEN ESTAR INTERCALADOS -->

        <!-- EL DELIMITADOR NO SE MUESTRA EN EL NAVEGADOR, PORQUE SE EJECUTA DESDE EL LADO DEL SERVIDOR -->
    <?php /*<!-- DELIMITADOR PARA ESCRIBIR PHP,todo lo que se escriba aca dentro es PHP -->*/
    // Esto es un comentario de una linea, son anotaciones para el programador, no repercute en el usuario.
    # Esto es un comentario de una linea, son anotaciones para el programador, no repercute en el usuario.

    echo "hola mundo"; //con echo podemos imprimir,significa que luego aparece en el navegaor.

    echo "<h2>hola mundo</h2>"; //Tambien se puede escribir con etiquetas dentro de un string de la cadena.

    print "con print"; //Tambien se puede imprimir con print.

    //¬¬¬¬¬¬¬¬¬¬¬¬¬ VARIABLES ¬¬¬¬¬¬¬¬¬¬¬¬¬¬ //Pueden que cambien su valor a lo largo del flujo del programa.
                        // No se pueden poner espacios y caracteres especiales
        $nombre = "Programador Web Inicial";     //el nombre de la variable tiene que ser sifnificativo de lo que guarda.
                                        //Se puede cerrar con ; o : pero no se puden combinar, se debe usar una o la otra.
       
          $unidades_curso = 8; //el numero sin "" //Si la varible tiene dos palabras, se puede separar con guion, no con espacios.

        $aranceles = 10000.5; //numero decimal

        $fecha = '12/05/2024'; //guardado como un string

        $nombre_2 = "Programador Web intermedio";
        $unidades_curso_2 = 10;
        $aranceles_2 = 20000.5;
        $fecha_2 = '22/07/2024';

        $nombre_3 = "Programador Web Avanzado"; //PHP se queda con el ultimo valor que se escribio de una variable, y le coloca el mismo nombre a las demas "VARIABLE GLOBALES".
        $unidades_curso_3 = 15;                  //Para que no se renombren las variables con el ultimos valor escrito, se le cambia el nombre.
        $aranceles_3 = 30000.5;
        $fecha_3 = '10/09/2024';


    ?>  

      <!-- LOS ARCHIVOS PUEDEN SER 100% PHP O PUEDEN ESTAR INTERCALADOS -->
    
      <!-- Cuando APARECE un WARNING en el NAVEGADOR es porque no se coloco el MISMO NOMBRE de la VARIABLE que se QUISO IMPRIMIR -->
    
        <!-- La ventaja de tener guardada la informacion en variables,es que se pude operar con las mismas y agregar operaciones, por ej: Agregando operadores aritmeticos,de comparacion etc. -->
    
      <section class="cursos">
        <div class="curso1">
            <ul>
                <li> Curso: <?php echo $nombre; ?> </li> <!-- Cada vez que quieras imprimir algo en PHP se debe ABRIR EL DELIMITADOR -->
                <li> Unidades: <?php echo $unidades_curso; ?> </li>
                <li> Arancel: <?php echo $aranceles; ?></li>
                <li> Fecha: <?php echo $fecha; ?></li>
            </ul>
        </div>

        <div class="curso2">
            <ul>
                <li> Curso: <?php echo $nombre_2; ?> </li> <!-- Cada vez que quieras imprimir algo en PHP se debe ABRIR EL DELIMITADOR -->
                <li> Unidades: <?php echo $unidades_curso_2; ?> </li>
                <li> Arancel: <?php echo $aranceles_2; ?></li>
                <li> Fecha: <?php echo $fecha_2; ?></li>
            </ul>
        </div>

        <div class="curso3">
            <ul>
                <li> Curso: <?php echo $nombre_3; ?> </li> <!-- Cada vez que quieras imprimir algo en PHP se debe ABRIR EL DELIMITADOR -->
                <li> Unidades: <?php echo $unidades_curso_3; ?> </li>
                <li> Arancel: <?php echo $aranceles_3; ?></li>
                <li> Fecha: <?php echo $fecha_3; ?></li>
            </ul>
        </div>
        <?php
            $dolar = 1200;
            $unidad_totales = $unidades_curso + $unidades_curso_2 + $unidades_curso_3; //NO es la MEJOR practica TRABAJAR de esta forma la OPERACION
            $aranceles_totales = $aranceles + $aranceles_2 + $aranceles_3 ;          //SI vamos a estar trabajando con operaciones, lo ideal es GUARDALA EN UNA VARIABLE, no se recomienda ESTAR REPITIENDO LA VARIABLE cada ves que querramos usar una OPERACION.
            $arancel_dolar = $aranceles_totales / $dolar;
        ?>
        
        <div class="cursos_totales">
            <h3>TOTALES</h3>
            <ul>
                <li> Curso: <?php echo $nombre_3; ?> </li> <!-- Cada vez que quieras imprimir algo en PHP se debe ABRIR EL DELIMITADOR -->
                <li> Unidades: <?php echo $unidad_totales; ?> </li> <!-- Se puede imprimir la suma de la variable, PERO SE RECOMIENDA IMPRIMIR LA VARIABLE CON SU VALOR -->
                <li> Arancel: <?php echo $aranceles_totales; ?></li>
                <li> Arancel en Moneda Extranjera: <?php echo round($arancel_dolar); ?></li> <!-- echo round ES UNA FUNCION DE PHP QUE REDONDEA EL VALOR -->
            </ul>
        </div>
    </section>

<?php
#Las constantes no cambian durante el flujo del programa.
//¬¬¬¬¬¬¬¬¬¬¬¬¬ CONSTANTES ¬¬¬¬¬¬¬¬¬¬¬ //En PHP funcionan iguales que las variables, guardan el valor como las variables, se imprimen como las variables.

define("NOMBRE", "RODRIGO"); #Las constantes en PHP se definen con la palabra define y el nomre de la constante y el valor que se quiere guardar dentro de esa constante.
echo NOMBRE;  //STRING               #Se suele utilizar MAYUSCULAS en las CONSTANTES para diferenciarlas de las varibles.
echo "<br>";                 #Cuando imprimimos dentro de la constante NO UTILIZAMOS "" con el VALOR de la misma.
                            
define("PI", 3.14);         #Para definir la CONSTANTE de un Numero es la MISMA que para definir un nombre, pero el valor del numero va sin ""
echo PI;     //NUMERO               #Sirve para hacer operaciones, pero con PI el valor tendria que mantenerse fijo.
echo "<br>";

define("MAYOR_EDAD", true);  #Constante definida como BOOLEAN (verdadero o falso) true=1 verdadero /false=0 falso.
echo MAYOR_EDAD;


?>                          

<footer>
    <p>Derechos reservados 2024</p>
</footer>

</body>
</html>