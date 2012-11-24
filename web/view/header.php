<header>
<div id="head_bar">
<div id="logo_head">
<a href="<?php echo $path['url'] ?>" ><h2>Elecciones CEEINF</h2></a>
</div><!-- end logo_head -->
<?php if (isset($_SESSION['user_id'])) { ?>
<div id="login_header">
<?php echo "Hola "; ?>
<a href="<?php echo $path['url'].'usuario/'.$_SESSION['user_id'] ?>"><? echo $_SESSION['nombre']; ?></a>
<form method="POST" action="accion/logout" style="display: inline;">
<input type="hidden" name="sesion" value="cerrar"/>
<input type="submit" name="submitted" value="Salir"></form>
</div><!-- end login_header -->
<?php } ?>
</div><!-- end head_bar -->
</header>
