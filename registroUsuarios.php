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
<link rel="stylesheet" href="css/styleform.css">
<div>
	<body>
    <div class="container">
        <div class="header">
            <h1>REGISTRO DE USUARIOS</h1>
        </div>
        <form action="procesar_registro.php" method="post" id="loginform">
            <div class="form-group">
                <label for="rut">Rut:</label>
                <input type="text" name="rut" id="rut" placeholder="ej: 11.111.111-1" required>
            </div>
            <!-- Agrega más campos para nombres, apellidos, dirección, etc. -->
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" name="nombres" id="nombres" placeholder="ej: Juan Alberto" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="ej: Perez Diaz" required>
            </div>
            <!-- Otros campos del formulario -->
            <div class="form-group">
                <label for="SelSexo">Sexo:</label>
                <select name="SelSexo" id="SelSexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fono">Fono:</label>
                <input type="text" name="fono" id="fono" placeholder="ej: 999999999" required>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <div class="form-group2">
                <input type="Submit" name="BotonRegistrar" value="Registrar">
            </div>
        </form>
        <a href="index.php">Volver</a>
    </div>
	</div>
</body>
</html>
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
				
				$sql = "insert into usuarios values('$rut','$nom','$ape','$dir','$fon','$pas')";
				
				//echo sql;
				
				mysqli_query($cnn,$sql);
				
				echo"<script>alert('registro exitoso')</script>";
			}
		?>
	</center>
	</body>
</html>
