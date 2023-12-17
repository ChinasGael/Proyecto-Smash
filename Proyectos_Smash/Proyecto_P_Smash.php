<?php
    $servidor =  "localhost";
    $dbUsuario= "root";
    $dbpassword = "";
    $dbname = "ProyectoBase";
    $conn= mysqli_connect($servidor,$dbUsuario,$dbpassword,$dbname);

    if(isset($_POST['enviar'])){
        ifstrlen ($_POST['nombre'])>=1 &&
       strlen( $_POST['nombre']
        strlen($_POST['nickname'];
        strlen$edad = $_POST['edad'];
        strlen $email = $_POST['email'];
        strlen$nacionalidad = $_POST['nacionalidad'];
        strlen$telefono = $_POST['telefono'])




    }






     $nombre = $_POST['nombre'];
    $nickname = $_POST['nickname'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $nacionalidad = $_POST['nacionalidad'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO Usuario (nombre, nickname, edad, email, nacionalidad, telefono) VALUES ('$nombre', '$nickname', '$edad', '$email', '$nacionalidad', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . $conn->error;
    }


$conn->close();


$inserDatos="INSERT INTO username VALUES ('$nombre','$nickname','$edad','$email','$nacionalidad','$telefono','')";
$ejecutarInsert=mysqli_query($conn,$inserDatos);








?>