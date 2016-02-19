 <!DOCTYPE html>
	<html class="no-js">
		<head>
			<title>Jamal's Restaurant</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<script src="../resources/js/modernizr.js"></script>
			<link rel="icon" href="../resources/favicon.png" sizes="46x46">
			<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
			<link rel="stylesheet" href="../resources/css/materialize.min.css">
			<link rel="stylesheet" href="css/stylesheet.css">
		</head>
		<body>
  		<nav>
  			<div class="container">
      		<div class="row">
      			<div class="col s12 l4 offset-l8">
        			<ul>
        				<li><a href="">Sobre o Jamal's</a></li>
        				<li><a href="">Cardápio</a></li>
        				<li><a class="modal-trigger" href="#modal2">Cadastre-se</a></li>
        				<li><a class="modal-trigger" href="#modal1">Login</a></li>
        			</ul>
      			</div>
    			</div><!-- End Row -->
    		</div><!-- End Container -->
  		</nav>
  		<header class="header">
    		<div class="container">
      		<div class="row">
        		<div id="logo" class="col s6 l2 offset-s3 offset-l5">
        			<img src="images/jamals-restaurant-logo.svg" alt="">
        		</div>
        		<main id="main" class="col s12 center"><!--  flow-text -->
							<h1>Delivery de Culinária Árabe</h1>
							<p><strong>Jamal's Restaurant</strong>, seu restaurante Árabe favorito, sabor e qualidade entregue na sua casa.</p>
        		</main>
        	</div><!-- End Row -->
      	</div><!-- End Container -->
			</header>
			<section class="section">
				<div class="container">
					<div class="row">
						<header class="col l12 center">
							<h2>Fazer seu pedido nunca foi tão fácil e rápido</h2>
						</header>
        		<article class="col l4 center">
        			<h5>Escolha</h5>
        			<p>Escolha em nosso cardápio que mais gosta, selecione o prato principal, sua bebida e sobremesa.</p>
        		</article>
        		<article class="col l4 center">
        			<h5>Pague</h5>
        			<img src="images/creditcard.svg" alt="">
        			<p>Segurança e praticidade no pagamento, utilize seus cartões de créditos, Paypal e PagSeguro.</p>
        		</article>
        		<article class="col l4 center">
							<h5>Receba</h5>
							<p>Receba na tranquilidade da sua casa, com rapidez sem embalagens amassadas e em até 26min.</p>
        		</article>
					</div>
				</div>
			</section>

			<!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Login</h4>
		      <p>Realize o seu Login</p>
		      <div class="row">
		      	<div class="input-field col s12">
          		<input placeholder="Digite seu e-mail" id="email" type="text" class="validate">
          		<label for="email">E-mail</label>
        		</div>
        	</div>
        	<div class="row">
        		<div class="input-field col s12">
          		<input id="senha" placeholder="Digite sua senha" type="password" class="validate">
          		<label for="senha">Senha</label>
        		</div>
        	</div>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect btn-flat">Login</a>
		    </div>
		  </div>

		  <!-- Modal Structure -->
		  <div id="modal2" class="modal bottom-sheet">
		    <div class="modal-content">
		      <h4>Modal Header</h4>
		      <p>A bunch of text</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		  </div>
	
			<!--Import jQuery before materialize.js-->
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="../resources/js/materialize.min.js"></script>
			<script src="js/materialize-actions.js"></script>
		</body>
	</html>
