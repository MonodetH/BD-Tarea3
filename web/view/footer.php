<!-- <footer>
footer<br>
</footer> -->
<? 
	if(isset($_SESSION['mensaje'])) {
		echo "<script language='JavaScript' type='text/javascript'>
				alert('";
		echo $_SESSION['mensaje'];
		echo "');
				</script>";
		unset($_SESSION['mensaje']);
	}
?>
</body>
</html>
