<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="contact__body">

<section class="contact">
    <div>
        <form action="enviar_consulta.php" method="post"> <!-- el metodo POSTO conecta con BASE DE DATO -->
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="surname">Surname:</label>
            <input type="text" name="surname">

            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="number">Number</label>
            <input type="number" name="number">

            <label for="date">Date of Reserve</label>
            <input type="date" name="date">
            

            <label for="description">description:</label>
            <textarea cols="40" rows="10" name="description"></textarea>

            <input type="submit" value="Send">

            <?php
                if(isset($_GET['ok'])){
                    echo "<h3>Consulta enviada con exito</h3>";
                }
            ?>
        </form>
    </div>
</section>
</body>
</html>





