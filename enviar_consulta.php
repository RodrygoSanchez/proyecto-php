<?php
$name_form = $_POST['name'];
$surname_form = $_POST['surname'];
$email_form = $_POST['email'];
$number_form = $_POST['number'];
$date_form = $_POST['date'];
$description_form = $_POST['description'];


//conexion a base de datos
$conexion = mysqli_connect('localhost', 'root','','programador_web_prueba')
or exit ("NO SE PUDO CONECTAR A BASE DE DATOS");

mysqli_query($conexion, "INSERT INTO consultas VALUES
(DEFAULT, '$name_form','$surname_form','$email_form','$number_form','$date_form','$description_form')");

mysqli_close($conexion);

header('Location:contacto.php?ok');