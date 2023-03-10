<html>
<head>
	<title>Bitacora de Diabetes</title>
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
	<h1 style="margin-top:30; margin-left:400">Registro de Datos de Diabetes</h1>
	<form style="margin-top:10; margin-left:400" action="registroBitacoraDiabetes.php" method="GET">
    Nombre de Paciente: <input type="text" id="nombrePaciente" name="nombrePaciente" size=40 style='margin-top:10; margin-left:10'>
    <br>
    <p style='margin-left:-2'>Tipo de Diabetes
    <select name="tipo" id="tipo" style='margin-left:42; margin-top:-5'>
        <option value="1">1</option>
        <option value="2">2</option>
    </select></p>
    <br>
    Fecha: <input type="date" id="fecha" name="fecha" style='margin-left:110; margin-top:-75'>
    <br>
    Glucometria: <input type="decimal" id="glucometria" name="glucometria" style='margin-left:70'>
    <br>
    Nivel de Insulina: <input type="decimal" id="insulina" name="insulina" style='margin-left:38'>
    <br>
    <button type="submit" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Enviar</button>
    <br>
    </form>
    <h1 style='margin-left:400; margin-top:15'>Bitacora de Diabetes</h1>
    <form onSubmit="mostrarDatosDiabetes.php" action="bitacoraDiabetes.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre" name="nombrePaciente" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" onSubmit="nombrePaciente" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarDatosDiabetes.php'; ?>
    <a href='modificarBitacoraDiabetes.php'><button style='margin-top:10; margin-left:380; background-color:lightblue; border-width:0'>Actualizar Bitacora de Diabetes</button></a>
</body>
</html>