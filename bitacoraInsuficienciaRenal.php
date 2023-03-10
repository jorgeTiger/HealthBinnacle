<html>
<head>
	<title>Bitacora de Insuficiencia Renal</title>
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
	<h1 style="margin-top:30; margin-left:400">Registro de Bitacora de Insuficiencia Renal</h1>
	<form style="margin-top:10; margin-left:400" action="registroBitacoraInsuficienciaRenal.php" method="GET">
    Nombre de Paciente: <input type="text" id="nombrePaciente" name="nombrePaciente" size=40 style='margin-top:10; margin-left:43'>
    <br>
    Ultra Filtracion (UF): <input type="number" step="any" id="ultraFiltracion" name="ultraFiltracion" style='margin-left:48'>
    <br>
    Cantidad Orina (en Litros): <input type="number" step="any" id="cantidadOrina" name="cantidadOrina" style='margin-left:4'>
    <br>
    Glucometria: <input type="number" step="any" name="glucometria" id="glucometria" style='margin-left:102'>
    <br>
    Presion Arterial Sistolica: <input type="number" step="any" id="presionArterialSistolica" name="presionArterialSistolica" style='margin-left:18'>
    <br>
    Presion Arterial Diastolica: <input type="number" step="any" id="presionArterialDiastolica" name="presionArterialDiastolica" style='margin-left:8'>
    <br>
    Fecha: <input type="date" id="fecha" name="fecha" style='margin-left:147; margin-top:10'>
    <br>
    <button type="submit" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Enviar</button>
    <br>
    </form>
    <h2 style="margin-left:400">Bitácora de Insuficiencia Renal</h2>
    <form onSubmit="mostrarDatosInsuficienciaRenal.php" action="bitacoraInsuficienciaRenal.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre" name="nombrePaciente" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" onSubmit="nombrePaciente" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarDatosInsuficienciaRenal.php'; ?>
    <a href='modificarBitacoraInsuficienciaRenal.php'><button style='margin-top:10; margin-left:390; background-color:lightblue; border-width:0'>Actualizar Bitacora de Insuficiencia Renal</button></a>
</body>
</html>