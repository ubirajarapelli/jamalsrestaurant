 <!DOCTYPE html>
	<html class="no-js">
		<meta charset="UTF-8">
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
			<div class="navbar-fixed">
  		<nav>
  			<div class="container">
      		<div class="row">
      			<div class="col s12 l7 offset-l5">
        			<ul class="right">
        				<li><a href="index.php">Home</a></li>
        				<li><a href="cardapio.php">Cardápio</a></li>
        				<li><a class="modal-trigger" href="#modal2">Seu Pedido</a></li>
        				<li><a href="">Cadastre-se</a></li>
        				<li><a class="modal-trigger" href="#modal1">Login</a></li>
        			</ul>
      			</div>
    			</div><!-- End Row -->
    		</div><!-- End Container -->
  		</nav>
  		</div>
  		<header class="header">
    		<div class="container">
      		<div class="row">
        		<div id="logo" class="col s6 l4 offset-s3 offset-l4">
        			<img src="images/jamals-restaurant-logo.svg" alt="">
        		</div>
        		<main id="main" class="col s12 center"><!--  flow-text -->
							<h1>Delivery de Culinária Árabe</h1>
							<p><strong>Jamal's Restaurant</strong>, seu restaurante Árabe favorito, sabor e qualidade entregue na sua casa.</p>
        		</main>
        	</div><!-- End Row -->
      	</div><!-- End Container -->
			</header>
			<section id="make-a-wish" class="section">
				<div class="container">
					<div class="row">
						<header class="col l12 center">
							<h2>Fazer seu pedido nunca foi tão fácil e rápido</h2>
						</header>
        		<article class="col l4 center how-to-do">
        			<h5>Escolha</h5>
        			<img src="images/choice.svg" alt="Icone de mão apontando">
        			<p>Escolha em nosso cardápio que mais gosta, selecione o prato principal, bebida e sobremesa.</p>
        		</article>
        		<article class="col l4 center how-to-do">
        			<h5>Pague</h5>
        			<img src="images/credit-card.svg" alt="Icone de Cartão de crédito">
        			<p>Segurança e praticidade no pagamento, utilize seus cartões de créditos, Paypal e PagSeguro.</p>
        		</article>
        		<article class="col l4 center how-to-do">
							<h5>Receba</h5>
							<img src="images/delivery.svg" alt="Icone de Entrega">
							<p>Receba na tranquilidade da sua casa, com rapidez sem embalagens amassadas e em até 26min.</p>
        		</article>
					</div>
				</div>
			</section>
			<section id="carte" class="section">
				<div class="container">
					<div class="row">
						<header class="col l12 center">
							<h3>O melhor carápio nas suas mãos</h3>
						</header>
						<article class="col l4">
						  <div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="images/buffet-arabe.jpg">
						    </div>
						    <div class="card-content">
						      <span class="card-title activator grey-text">
						      	Pratos Principais
						      	<i class="material-icons right">more_vert</i>
						      </span>
						      <p><a href="#">Escolha o que mais gotsa</a></p>
						    </div>
						    <div class="card-reveal">
						      <span class="card-title grey-text">Pratos Principais<i class="material-icons right">close</i></span>
						      <p>Here is some more information about this product that is only revealed once clicked on.</p>
						    </div>
						  </div>
						</article>
						<article class="col l4">
							<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="images/article-arabic-drinks-inarticle-jellab.jpg">
						    </div>
						    <div class="card-content">
						      <span class="card-title activator grey-text">Bebidas
						      	<i class="material-icons right">more_vert</i></span>
						      <p><a href="#">O que deseja beber</a></p>
						    </div>
						    <div class="card-reveal">
						      <span class="card-title grey-text">Bebidas<i class="material-icons right">close</i></span>
						      <p>Here is some more information about this product that is only revealed once clicked on.</p>
						    </div>
						  </div>
						</article>
						<article class="col l4">
							<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator" src="images/kataifi-plate.jpg">
						    </div>
						    <div class="card-content">
						      <span class="card-title activator grey-text">
						      	Sobremesas
						      	<i class="material-icons right">more_vert</i>
						      </span>
						      <p><a href="#">Complete seu pedido</a></p>
						    </div>
						    <div class="card-reveal">
						      <span class="card-title grey-text">Sobremesas<i class="material-icons right">close</i></span>
						      <p>Here is some more information about this product that is only revealed once clicked on.</p>
						    </div>
						  </div>
						</article>
					</div>
				</div>
			</section>
			<footer class="page-footer">
        <div class="container">
        	<div class="row">
          	<h3>footer</h3>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            © 2016 Jamal's Restaurant
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        	</div>
        </div>
      </footer>

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
		      <h4>Seu Pedido</h4>
		      <p>A bunch of text</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Finalizar pedido</a>
		    </div>
		  </div>
	
			<!--Import jQuery before materialize.js-->
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="../resources/js/materialize.min.js"></script>
			<script src="js/materialize-actions.js"></script>
		</body>
	</html>
