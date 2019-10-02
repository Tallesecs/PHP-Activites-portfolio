<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/novousuario.css">		
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="imagens/clean.jpg">



<div class="box">

<form name="FormSenha" method="POST" action="projeto2.php">
<p><b>Nome: <?php echo $_SESSION['usuario']; ?> </b></p>

<p><b>Senha:</b></p>
<p><input type="text" id="usuario" value="<?php echo $_SESSION['usuario']; ?>" hidden></p>
<p><input type="password" id="NovaSenha" name="NovaSenha" placeholder="Digite sua Senha"></p>
<p><b>Confirme sua senha:</b></p>
<p><input type="password" id="CNovaSenha" name="CNovaSenha" placeholder="Confirme sua Senha"></p>
<p><button type="submit" onclick="validarSenha()">Enviar</button></p>
</form>

</div>
</body>
</html>