<?php 

require_once("inc/header.php");

?>

<section>
	<div id="carousel-movies-home" class="carousel slide" data-ride="carousel" ng-controller="destaqueController">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-movies-home" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-movies-home" data-slide-to="1"></li>
			<li data-target="#carousel-movies-home" data-slide-to="2"></li>
			<li data-target="#carousel-movies-home" data-slide-to="3"></li>
			<li data-target="#carousel-movies-home" data-slide-to="4"></li>
			<li data-target="#carousel-movies-home" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active" ng-repeat="filme in filmes" ng-if="$first">
			  <img src="img/{{filme.banner}}" alt="{{filme.nome}}" title="{{filme.nome}}">
			  <div class="info-banner">
			   		<span class="title">
			   			<a href="detalhe_{{filme.id}}">{{filme.nome}}</a>
			   		</span>
			   		<div class="descrip-banner">
			   			{{filme.descricao}}
			   		</div> <!-- /.descrip-banner -->
			   		<div class="button-banner">
			   			<a data-toggle="modal" data-target="#modalTrailer" class="btn-action btn-banner btn-trailer">
			   				<span class="hidden-xs">Assistir ao </span>trailer
			   			</a>
			   			<a href="#" class="btn-action btn-banner btn-rent"> Alugar</a>
			   		</div>
				</div><!-- /.info-banner -->
			</div>

			<div class="item" ng-repeat="filme in filmes" ng-if="!$first">
			  <img src="img/{{filme.banner}}" alt="{{filme.nome}}" title="{{filme.nome}}">
			  <div class="info-banner">
			   		<span class="title">
			   			<a href="detalhe_{{filme.id}}">{{filme.nome}}</a>
			   		</span>
			   		<div class="descrip-banner">
			   			{{filme.descricao}}
			   		</div> <!-- /.descrip-banner -->
			   		<div class="button-banner">
			   			<a data-toggle="modal" data-target="#modalTrailer" class="btn-action btn-banner btn-trailer">
			   			<span class="hidden-xs">Assistir ao </span>trailer</a>
			   			<a href="#" class="btn-action btn-banner btn-rent"> Alugar</a>
			   		</div>
				</div><!-- /.info-banner -->
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-movies-home" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#carousel-movies-home" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
	<!-- /.carousel -->

	<div class="container" ng-controller="destaqueController">
		<section id="lancamentos" class="" ng-repeat="vitrine in vitrines">
			<div class="header-showcase">
				<h1 class="title-section pull-left">{{vitrine.nome}}</h1>
				<div class="ver-mais pull-right"><a href="#">Ver todos</a></div>
			</div> <!-- /.header-showcase -->
			<div class="slide-showcase">
				<div ng-repeat="filme in filmes_vitrine">
					<a href="detalhe_{{filme.id}}">
						<img data-lazy="img/{{filme.capa}}" alt="{{filme.nome}}" title="{{filme.nome}}">
					</a>
				</div>
			</div>
		</section>
		<!-- /#lancamentos -->

		
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalTrailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/64Zj403pfeY" frameborder="0" allowfullscreen></iframe>
				</div>			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

<?php 

	include_once("inc/footer.php");

?>

<script type="text/javascript">
	
	angular.module("shop", []).controller("destaqueController", function($scope, $http){

		$scope.filmes = [];

		$http({
		  method: 'GET',
		  url: 'filmes'
		}).then(function successCallback(response) {
		    $scope.filmes = response.data;
		}, function errorCallback(response) {
			console.log(response);
		});

		$http({
		  method: 'GET',
		  url: 'vitrines'
		}).then(function successCallback(response) {
		    $scope.vitrines = response.data;
		}, function errorCallback(response) {
			console.log(response);
		});


		$http({
		  method: 'GET',
		  url: 'filmesVitrine'
		}).then(function successCallback(response) {
		    $scope.filmes_vitrine = response.data;
		    
		    setTimeout(initSlick, 1000);

		}, function errorCallback(response) {
			console.log(response);
		});		
	})

</script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">
	var initSlick = function(){
      $('.slide-showcase').slick({
		dots: true,
		  infinite: true,
		  lazyLoad: 'ondemand',
		  speed: 300,
		  slidesToShow: 5,
		  slidesToScroll: 4,
		  arrows: true,
		  dots: false,
		  draggable: true,
		  responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 710,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
      });
	};
</script>
