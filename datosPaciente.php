<html>
<head>
	<title>Perfil de Paciente</title>
	<style>
	* { font-family: Tahoma; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;}
	</style>
</head>
<body>
	<h1>Bitacora de Salud</h1>
	<a href="index.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="datosPaciente.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
	<a href="bitacoraDiabetes.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Diabetes</button></a>
	<a href="bitacoraHipertension.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Hipertension</button></a>
	<a href="bitacoraInsuficienciaRenal.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Insuficiencia Renal</button></a>
    <h1 style='margin-left:300; margin-top:30'>Datos del Perfil</h1>
    <form onSubmit="mostrarPaciente.php" action="datosPaciente.php">
    <input type="email" id="correo" placeholder="Ingrese su correo electronico" name="correo" size=40 style='margin-top:10; margin-left:290'>
    <input type="password" id="password" placeholder="Ingrese su password" name="password" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarPaciente.php'; ?>
    <a href='modificarPaciente.php'><button style='margin-top:10; margin-left:290; background-color:lightblue; border-width:0'>Actualizar Perfil</button></a>
</body>
</html>