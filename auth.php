<?php
$correo = $_GET['correo'];
$password = $_GET['password'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "SELECT * FROM Paciente WHERE correo='$correo' AND password='$password'";
$result = mysqli_query($conn,$sql);
$datos = array();
if(mysqli_num_rows($result) > 0){
    if($row = mysqli_fetch_assoc($result)){
        $datos[] = array('Nombre'=>$row['nombre'],'Correo'=>$row['correo'],'Password'=>$row['password'],'Fecha Nacimiento'=>$row['fecha_de_nacimiento'],'Padecimientos'=>$row['padecimientos']);
    }else{
      echo "Usuario no encontrado\n";
    }
}else{
    echo "No hay datos a mostrar\n";
}
mysqli_close($conn);
$salida = json_encode($datos);
echo $salida;
?>