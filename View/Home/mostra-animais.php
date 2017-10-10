<?php
    require_once "view/includes/header.php";
    require_once "Model/Animais.php";

    $animal = new Animais();
?>

		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Animais</h1>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="active">Animais</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
			              <div class="content col-md-8 col-md-8 col-md-offset-1 col-md-push-3">
			                <h2 class="with-subtitle" data-animation="fadeInUp" data-animation-delay="0">Últimos Animais <small data-animation="fadeInUp" data-animation-delay="100">Confira os animais que recém chegaram!</small></h2>
			                <div class="row">

                  			<?php foreach( $animal->findAllLimit(1) as $key => $valor) : ?>

			                  <div class="col-xs-12 col-sm-6 col-md-4" data-animation="fadeInLeft" data-animation-delay="0">
			                    <div class="job-listing-box">
			                      <figure class="job-listing-img">
			                        <a href="job-profile.html"><img src="assets/images/animais/dog.png" alt="Brutus"></a>
			                      </figure>
			                      <div class="job-listing-body">
			                        <h4 class="name"><a href="job-profile.html"><?php echo $valor->nomeAnimal ?></a></h4>
			                        <p>Macho, 2 anos, Preto, Porte Médio.</p>
			                      </div>
			                      <footer class="job-listing-footer">
			                        <ul class="meta">
			                          <li class="category">Dono: <strong>Gisele Oliveira</strong></li>
			                          <li class="date"><a href="#">Veja o perfil completo</a></li>
			                        </ul>
			                      </footer>
			                    </div>
			                  </div>

                 			<?php endforeach;?>

			                </div>
			              </div>

						<aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
							
							<hr class="visible-sm visible-xs lg">

							<!-- Widget :: Categories -->
							<div class="widget_categories widget widget__sidebar">
								<h3 class="widget-title">Filtre sua busca</h3>
					              <form action="#" method="POST" role="form">
					                <div class="form-group">
					                  <div class="select-style">
					                    <select class="form-control" id="tipo-animal">
					                      	<option value="">Tipo de animal</option>
				                          	<option value="Cachorro">Cachorro</option>
				                          	<option value="Gato">Gato</option>
									    </select>
					                  </div>
					                </div>
					                <div class="form-group">
					                  <div class="select-style">
					                    <select class="form-control">
					                      <option>Sexo</option>
				                          <option value="Fêmea">Fêmea</option>
				                          <option value="Macho">Macho</option>
					                    </select>
					                  </div>
					                </div>
					                <div class="form-group">
					                  <div class="select-style">
					                    <select class="form-control">
					                      <option>Porte</option>
				                          <option value="Médio">Médio</option>
				                          <option value="Grande">Grande</option>
				                          <option value="Pequeno">Pequeno</option>
					                    </select>
					                  </div>
					                </div>
					                <div class="form-group">
					                  <div class="select-style">
					                    <select class="form-control">
					                      <option>Idade</option>
				                          <option value="1 ano">1 ano</option>
				                          <option value="2 anos">2 anos</option>
				                          <option value="3 anos">3 anos</option>
				                          <option value="4 anos">4 anos</option>
				                          <option value="5 anos">5 anos</option>
				                          <option value="6 anos">6 anos</option>
				                          <option value="7 anos">7 anos</option>
					                    </select>
					                  </div>
					                </div>
					                <div class="form-group">
					                  <div class="select-style">
					                    <select class="form-control">
					                      <option>Cor</option>
				                          <option value="Branco">Branco</option>
				                          <option value="Preto">Preto</option>
				                          <option value="Amarelo">Amarelo</option>
				                          <option value="Cinza">Cinza</option>
					                    </select>
					                  </div>
					                </div>
                  					<div class="form-group" id="raca_cachorro">
					                    <fieldset class="fieldset-job_category">
					                      <div class="field select-style">
					                        <select name="animal_raca"  class="form-control" required>
					                          <option>Raça</option>
					                          <option value="Akita">Akita</option>
					                          <option value="Beagle">Beagle</option>
					                          <option value="Basset">Basset</option>
					                          <option value="Buldogue">Buldogue</option>
					                          <option value="Chihuahua">Chihuahua</option>
					                          <option value="Chow Chow">Chow Chow</option>
					                          <option value="Dálmata">Dálmata</option>
					                          <option value="Doberman">Doberman</option>
					                          <option value="Husky">Husky</option>
					                          <option value="Labrador">Labrador</option>
					                          <option value="Maltês">Maltês</option>
					                          <option value="Pastor Alemão">Pastor Alemão</option>
					                          <option value="Pug">Pug</option>
					                          <option value="ShihTzu">ShihTzu</option>
					                          <option value="YorkShire">YorkShire</option>
					                        </select>
					                      </div>
					                    </fieldset>
				                  </div>
				                  <div class="form-group" id="raca_gato" style="display: none;">
				                    <fieldset class="fieldset-job_category">
				                      <div class="field select-style">
				                        <select name="animal_raca"  class="form-control" required>
				                          <option>Raça</option>
				                          <option value="Angorá">Angorá</option>
				                          <option value="Himalaio">Himalaio</option>
				                          <option value="British Shorthair">British Shorthair</option>
				                          <option value="Maione Coon">Maione Coon</option>
				                          <option value="Persa">Persa</option>
				                          <option value="Ragdoll">Ragdoll</option>
				                          <option value="Siamês">Siamês</option>
				                          <option value="Sphynx">Sphynx</option>
				                        </select>
				                      </div>
				                    </fieldset>
				                  </div>						                
					                <button type="submit" class="btn btn-success btn-block">Buscar animais!</button>
					              </form>
							</div>


							<div class="widget_text widget widget__sidebar">
								<hr class="visible-sm visible-xs lg">
								<!-- Call to Action - alternative -->
								<div class="call-to-action centered">
									<div class="cta-txt">
										<h2>Precisa de um Veterinário?</h2>
										<p>Deixe isso com a equipe do Mais Pet.</p>
									</div>
									<div class="cta-btn">
										<a href="?pagina=contato" class="btn btn-primary">Contato</a>
									</div>
								</div>
								<!-- Call to Action - alternative / End -->
							</div>

							<!-- Widget :: Tabbed -->
							<div class="tabbed-widget widget widget__sidebar">
								<h3 class="widget-title">Confira</h3>
								<div class="widget-content">
									<div class="tabs">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab-1" data-toggle="tab">Gatos</a></li>
											<li><a href="#tab-2" data-toggle="tab">Cachorros</a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">24/07/2013</span>
														<h5 class="title"><a href="#">Duis placerat rhoncus arcu sit amet aliquam</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">16/07/2013</span>
														<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">14/07/2013</span>
														<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus</a></h5>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="tab-2">
												<ul class="latest-posts-list">
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">24/07/2013</span>
														<h5 class="title"><a href="#">Duis placerat rhoncus arcu sit amet aliquam</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">16/07/2013</span>
														<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
													</li>
													<li>
														<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60" alt=""></a></figure>
														<span class="date">14/07/2013</span>
														<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus</a></h5>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Widget :: Tabbed -->
						</aside>
					</div>

				</div>
			</section>
<?php
   require_once "view/includes/footer-Registers.php";
?>
	