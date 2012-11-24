<?
	$respuesta = $bd->login($_POST['rol'],$_POST['pass']);
	if($respuesta != false) {
		$_SESSION['user_id'] = $respuesta['id_alumno'];
		$_SESSION['rol'] = $respuesta['rol'];
		$_SESSION['nombre'] = $respuesta['nombre'];
		$_SESSION['apellido'] = $respuesta['apellido'];
		
		echo "<script type='text/javascript'>window.location='".$path['url']."';</script>";
	}else {
		$_SESSION['mensaje']='Usuario no existe o contraseña incorrecta';
		echo "<script type='text/javascript'>window.location='".$path['url']."';</script>";
	}

?>