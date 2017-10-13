<?php
    require_once "view/includes/header-dashboard.php";

    require_once "Model/Comentarios.php";
    $comentario = new Comentarios();

    require_once "Model/Animais.php";
    $animal = new Animais();

    require_once "Model/Proprietarios.php";
    $proprietario = new Proprietarios();
    
    $idcliente = $_SESSION['usuarioCliente']->id;

?>

    <!-- Main -->
    <div class="main" role="main">
      <!-- Page Content -->
      <section class="page-content">
        <div class="container">
          
          <div class="row">
            <div class="content col-md-8 col-md-8 col-md-offset-1 col-md-push-3">

              <div class="title-accent">
                <h3>Comentários Recebidos</h3>
              </div>
              <div class="row">
                
                <?php 
                    foreach( $comentario->findAllDepoimentos($idcliente) as $key => $valor): 
                      $animalObj = $animal->findAnimal($valor->idAnimal);
                      $proprietarioObj = $proprietario->find($valor->idProprietario);
                ?>                
                <div class="col-md-12">
                  <hr class="visible-sm visible-xs lg">
                  <div class="testimonial">
                    <blockquote>
                      <p><?php echo $valor->depoimento ?></p>
                    </blockquote>
                    <div class="bq-author">
                      <figure class="author-img">
                        <img src="uploads/animais/<?php echo $animalObj->fotoAnimal ?>" alt="?php echo $animalObj->nomeAnimal ?>" width="60">
                        <br>
                        <a href="#" class="btn btn-success btn-sm" style="margin: 10px 0;">Aceitar</a>
                        <br>
                        <a href="#" class="btn btn-danger btn-sm">Excluir </a>
                      </figure>
                      <h6><?php echo utf8_encode($proprietarioObj->nome) ?> </h6>
                      <span class="bq-author-info">Comentou no anúncio do <?php echo $animalObj->nomeAnimal ?> </span>
                    </div>
                  </div>
                </div>                

              <?php endforeach?>

              </div>
            </div>

            <?php require_once "view/includes/sidebar-painel.php"; ?>
          </div>

        </div>
      </section

<?php
   require_once "view/includes/footer-Registers.php";
?>