<?php
    require_once "view/includes/header-dashboard.php";
    require_once "Model/Comentarios.php";
    
    $idcliente = $_SESSION['usuarioCliente']->id;

    $comentario = new Comentarios();
?>

    <!-- Main -->
    <div class="main" role="main">
      <!-- Page Content -->
      <section class="page-content">
        <div class="container">
          
          <div class="row">
            <div class="content col-md-8 col-md-8 col-md-offset-1 col-md-push-3">

              <div class="title-accent">
                <h3>Comentários dados</h3>
              </div>
              <div class="row">
                
                <?php 
                    foreach( $comentario->findAllDepoimentos($idcliente) as $key => $valor): 
                ?>                
                <div class="col-md-12">
                  <hr class="visible-sm visible-xs lg">
                  <div class="testimonial">
                    <blockquote>
                      <p><?php echo $valor->depoimento ?></p>
                    </blockquote>
                    <div class="bq-author">
                      <figure class="author-img">
                        <img src="http://placehold.it/60x60" alt="">

                      </figure>
                      <h6>Pedro </h6>
                      <span class="bq-author-info">Dono do Brutus</span>
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