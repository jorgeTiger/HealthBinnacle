<html>
<head>
	<title>Actualizacion de Perfil</title>
	<style>
	* { font-family: Tahoma; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10}
	</style>
    <h1>Bitacora de Salud</h1>
	<a href="datosPaciente.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Perfil de Paciente</h1>
  <form onSubmit="buscarPaciente.php" action="modificarPaciente.php">
    <input type="email" id="correo" placeholder="Ingrese su correo electronico" name="correo" size=40 style='margin-top:10; margin-left:390'>
    <input type="password" id="password" placeholder="Ingrese su password" name="password" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('buscarPaciente.php'); ?>
</body>
</html>