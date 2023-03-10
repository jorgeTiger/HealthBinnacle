<html>
<head>
	<title>Actualizacion de Bitacora de Diabetes</title>
	<style>
	* { font-family: Tahoma; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10}
	</style>
    <h1>Bitacora de Salud</h1>
	<a href="bitacoraDiabetes.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Bitacora de Diabetes</h1>
  <form onSubmit="buscarBitacoraDiabetes.php" action="modificarBitacoraDiabetes.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre completo" name="nombrePaciente" size=40 style='margin-top:10; margin-left:390'>
    <input type="text" id="fecha" placeholder="Fecha(AAAA-MM-DD)" size=15 name="fecha" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('buscarBitacoraDiabetes.php'); ?>
</body>
</html>