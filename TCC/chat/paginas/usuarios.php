
<include ="settings">
<div id="content">
	<?php
		$seleciona = mysqli_query("SELECT * FROM usuario");
		$conta = mysqli_num_rows($seleciona);

		if($conta <= 0){
			echo "Nenhum usuário encontrado";
		}else{
		while($row = mysqli_fetch_array($seleciona)){
			$nome = $row['nome'];
			$usuario = $row['usuario'];
			$foto = $row['foto'];
	?>
	<tr>
		<td><img src="<?php echo $foto;?>" class="foto-user"/></td>
		<td><b><?php echo $nome;?></b></td>
		<td><a href="?pagina=chat&usuario=<?php echo $usuario;?>" class="btn btn-info">Iniciar</a></td>
	</tr>
	<hr/>
	<?php }}?>
</div>