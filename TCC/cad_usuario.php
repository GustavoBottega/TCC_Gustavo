<?php
	session_start();
	include_once("chat/settings/settings.php");
	 
?>


<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet"  />
    <script type="text/javascript" src="js/script.js"></script>
    
</head>

<body>
	
	<?php 
	  
	   
		

			
				$nome       = "";
				$email      = "";
				$senha   = "";
				$nome_user   = "";
				$data_nasc  = "";
		
			 
	?>
	<center>
	<h2>Cadastro</h2>
	
	
	
	<div id="content">
	<form action="cadastrando.php" method="POST" enctype="multipart/form-data">
      <fieldset>
	    <legend>Dados para o cadastro:</legend>
		</center>  
	    <label for="nome" class="campo">Nome: </label>
	    <input type="text" id="nome" name="nome" size="100" class="form-control" value="<?php echo $nome; ?>"  > <br>

		<label for="nome_user" class="campo">Nome de usuário: </label>
	    <input type="text" id="nome_user" name="nome_user" size="100" class="form-control" value="<?php echo $nome; ?>"  > <br>

	    <label for="email" class="campo">E-mail: </label>
	    <input type="email" id="email" name="email" class="form-control"  value="<?php echo $email; ?>"  > <br>  


	    <label for="senha" class="campo">Senha: </label>
	    <input type="password" id="senha" name="senha" class="form-control" value="<?php echo $senha; ?>"  > <br>

		
	      
	    <label for="data_nasc" class="campo">Data De Nascimento: </label>
	    <input type="date" id="data_nasc" name="data_nasc" step="0.01"  class="form-control" value="<?php echo $data_nasc; ?>"  > <br>
	    

	    
	    <!-- Chave Primária ... MUITO IMPORTANTE -->    
	    <input type="hidden" name="id" value="<?php echo $id; ?>">
	        
	  </fieldset>
	  
      <input type='submit' value='Salvar'  > 
	
	</form>
	
	<br>
	
	
	
</body>

</html>
