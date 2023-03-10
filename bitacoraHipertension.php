<html>
<head>
	<title>Bitacora de Hipertension</title>
	<style>
	* { font-family: Tahoma; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;}
	</style>
</head>
<body>
	<h1>Bitacora de Salud</h1>
	<a href="index.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="datosPaciente.php?nombre="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
	<a href="bitacoraDiabetes.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Diabetes</button></a>
	<a href="bitacoraHipertension.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Hipertension</button></a>
	<a href="bitacoraInsuficienciaRenal.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Bitacora de Insuficiencia Renal</button></a>
	<h1 style="margin-top:30; margin-left:400">Registro de Bitacora de Hipertension</h1>
	<form style="margin-top:10; margin-left:400" action="registroBitacoraHipertension.php" method="GET">
    Nombre de Paciente: <input type="text" id="nombrePaciente" name="nombrePaciente" size=40 style='margin-top:10; margin-left:47'>
    <br>
    Fecha: <input type="date" id="fecha" name="fecha" style='margin-left:148; margin-top:10'>
    <br>
    Presion Arterial Sistolica: <input type="number" step="any" id="presionArterialSistolica" name="presionArterialSistolica" style='margin-left:22'>
    <br>
    Presion Arterial Diastolica: <input type="number" step="any" id="presionArterialDiastolica" name="presionArterialDiastolica" style='margin-left:12'>
    <br>
    <button type="submit" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Enviar</button>
    <br>
    </form>
    <h2 style="margin-left:400">Bitácora de Hipertensión</h2>
    <form onSubmit="mostrarDatosHipertension.php" action="bitacoraHipertension.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre" name="nombrePaciente" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" onSubmit="nombrePaciente" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarDatosHipertension.php'; ?>
    <a href='modificarBitacoraHipertension.php'><button style='margin-top:15; margin-left:390; background-color:lightblue; border-width:0'>Actualizar Bitacora de Hipertension</button></a>
</body>
</html>