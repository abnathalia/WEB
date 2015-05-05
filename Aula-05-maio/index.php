<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend> Cliente </legend>
			<label for="nome"> Nome: </label>		
		</fieldset>	
	</form>
	<?php
		spl_autoload_register(null,false);
		spl_autoload_extensions(".class.php");
		function classLoader ($class) {
			$filename= $class.".class.php";
			$file = "Classes/".$filename;
			if(!file_exists($file)) {
				return false;
			}
			include_once $file;		
		}
		spl_autoload_register("classLoader");
		
		$laura = new Cliente("Laura", "120.120.120-12", "321", "1234", 20000, "ContaCorrente");	
		$laura->getDados();
		$laura->getConta();
		$laura->sacar(30);
		$laura->getConta();
		$laura->depositar(3000);
		$laura->getConta();
	?>
</body>
</html>
