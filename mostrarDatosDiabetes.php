<?php
$nombrePaciente = $_GET['nombrePaciente'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Diabetes WHERE nombre_paciente='$nombrePaciente'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  echo "<table cellpadding=2 style='font-size: 10pt; margin-left:400; margin-top:10; background-color:lightblue; text-align:center'><tr>
    <td width=\"25%\"><font face='Arial'><b>Tipo</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Fecha</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Glucometria</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Insulina</b></font></td>
    </tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["tipo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["fecha"] . "</font></td>"; 
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["glucometria"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["insulina"] . "</font></td></tr>";
  }
  echo "</table>";
}else{
    echo "<p style='margin-left:400; marginTop:10'>No hay datos a mostrar<p>";
}
mysqli_close($conn);
?>