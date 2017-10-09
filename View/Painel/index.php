<?php

    require_once "Model/Animais.php";

    $animal = new Animais();
    require_once "view/includes/header-dashboard.php";
?>

    <!-- Main -->
    <div class="main" role="main">
      <!-- Page Content -->
      <section class="page-content">
        <div class="container">
          
          <div class="row">
            <div class="content col-md-8 col-md-8 col-md-offset-1 col-md-push-3">

              <div class="title-accent">
                <h3>Meus anúncios</h3>
              </div>
                <div class="job_listings">           

                <ul class="job_listings">
                  <?php foreach( $animal->findAll() as $key => $valor) : ?>

                    <?php 
                      $tipo = $valor->tipo;

                      if($tipo == 1) {
                        $tipo = "Cachorro";
                      }
                      if($tipo == 2) {
                        $tipo = "Gato";
                      }

                      $sexo = $valor->sexo;

                      if($sexo == 1) {
                        $sexo = "Fêmea";
                      }
                      if($sexo == 2) {
                        $sexo = "Macho";
                      }
                    ?>

                  <li class="job_listing">
                    <a href="#">
                      <img src="assets/images/animais/mel.jpg" alt="" class="company_logo" width="70">
                      <div class="position">
                        <h3><?php echo $valor->nomeAnimal; ?></h3>
                        <div class="company">
                          <strong><?php echo $tipo; ?></strong>
                        </div>
                      </div>
                      <div class="location">
                          <?php echo $sexo?> 
                      </div>
                      <div class="location">
                          <p>Idade: <br>  <?php echo $valor->data_nascimento ?> anos </p>
                      </div>
                      <div class="location">
                        Editar
                      </div>
                    </a>
                  </li>
                 <?php endforeach;?>
                </ul>
              </div>

            </div>

            <?php require_once "view/includes/sidebar-painel.php"; ?>
          </div>

        </div>
      </section

<?php
   require_once "view/includes/footer-Registers.php";
?>