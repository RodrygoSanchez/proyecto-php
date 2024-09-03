<?php

//ARRAY en PHP- PERMITE GUARDAR MAYOR CANTIDAD DE DATOS
//los bucles permiter recorrer los arrays

//array INDEXADO (esta sujeto a un indice que se pisa con tablas de 6, el 0 es el primer valor)

$frutas = array ("manzana", "uvas", "pera",);//matriz

echo $frutas [1];

//para saber toda la info que contiene el array se puede hacer un print R
echo "<pre>";
print_r($frutas);
echo "</pre>";

//array ASOCIATIVO esta asociado a una clave que le damos nosotros
//siempre vamos a tener, clavevalor y vamos a poder asosociar esa clave a un valor

$personas = array (
    "nombre" => "ramon",
    "edad"   => 35, //los numeros van sin ""
    "apellido" => "morgan"
);

echo $personas ["nombre"]; //De esta forma solo imprime un solo valor del array

echo "<pre>";
print_r($personas);
echo "</pre>";

//ARRAY multidimensional 
$grupo = array(
array ("nombre" => "lewis", "apellido" => "hamilton", "edad" => 38),
array ("nombre" => "george", "apellido" => "russel", "edad" => 25),
array ("nombre" => "daniel", "apellido" => "ricciardo", "edad" => 34),
array ("nombre" => "fernando", "apellido" => "alonso", "edad" => 40),
);

echo "array multidimensional (grupo)";
echo "<pre>";
print_r($grupo);
echo "</pre>";

//el FOREACH es un tipo especifico de FOR.
        //Se recorre el array frutas y cada uno de sus elementos en fruta
foreach ($frutas as $fruta){//en general primero se usa el plural en el array y luego singular en sus elementos.
    echo $fruta . "<br>"; //con este echo, imprime toda la informacion que esta en el elemento fruta, se puede hacer con cualquier tipo de array que tenga.
}


//FOREACH para el ARRAY MULTIDIMENSIONAL

foreach ($grupo as $persona){ //con este foreach se ingresa al grupo
        //persona es el elemento del array grupo
    foreach ($persona as $clave => $valor){//este foreach es para encontrar  los valores de los elementos persona
        echo $clave . " : " .$valor . "<br>";
    }  
    echo "<br>";
}


/* ¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬ ESTRUCTURAS DE CONTROL ¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬ */
//SELECTIVAS 

//IF 
$numero = 15;
if ($numero >20){
    echo "es mayor a 20";
} else { "es menor a 20";
}

//ELSEIF
if ($numero >20){
    echo "es mayor a 20";
} elseif($numero = 20){
    echo "es menor a 20";
}

else { "es menor a 20";
}

//SWITCH (Son casos determinados)

$postre = "";
switch ($postre){
    case "chocotorta":
        echo "hoy tenemos chocotorta";
        break;
    case "flan":
        echo "hoy tenemos flan";
        break;
    case "budin":
        echo "hoy tenemos budin de pan";
         break;

    default:    //si no colocamos las palabras de los casos y colocamos otra, aparece el default
        echo "hoy tenemos medialunas";
}

//REPETITIVAS repiten una accion hasta que se le indique lo contrario.




//$fruta = "manzana"; //variable guardado con 1 solo valor, si necesitamos guardar mas de un valor, utilizamos una estructura ARRAY.
?>


