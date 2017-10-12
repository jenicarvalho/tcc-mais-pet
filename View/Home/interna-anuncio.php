<?php

    require_once "view/includes/header.php";    
    require_once "Model/Animais.php";
    require_once "Model/Proprietarios.php";

    $animal = new Animais();
    $proprietario = new Proprietarios();

    if(isset($_GET['CodAnimal'])) :
    	$codigoAnimal = $_GET['CodAnimal'];

    	//todas as informações do animal estao nesse objeto
    	$dadosAnimal = $animal->findAnimal($codigoAnimal);

    	//verifica se animal existe
    	if($dadosAnimal) :

	    	//armazena as informações do proprietario nesse objeto
	    	$dadosProprietario = $proprietario->find($dadosAnimal->idProprietario);

	    //se o animal nao existir redireciona
	    else:
	    	echo '<script>location.href="?pagina=lista-animais";</script>';
	    endif;
	//se o codigo estiver vazio redireciona    
    else:
    	echo '<script>location.href="?pagina=lista-animais";</script>';
    endif;

    //pronome do proprietario
	if($dadosProprietario->sexo == "Feminino") :
		$pronome = "Ela é a dona";
	else :
		$pronome = "Ele é o dono";
	endif;

?>
		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Perfil do <?php echo $dadosAnimal->nomeAnimal ?></h1>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumb">
								<li><a href="?pagina=index">Home</a></li>
								<li class="active"><?php echo $dadosAnimal->nomeAnimal ?></li>
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
							
							<div class="job-profile-info">
								<div class="row">
									<div class="col-md-5">
										<figure class="alignnone">
											<img src="uploads/animais/<?php echo $dadosAnimal->fotoAnimal?>" alt="<?php echo $dadosAnimal->nomeAnimal ?>">
										</figure>
									</div>
									<div class="col-md-7">
										<h2 class="name"><?php echo $dadosProprietario->nome?></h2>
										<i class="tagline"><?php echo $pronome?> do(a) <?php echo $dadosAnimal->nomeAnimal ?></i>
										<ul class="meta">
											<li><?php echo $dadosAnimal->nomeAnimal ?> é um <?php echo $dadosAnimal->tipo ?></li>
											<li>de <?php echo $dadosAnimal->data_nascimento ?></li>
											<li>da raça <?php echo $dadosAnimal->raca ?> </li>
											<li>com porte <?php echo $dadosAnimal->porte ?> </li>
											<li>e da cor <?php echo $dadosAnimal->cor ?> </li>
										</ul>
										<ul class="info" id="informacoes-animal" style="display: none;">
											<li><i class="fa fa-map-marker"></i> 
												Eles estão no <strong><?php echo $dadosProprietario->bairro?></strong> em 
												<strong><?php echo $dadosProprietario->cidade?></strong>
											</li>
											<li><i class="fa fa-whatsapp"></i> 
												<?php echo $dadosProprietario->celular?>
											</li>
											<li><i class="fa fa-phone"></i> 
												<?php echo $dadosProprietario->telefone?>
											</li>
										</ul>

										<div class="spacer-lg"></div>
								
										<a href="#" class="btn btn-warning btn-lg"  data-toggle="modal" data-target="#bsModal1"><span class="fa fa-envelope"></span> Notificar Contato</a>


										<!-- Modal -->
										<div class="modal fade" id="bsModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title" id="myModalLabel">Confirmação</h4>
													</div>
													<div class="modal-body">
														Você gostaria que um veterinário da Mais Pet intermediasse o contato entre você e o outro proprietário? Com isso você terá o apoio e segurança de que seu animal precisa.
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal" id="intervencao-nao">Não, mostre-me os dados de contato</button>
														<button type="button" class="btn btn-primary">Sim desejo que intervenham</button>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</div>

								<div class="spacer-lg"></div>
								
								<h4>Descrição</h4>
								<p><?php echo $dadosAnimal->descricao?></p>

								<h4>Deixe seu depoimento</h4>
								<a href="#" class="btn btn-success">Clique aqui para avaliar o animal</a>

								<div class="spacer-lg"></div>


								<div class="alert alert-danger alert-dismissable">
									<strong>Viu algo de errado aqui? Denuncie!</strong> 
									Se você acha que esse anúncio fere as regras do site, <a href="#">clique aqui</a> para denunciar.
								</div>	

							</div>


							<h3>Relacionados</h3>

							<div class="prev-next-holder text-right">
								<a class="prev-btn" id="carousel-prev"><i class="fa fa-angle-left"></i></a>
								<a class="next-btn" id="carousel-next"><i class="fa fa-angle-right"></i></a>
							</div>

							<div class="owl-carousel-wrapper row">
								<div id="owl-carousel" class="owl-carousel">
								
								<?php foreach( $animal->findAllCustom("WHERE tipo = '$dadosAnimal->tipo'  ") as $key => $valor) : ?>
									<div class="project-item">
										<div class="project-item-inner">
											<figure class="alignnone project-img">
												<img src="uploads/animais/<?php echo $valor->fotoAnimal?>" alt="<?php echo $valor->nomeAnimal?>" />
												<div class="overlay">
													<a href="?pagina=interna-anuncio&CodAnimal=<?php echo $valor->idAnimal?>" class="dlink"><i class="fa fa-link"></i></a>
													<a href="uploads/animais/<?php echo $valor->fotoAnimal?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h4 class="title"><a href="?pagina=interna-anuncio&CodAnimal=<?php echo $valor->idAnimal?>"><?php echo $valor->nomeAnimal?></a></h4>
												<span class="desc"><?php echo $valor->raca?> / <?php echo $valor->sexo?></span>
											</div>
										</div>
								   </div>
								<?php endforeach?>
								</div>
							</div>
						</div>


						<aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
							
							<hr class="visible-sm visible-xs lg">

							<!-- Widget :: Categories -->
							<div class="widget_categories widget widget__sidebar">
								<h3 class="widget-title">Filtre Sua Busca</h3>
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
								<div class="call-to-action centered">
									<div class="cta-txt">
										<h2>Precisa de um Veterinário?</h2>
										<p>Deixe isso com a equipe do Mais Pet.</p>
									</div>
									<div class="cta-btn">
										<a href="?pagina=contato" class="btn btn-success">Contato</a>
									</div>
								</div>
							</div>

						</aside>

					</div>

				</div>
			</section>
<?php

   require_once "view/includes/footer-Registers.php";
?>
		