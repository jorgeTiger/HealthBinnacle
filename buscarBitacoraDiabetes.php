<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fecha = $_GET['fecha'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Diabetes WHERE nombre_paciente='$nombrePaciente' AND fecha LIKE '$fecha%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $nombrePaciente = $row['nombre_paciente'];
    echo "<form style='margin-top:10; margin-left:400' action='actualizarBitacoraDiabetes.php' method='GET'>
    <p style='margin-left:-2'>Tipo de Diabetes
    <select name='tipo' id='tipo' style='margin-left:42; margin-top:-5'>
        <option value='".$row['tipo']."'";
        if($row['tipo']) {
          echo "selected";
          echo ">".$row['tipo']."</option>";
          if($row['tipo']=="1"){
            echo "<option value='2'>2</option></select></p></br>";
          }else{
            echo "<option value='1'>1</option></select></p></br>";
          }
        }
    echo "Fecha de inicio: <input type='date' value='".$row["fecha"]."' id='fechaNueva' name='fechaNueva' style='margin-left:51; margin-top:-75'>
    <br>
    Glucometria: <input type='decimal' value='".$row["glucometria"]."' id='glucometria' name='glucometria' style='margin-left:70'>
    <br>
    Nivel de Insulina: <input type='decimal' value='".$row["insulina"]."' id='insulina' name='insulina' style='margin-left:37'>
    <br>
    <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Enviar</button>
    <br>
    </form>";
  }
}else{
    echo "<p style='margin-left:400; marginTop:10'>No hay datos a mostrar<p>";
}
mysqli_close($conn);
?>