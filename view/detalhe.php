<?php 

require_once("inc/header.php");

?>

<section>

	<div class="container">
		<h1 class="filme-titulo"><?=$prod['nome']?></h1>
		<div class="col-xs-12 col-sm-5 text-center">
			<img src="img/<?=$prod['capa']?>" alt="<?=$prod['nome']?>" title="<?=$prod['nome']?>" />
		</div> 
		<div class="col-xs-12 col-sm-7">
			<strong>Gênero: </strong><?=$prod['genero']?>
			<strong>Duração: </strong><?=$prod['duracao']?>
			<strong>Classificação: </strong><?=$prod['classificacao']?>
			<strong>Rate: </strong><?=$prod['rate']?>
			<strong>Sinopse: </strong><?=$prod['descricao']?>
			<strong>Valor: </strong><?=$prod['valor']?>
		</div>	
	</div>
</section>

<?php 

	include_once("inc/footer.php");

?>


