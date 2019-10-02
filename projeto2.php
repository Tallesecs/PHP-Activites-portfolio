<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
</head>
<body background="imagens/clean.jpg">
<?php
	if(!empty($_POST['usuario'])) {
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['senha'] = $_POST['NovaSenha'];	
		
	} 
?>
<script>

function validarUsuario(){
                var usuarioSessao = '<?php echo (!empty($_SESSION['usuario'])) ? $_SESSION['usuario'] : ''; ?>';
                var senhaSessao = '<?php echo (!empty($_SESSION['senha'])) ? $_SESSION['senha'] : ''; ?>';
                var usuario = document.getElementById('usuario').value;
                var senha = document.getElementById('senha').value;
    
                if (usuario == '') {
                    alert('Crie Usuario Antes!');
                }  else {
                    if (usuarioSessao == usuario && senhaSessao == senha) {
                        window.location.href = 'paineldecontrole.php';
                    } else {
                        document.getElementById('alert').innerHTML = 'Usuario ou senha invalido!';
                    }
                }              
            }            

</script>	


<div class="box">

<form name="formuser" method="POST" action="paineldecontrole.php">

<p id="cornome">Nome: <input type="text" name="usuario" placeholder="Digite seu nome"></p>
<p>Senha: <input type="password" name="senha" placeholder="Digite sua senha"></p>
<p><button type="submit" onclick="validarUsuario()">Enviar</button></p>

</form>

<a href="usuario.html">Novo Usuário</a>
<p></p>
<a href="redefinesenha.php">Esqueceu sua senha?</a>

</body>

</div>
</html>