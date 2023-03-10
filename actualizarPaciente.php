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

$sql = "UPDATE Paciente SET nombre='$nombre', correo='$correo', password='$password', fecha_de_nacimiento='$fechaNacimiento', padecimientos='$padecimientos' WHERE correo='$correo' AND password='$password'";
if(mysqli_query($conn,$sql)){
    echo "Actualizado correctamente";
}else{
    echo "Error al actualizar";
}
mysqli_close($conn);
?>