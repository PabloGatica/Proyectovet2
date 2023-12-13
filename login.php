<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/style.css">
        
        <style type="text/css">
            
        </style>

       
        
    </head>
    
    <body>
    <form method="POST">
    <?php error_reporting(0);?>
        <div id="photo">
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form id="loginform">
                        <input type="text" name="usuario" placeholder="RUT" required>
                        <i name="bx bx-user"></i>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <i placeholder="bx bx-lock-alt"></i>
                        <?php 
	if($_POST['login']=="Ingresar"){
		include("funciones.php");
		$cnn= Conectar();
		$user = $_POST['usuario'];
		$pass = $_POST['password'];
		$sql="select rut, contraseña from usuarios where Rut = '$user' and Contraseña= '$pass'";
		$rs = mysqli_query($cnn,$sql);
			if(mysqli_num_rows($rs) != 0){
				if($row = mysqli_fetch_array($rs)){
					$_SESSION['rut'] = $row[0];
					$_SESSION['con'] = $row[1];
                    echo "<script>alert('Bienvenido')</script>";
                    echo "<script type='text/javascript'>window.location='menu.php'</script>";
                }}}
                ;                    
                        ?>
                        <button type="submit" title="Ingresar" name="login" value= "Ingresar">Login</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="#">Volver</a>
                </div>
            </div>
        </div>
            </form>
    </body>
</html>