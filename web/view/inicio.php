<? 
	require($path['vista'].'header.php');
	
	$tieneLista = $bd->tieneLista($_SESSION['user_id']);
	$tieneProy = $bd->tieneProy($_SESSION['user_id']);
?>

<nav>
<ul>
<li><a href="#listas">Listas</a></li>
<li><a href="#usuarios">Usuarios</a></li>
<li><a href="#proyectos">Proyectos</a></li>
<hr/>
<li><a href="#votar">Votar</a></li>
<li><a href="#resultados">Resultados</a></li>
<hr/>
<li><a href="#inscrLista">Inscribir lista</a></li>
<? if($tieneLista) { ?>
<li><a href="#editLista">Editar lista</a></li>
<? } ?>
<li><a href="#inscrProy">Inscribir proyecto</a></li>
<? if($tieneProy) { ?>
<li><a href="#editProy">Editar proyecto</a></li>
<? } ?>
<li><a href="#">Editar perfil</a></li>
</ul>
</nav>
<div id="contenido">
<div id="bienvenida" class="cont">
<h1>Bienvenido</h1><p>Use el menu para navegar</p><br/>
<br>
</div><!-- end bienvenida -->
<hr/>
<div id="listas" class="cont">
<a name="listas"><h2>Listas</h2></a>


<br>
</div><!-- end listas -->
<hr/>
<div id="usuarios" class="cont">
<a name="usuarios"><h2>Usuarios</h2></a>


<br>
</div><!-- end usuarios -->
<hr/>
<div id="proyectos" class="cont">
<a name="proyectos"><h2>Proyectos</h2></a>


<br>
</div><!-- end proyectos -->
<hr/>
<div id="votar" class="cont">
<a name="votar"><h2>Votar</h2></a>
<? require($path['form'].'votar.php'); ?>
<br>
</div><!-- end votar -->
<hr/>
<div id="resultados" class="cont">
<a name="resultados"><h2>Resultados</h2></a>


<br>
</div><!-- end resultados -->
<hr/>
<div id="inscrLista" class="cont">
<a name="inscrLista"><h2>Inscribir lista</h2></a>
<? require($path['form'].'inscrLista.php'); ?>
<br>
</div><!-- end inscrLista -->
<hr/>
<? if($tieneLista) { ?>
<div id="editLista" class="cont">
<a name="editLista"><h2>Editar lista</h2></a>
<? require($path['form'].'editLista.php'); ?>
<br>
</div><!-- end editLista -->
<hr/>
<? } ?>
<div id="inscrProy" class="cont">
<a name="inscrProy"><h2>Inscribir proyecto</h2></a>
<? require($path['form'].'inscrProy.php'); ?>
<br>
</div><!-- end inscrProy -->
<hr/>
<? if($tieneProy) { ?>
<div id="editProy" class="cont">
<a name="editProy"><h2>Editar proyecto</h2></a>
<? require($path['form'].'editProy.php'); ?>
<br>
</div><!-- end editProy -->
<hr/>
<? } ?>
</div><!-- end contenido -->

