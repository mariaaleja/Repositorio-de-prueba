<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contrasena'] = $_POST['contrasena'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Inicio</title>

<link rel="stylesheet" type="text/css" href="estilos.css"> 



</head>

<body background="img/cyan45.jpg" class="html">

<table class="centrada" width=200 height=200 align="center" cellpadding="0" cellspacing="12" border="0" align="center">

<tr><td height=250></td></tr>

<tr>
	<td>
    	<?php
			include("sesion.php");

		?>
    	
	</td>
</tr>
</table>	

</body>
</html>
