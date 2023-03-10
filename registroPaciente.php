<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$password = $_GET['password'];
$fechaNacimiento = $_GET['fechaNacimiento'];
$padecimientos = $_GET['padecimientos'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Paciente (nombre,correo,password,fecha_de_nacimiento,padecimientos) VALUES('$nombre','$correo','$password','$fechaNacimiento','$padecimientos')";
if(mysqli_query($conn,$sql)){
    echo "Captura de datos correcta";
}else{
    echo "Error en la captura";
}
mysqli_close($conn);
?>