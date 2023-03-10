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
    echo "<table cellpadding=2 style='font-size: 10pt; margin-left:300; margin-top:10; background-color:lightblue; text-align:center'><tr>
    <td width=\"25%\"><font face='Arial'><b>Nombre</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Correo</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Fecha de Nacimiento</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Padecimientos</b></font></td></tr>";
    if($row = mysqli_fetch_assoc($result)){
      echo "<td width=\"25%\"><font face=\"Arial\">".$row['nombre']. "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" .$row['correo']. "</font></td>"; 
      echo "<td width=\"25%\"><font face=\"Arial\">" .$row['fecha_de_nacimiento']. "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" .$row['padecimientos']. "</font></td></tr>";
      echo "</table>";
    }
}else{
    echo "<p style='margin-left:300; marginTop:10'>No hay datos a mostrar<p>";
}
mysqli_close($conn);
?>