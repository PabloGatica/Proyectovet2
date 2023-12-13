<html>
	<head><script language="javascript"> 
var RelojID24 = null
var RelojEjecutandose24 = false 
function DetenerReloj24(){
    if(RelojEjecutandose24) 
        clearTimeout(RelojID24)
    RelojEjecutandose24 = false} 
function MostrarHora24(){
    var ahora = new Date()
    var horas = ahora.getHours()
    var minutos = ahora.getMinutes() 
    var segundos = ahora.getSeconds() 
    var ValorHora
    //establece las horas
if (horas < 10)
    ValorHora = "0" + horas
else
    ValorHora = "" + horas //establece los minutos
if (minutos < 10)
    ValorHora += ":0" + minutos
else
    ValorHora += ":" + minutos //establece los segundos
if (segundos < 10)
    ValorHora += ":0" + segundos
else
    ValorHora += ":" + segundos
document.reloj24.txtDigitos.value = ValorHora
//si se desea tener el reloj en la barra de estado, reemplazar la anterior por esta 
//window.status = ValorHora
RelojID24 = setTimeout("MostrarHora24()",1000) 
RelojEjecutandose24 = true
}
function IniciarReloj24 () {
    DetenerReloj24() 
    MostrarHora24()
} 
</script>
</head>
		<title>FORMULARIO</title>
	</head>
    <body onLoad="IniciarReloj24()">
        <form name="reloj24">
            <input type="text" name="txtDigitos" value="" size="8">
</form>
	<body bgcolor="#4284f5">
	<center>
		<H1>REGISTRO DE MASCOTAS</H1>
		<form action="" method="post" enctype="text">
			<table border=0>
				<tr>
					<td>Nombre:</td>
					<td><input type = "text" name = "nombre" value =""></td>
				</tr>
				<tr>
					<td>Tipo:</td>
					<td><input type = "text" name = "tipo" value =""></td>
				</tr>
				<tr>
					<td>Dueño:</td>
					<td><input type = "text" name = "dueño" value =""></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento:</td>
					<td><input type = "date" name = "fnac" value =""></td>
				</tr>
				<tr>
					<td>Fecha de adopcion:</td>
					<td><input type = "date" name = "fadop" value =""></td>
				</tr>
				<tr>
					<td>Lugar de adopcion:</td>
					<td><input type = "text" name = "ladop" value =""></td>
				</tr>
				<tr>
					<td>Raza:</td>
					<td><input type = "text" name = "raza" value =""></td>
				</tr>
				<tr>
					<td>Esterilizacion:</td>
					<td><input type = "date" name = "est" value =""></td>
				</tr>
				<tr>
					<td>Fecha ultimo celo:</td>
					<td><input type = "date" name = "fulce" value =""></td>
				</tr>
				<tr>
					<td>Fecha ultimo corte de uñas:</td>
					<td><input type = "date" name = "fcorte" value =""></td>
				</tr>
					<td></td>
					<td><input type="Submit" name="BotonRegistrar" value="Registrar"></td>
				</tr>
				
				
				
			</table>
		</form>
		<?php error_reporting(1);?>
		<?php
			if($_POST['BotonRegistrar']=="Registrar")
			{
				include("funciones.php");
				$cnn = Conectar();
				$nom = $_POST['nombre'];
				$tip = $_POST['tipo'];
				$due = $_POST['dueño'];
				$nac = $_POST['fnac'];
				$fado = $_POST['fadop'];
				$lado = $_POST['ladop'];
				$raz = $_POST['raza'];
				$est = $_POST['est'];
				$fce = $_POST['fulce'];
				$fco = $_POST['fcorte'];				
				
				$sql = "insert into mascotas (Nombre, Tipo, Dueño, Fecha_Nacimiento, Fecha_Adopcion, Lugar_Adopcion, Raza, Esterilizacion, Fecha_Celos, Corte_Uñas) values('$nom','$tip','$due','$nac','$fado','$lado','$raz','$est','$fce','$fco')";
				
				//echo sql;
				
				mysqli_query($cnn,$sql);
				
				echo"<script>alert('registro exitoso')</script>";
			}
		?>
		<a href="login.php">Volver</a>
	</center>
	</body>
</html>
