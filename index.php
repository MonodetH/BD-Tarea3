<?php
	require(getcwd().'/web/config.php');
	require($path['web'].'funciones.php');
	require($path['modelo'].'class_bd.php');
	$bd = new BD;
	session_start();
	
	$url_param = get_url();
	
	if(count($url_param) == 3) {
		if($url_param[1] == 'accion'){require($path['control'].$url_param[2].'.php'); return;}
	}
	
	require($path['vista'].'head.php');
	
	if(isset($_SESSION['user_id'])) {
		if(count($url_param) > 1){
			if(count($url_param) == 3){
				if($url_param[1] == 'lista'){require($path['control'].'lista.php');}
				elseif($url_param[1] == 'proyecto') {require($path['control'].'proyecto.php');}
				elseif($url_param[1] == 'usuario') {require($path['control'].'usuario.php');}
				else{require($path['vista'].'404.php');}
			}else {require($path['vista'].'404.php');}
		}else {require($path['vista'].'inicio.php');}
	}else {require($path['vista'].'login.php');}
	
	require($path['vista'].'footer.php');
?>
