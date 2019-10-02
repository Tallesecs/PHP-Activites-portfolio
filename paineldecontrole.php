<?php 

session_start();

if((isset($_SESSION['usuario'])) && (isset($_SESSION['senha']))) {
	if (($_SESSION['usuario'] == $_POST['usuario']) && ($_SESSION['senha'] == $_POST['senha'])) {
		$usuario = $_SESSION['usuario'];
	}else{
		header("location: projeto2.php");
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

<style>
@keyframes titulo {
	from {
		text-align: center;
		opacity: 0.2;
	}
	to {
		margin-top: 300px;
		text-align: center;
		opacity: 1s;
	}
}

@keyframes titulo2 {
	from {
		text-align: center;
		opacity: 0.2;
	}
	to {
		
		text-align: center;
		opacity: 1s;
	}
}

h1 {
	animation-name: titulo;
	animation-duration: 5s;
	animation-fill-mode: forwards;
	text-align: center;
	color: #F30D52;
	font-size: 200px;
}

h2 {
	animation-name: titulo2;
	animation-duration: 5s;
	animation-fill-mode: forwards;
	text-align: center;
	color: #F30D52;
	font-size: 30px;
	text-transform: uppercase;
}

</style>
</head>
<body background="imagens/clean.jpg">

<?php



if(isset($_SESSION['usuario'])) {
	echo "<h1>Boas-Vindas</h1>". "<h2>". $_SESSION['usuario'] ."</h2>";

}


?>

<a href="index.php">Voltar para Página principal</a>

</body>

</html>