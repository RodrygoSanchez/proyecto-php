<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li> <a href="./index.php"> HOME </li>
                <li> <a href="tienda.php"> TIENDA </li>
                <li> <a href="contacto.php"> CONTACTO </li>
            </ul>
        </nav>
    </header>

    <section class="tienda_contenido">
        <h2> Productos </h2>
        <ul> <li><a href="tienda.php?producto=ct"> Chocotorta</a></li></ul> <!-- variable get producto(es el nombre) ct (es el valor que se le indico) -->
        <ul> <li><a href="tienda.php?producto=fl"> Flan</a></li></ul> <!-- variable get producto(es el nombre) ct (es el valor que se le indico) -->
        <ul> <li><a href="tienda.php?producto=bd"> Budin de Pan</a></li></ul> <!-- variable get producto(es el nombre) ct (es el valor que se le indico) -->
    </section>
<!-- utilizando el IF, tomamos el valor del producto, que pasa por get. Evaluamos ese valor y dependiendo de lo que nos de, vamos a mostrar una informacion u otra. -->

    <?php
        //isset determina si una variable fue definida previamente y no es null.
    if (isset($_GET['producto'])){      //se evalua si el usuario seleccionio get.
        switch ($_GET['producto']){ //ya sabemos lo que selecciono, y dependiendo lo que selecciono vamos a demostrar un caso.
            case 'ct':  //definimos las variables y no mostramos info con el echos
                $nombre = "chocotorta";
                $ingredientes = "dulce de leche, queso crema, galletas";
                $precio = "3000";
                break; //palabra reservada para cortar el caso y que no aparezcan todos los casos juntos. 
            case 'fl':
                $nombre = "flan";
                $ingredientes = "dulce de leche, caramelo, azucar ";
                $precio = "4500";
                break;
            case 'bd':
                $nombre = "budin de pan";
                $ingredientes = "pan, caramelo, leche";
                $precio = "2500";
                break;
        }
     //la info de los casos solo fue guardada en variables, pero no aparecera en el servidor si no es renderizada.
    //para renderizar esta info, se tiene que hacer una estructura html.
    ?>

    <div class="producto_descripcion">
        <h3> <?php echo $nombre; ?></h3>
        <p> <?php echo $precio; ?></p>
    </div>
<?php } ?> <!-- esta es la llave del ISSET, se debe colocar despues que se muestra la informacion para que no lo reconosca como null -->
            <!-- Tambien de este modo se debe volver a abrir PHP y la llave de ISSET debe quedar dentro del mismo -->
        <!--De esta forma, no genera NULL. Porque chequea que haya seleccionado un case y entra al correspondiente -->
</body>
</html>