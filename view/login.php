<?php 

	include_once("inc/header.php");

?>

<link rel="stylesheet" href="css/login.css">
	
	<div class="container">
		<div class="main row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="row">
					<div class="col-xs-4 text-center"> 
						<span class="circle active" id="circleStep1">1</span>
						<span class="step_name"> Account</span>
					</div>
					<div class="col-xs-4 text-center"> 
						<span class="circle" id="circleStep2">2</span>
						<span class="step_name"> Detalhes</span>
					</div>
					<div class="col-xs-4 text-center"> 
						<span class="circle" id="circleStep3">3</span>
						<span class="step_name"> Conclusão</span>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 form-container">
						<form id="step-1" action="" method="post" name="experiment">
							<small class="text-center">Etapa 1</small>
							<h1 class="text-center">Crie sua conta</h1>

							<input type="text" class="form-control" placeholder="Username" autofocus>
							<br />
							<input type="email" class="form-control" placeholder="E-mail">
							<br />
							<input type="password" class="form-control" placeholder="Senha">
							<br />
							<input type="submit" class="btn btn-default col-xs-12" onclick="ChangeStep(1,2); return false;" value="Próxima etapa" />
						</form>

						<form id="step-2" action="" method="post" name="experiment">
							<small class="text-center">Etapa 2</small>
							<h1 class="text-center">Detalhes da conta</h1>

							<input type="text" class="form-control" placeholder="Username" autofocus>
							<br />
							<input type="email" class="form-control" placeholder="E-mail">
							<br />
							<input type="password" class="form-control" placeholder="Senha">
							<br />
							<input type="button" class="btn btn-default col-xs-12 col-md-6" onclick="ChangeStep(2,1); return false;" value="Etapa Anterior" />
							<input type="submit" class="btn btn-default col-xs-12 col-sm-offset-1 col-md-5" onclick="ChangeStep(2,3); return false;" value="Próxima etapa" />
						</form>

						<form id="step-3" action="" method="post" name="experiment">
							<small class="text-center">Etapa 3</small>
							<h1 class="text-center">Conclusão da conta</h1>

							<input type="text" class="form-control" placeholder="Username" autofocus>
							<br />
							<input type="email" class="form-control" placeholder="E-mail">
							<br />
							<input type="password" class="form-control" placeholder="Senha">
							<br />
							<input type="button" class="btn btn-default col-xs-12 col-md-6" onclick="ChangeStep(3,2); return false;" value="Etapa Anterior" />
							<input type="submit" class="btn btn-default col-xs-12 col-sm-offset-1 col-md-5" onclick="ChangeStep(3,4); return false;" value="Finalizar" />
						</form>

						<div id="step-4">
							<h1 class="text-center">Cadastro concluído!</h1>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

	    function ChangeStep (currentStep, toStep){
	    	$('#step-' + currentStep).css("display","none");
	    	$("#step-" + toStep).css( "display", "block" );
	    	$("#circleStep" + currentStep).removeClass( "active" );
	    	$("#circleStep" + toStep).addClass( "active" );
	    }

    </script>
</body>
</html>