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
		<H1>REGISTRO DE USUARIOS</H1>
		<form action="" method="post" enctype="text">
			<table border=0>
				<tr>
					<td>Rut:</td>
					<td><input type = "text" name = "rut" value =""></td>
				</tr>
				<tr>
					<td>Nombres:</td>
					<td><input type = "text" name = "nombres" value =""></td>
				</tr>
				<tr>
					<td>Apellidos:</td>
					<td><input type = "text" name = "apellidos" value =""></td>
				</tr>
				<tr>
					<td>Direccion:</td>
					<td><input type = "text" name = "dirc" value =""></td>
				</tr>
				<tr>
					<td>Sexo:</td>
					<td>
						<select name="SelSexo">
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fono:</td>
					<td><input type = "text" name = "fono" value =""></td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td><input type = "password" name = "pass" value= "" maxLenght = "15"></td>
				<tr>
					<td></td>
					<td><input type="Submit" name="BotonRegistrar" value="Registrar"></td>
				</tr>
				
				<tr>
			</table>
		</form>
		<?php error_reporting(0);?>
		<?php
			if($_POST['BotonRegistrar']=="Registrar")
			{
				include("funciones.php");
				$cnn = Conectar();
				$rut = $_POST['rut'];
				$nom = $_POST['nombres'];
				$ape = $_POST['apellidos'];
				$dir = $_POST['dirc'];
				$sex = $_POST['SelSexo'];
				$fon = $_POST['fono'];
				$pas = $_POST['pass'];				
				
				$sql = "insert into usuarios values('$rut','$nom','$ape','$dir','$sex','$fon','$pas')";
				
				//echo sql;
				
				mysqli_query($cnn,$sql);
				
				echo"<script>alert('registro exitoso')</script>";
			}
		?>
		<a href="login.php">Volver</a>
	</center>
	</body>
</html>
