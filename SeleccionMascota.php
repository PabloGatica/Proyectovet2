<html>
	<head>
			<script language="javascript">
          	var RelojID24 = null;
            var RelojEjecutandose24 = false;
            function DetenerReloj24() {
                if (RelojEjecutandose24) {
                    clearTimeout(RelojID24);
                    RelojEjecutandose24 = false;
                }
            }
            function MostrarHora24() {
                var ahora = new Date();
                var horas = ahora.getHours();
                var minutos = ahora.getMinutes();
                var segundos = ahora.getSeconds();
                var ValorHora;
                if (horas < 10)
                    ValorHora = "0" + horas;
                else
                    ValorHora = "" + horas;
                if (minutos < 10)
                    ValorHora += ":0" + minutos;
                else
                    ValorHora += ":" + minutos;
                if (segundos < 10)
                    ValorHora += ":0" + segundos;
                else
                    ValorHora += ":" + segundos;
                document.reloj24.txtDigitos.value = ValorHora;
                RelojID24 = setTimeout(MostrarHora24, 1000);
                RelojEjecutandose24 = true;
            }
            function IniciarReloj24() {
                DetenerReloj24();
                MostrarHora24();
            }
            window.onload = function() {
            IniciarReloj24();
            };
        </script>
        <script>
            function ValidaSoloNumeros(){
                if((event.keyCode <48) || (event.keyCode >57))
                    event.returnValue = false;
            }
            function ValidaSoloLetras(){
                if((event.keyCode !=32) && (event.keyCode <65) || (event.keyCode >90) && (event.keyCode<97) || (event.keyCode>122))
                    event.returnValue = false;
            }
        </script>
	</head>
    <body onLoad="IniciarReloj24()">
        <form name="reloj24">
            <input type="text" name="txtDigitos" style="border-color:transparent; text-align:right" value="" size="6">
            <table border=1>
            <?php
            date_default_timezone_set('America/Santiago');
            	$vaFecha =date('d - m - Y');
            ?>
    </table>
        </form>
    <head>
        <title>SISTEMA CONTROL</title>
    </head>

    <body>
    		<style>
body {
  background-image: url('SCA.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
        <center>
		<H1>Selecciones su mascota</H1>
		<form action="" method="post">
			<?php include("funciones.php");
			$cnn = Conectar();?>
			<table border=0>
					<td>Seleccion:</td>
					<td>
						<?php
						$sql = "select Nombre from mascotas";
						$result = mysqli_query($cnn,$sql);
						?>
							<select name="Selpet">
								<?php 
								while($row = mysqli_fetch_array($result)){
									echo'<option>'.$row["Nombre"];}
						?>
							</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="Submit" name="btnpet" value="Seleccionar"></td>
				</tr>
				<tr>
		<?php error_reporting(1);?>
		<tr>
					<td></td>
					<td><input type="submit" name="BotonEliminar" value="Eliminar"></td>
				</tr>
				<?php
			if($_POST['BotonEliminar']=="Eliminar")
			{
				$selpet = $_POST['Selpet'];
				
				$sql = "delete from mascotas where Nombre = '$selpet'";
				
				
				mysqli_query($cnn,$sql);
				
				echo"<script>alert('Registro eliminado')</script>";
			}
		?>
		<?php
			if($_POST['btnpet']=="Seleccionar")
			{
				$selpet = $_POST['Selpet'];
				$rs = mysqli_query($cnn, "select * from mascotas where nombre = '$selpet'");
					 if($row = mysqli_fetch_array($rs)){
						$Nombre						= $row[1];
						$Tipo 						= $row[2];
						$Dueño 						= $row[3];
						$FechaNacimiento			= $row[4];
						$FechaAdopcion				= $row[5];
						$LugarAdopcion				= $row[6];
						$Raza						= $row[7];
						$Esterilizacion				= $row[12];
						$FechaCelos					= $row[13];
						$CorteUñas					= $row[14];
	
					 }else{
						echo "<script>alert('No existen datos con ese rut')</script>";
					 }
			   }
			?>	
			<br>
			<br>
			<table border=1>
					<tr>
						<td>Nombres Alumno</td>
						<td><input type = "text" name = "nombres" value ="<?php echo $Nombre ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Apellidos Alumno</td>
						<td><input type = "text" name = "apellidos" value ="<?php echo $Tipo ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Fecha Matricula:</td>
						<td><input type = "text" name = "fnac" value ="<?php echo $Dueño ?>"readonly size="40"></td>
					</tr>
						<tr>
						<td>Jornada:</td>
						<td><input type = "text" name = "telealum" value ="<?php echo $FechaNacimiento ?>"readonly size="40"></td>
					</tr>
					</tr>
						<tr>
						<td>Telefono:</td>
						<td><input type = "text" name = "telealum" value ="<?php echo $FechaAdopcion ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Correo:</td>
						<td><input type = "text" name = "profejefe" value ="<?php echo $LugarAdopcion ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Telefono Emergencia:</td>
						<td><input type = "text" name = "jornada" value ="<?php echo $Raza ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Apoderado</td>
						<td><input type = "text" name = "correoalum" value ="<?php echo $Esterilizacion ?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Curso:</td>
						<td><input type = "text" name = "nombreapo" value ="<?php echo $FechaCelos?>"readonly size="40"></td>
					</tr>
					<tr>
						<td>Tarjeta:</td>
						<td><input type = "text" name = "apeapo" value ="<?php echo $CorteUñas ?>"readonly size="40"></td>
					</tr>
					
				


					
							 <a href="registroMascotas.php"><button type="button">Registrar nueva mascota</button></a>
							 
		</table>
		<a href="index.php">Volver</a>
	</center>
			</form>
	</body>
</html>