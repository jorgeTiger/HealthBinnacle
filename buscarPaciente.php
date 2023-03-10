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
if(mysqli_num_rows($result) > 0){
    if($row = mysqli_fetch_assoc($result)){
        echo "<form style='margin-top:10; margin-left:400' action='actualizarPaciente.php' method='GET'>
        Nombre: <input type='text' id='nombre' value='".$row['nombre']."' name='nombre' size=40 style='margin-left:146'>
        <br>
        Correo electronico: <input type='email' value='".$row['correo']."' id='correo' size=30 name='correo' style='margin-left:73'>
        <br>
        Password: <input type='password' id='password' value='".$row['password']."' size=20 name='password' style='margin-left:135'>
        <br>
        Fecha de nacimiento: <input type='date' id='fechaNacimiento' value='".$row['fecha_de_nacimiento']."' min='1900-01-01' max='2000-12-31' name='fechaNacimiento' style='margin-left:56'>
        <br>
        Padecimientos presentados: <input type='text' id='padecimientos' value='".$row['padecimientos']."' name='padecimientos' size=50 style='margin-left:10'>
        <br>
        <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
        <br>
        </form>";
    }else{
      echo "<p style='margin-left:400'>Usuario no encontrado</p>";
    }
}else{
    echo "<p style='margin-left:400; marginTop:10'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>