<?php 
	if($_POST['pass'] == $_POST['pass2']) {
		if($bd->registrar($_POST['rol'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['pass'])) {
			$respuesta = $bd->login($_POST['rol'],$_POST['pass']);
			$_SESSION['user_id'] = $respuesta['id_alumno'];
			$_SESSION['rol'] = $respuesta['rol'];
			$_SESSION['nombre'] = $respuesta['nombre'];
			$_SESSION['apellido'] = $respuesta['apellido'];
			echo "<script type='text/javascript'>window.location='".$path['url']."usuario/".$_SESSION['user_id']."';</script>";
			
		}else {
			//Error de registro	
			$_SESSION['mensaje']='Usuario ya existe';
			echo "<script type='text/javascript'>window.location='".$path['url']."';</script>";
		}
	}else {
		//no coinciden las pass
		$_SESSION['mensaje']='Las contraseñas deben coincidir';
		echo "<script type='text/javascript'>window.location='".$path['url']."';</script>";
	}
	
?>
