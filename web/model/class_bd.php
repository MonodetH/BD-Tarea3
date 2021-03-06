<?php 
	class BD{
		public $host = 'localhost';
		public $user = 'tarea3';
		public $pass = 'x';
		public $bd = 'tarea3';
		public $connection_string = NULL;
		public $conexion = NULL;
		
		### CONSTRUCTOR Y BASICAS ###
		function __construct() {
      	$this->connection_string = 'host='.$this->host.' user='.$this->user.' password='.$this->pass.' dbname='.$this->bd;
   	}
   	
   	public function conectar() {
   		$this->conexion = pg_connect($this->connection_string);
   	}
   	
   	public function desconectar(){
   		pg_close($conexion);
   		$this->conexion = NULL;
   	}
   	
   	### FUNCIONES ###
   	
   	public function registrar($rol,$nombre,$apellido,$email,$pass) {
   		$this->conectar();
			
			$result = pg_query("insert into alumno values (1,'".$rol."','".$nombre."','".$apellido."','".$email."','".$pass."')");
			if(pg_affected_rows($result) == 1) {return true;}
			return false;
   	}
   	
   	public function login($rol, $pass) {
   		$this->conectar();
   		
   		$result = pg_query("select * from alumno where rol='".$rol."' and pass='".$pass."'");  		
   		if(pg_num_rows($result) == 1) {
   			$retorno = pg_fetch_assoc($result);
   			return $retorno;
   		}
			return true;
   	}
   	
   	public function tieneLista($id){
   		$this->conectar();
   		
   		$result = pg_query("select * from cargo where id_alumno=".$id);
   		if(pg_num_rows($result) == 1){return true;}
   		else {return false;}
   	}
   	
   	public function tieneProy($id){
   		$this->conectar();
   		
   		$result = pg_query("select * from proyAlumno where id_alumno=".$id);
   		if(pg_num_rows($result) == 1){return true;}
   		else {return false;}
   	}
 
 

	}
?>
