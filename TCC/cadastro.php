<?php
	session_start();
	include_once("settings/settings.php");
?>

<div id="content">
	<form action="" method="POST" enctype="multipart/form-data">

	<h1> Bem vindo!</h1>
	<h2> Preencha o formulário abaixo com seus dados: </h2>

		<label>Nome Completo</label>
		<p><input type="text" name="nomecompleto" id="nc" placeholder="-----------" class="form-control" /></p>

		<label>Senha</label>
		<p><input type="password" name="senha" id="senha" placeholder="************" class="form-control"></p>

		<p><input type="submit" name="Entrar" class="btn btn-primary btn-lg btn-block"></p>
		<input type="hidden" name="env" value="login">
	</form>
	<?php
		
				$query = "SELECT *  FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
				$result = mysql_query($query);
				$busca = mysql_num_rows($result);
				$linha = mysql_fetch_assoc($result);

				if($busca > 0){
					$_SESSION['nome'] = $linha['nome'];
					$_SESSION['usuario'] = $linha['usuario'];
					echo '<meta http-equiv="Refresh" content="1; url=?pagina=usuarios">';
				}else{
					echo "<code>Usuário ou senha inválidos.</code>";
				}
			}
		}
	?>
</div