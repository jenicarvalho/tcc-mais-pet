<?php
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
                <h3>Depoimentos recebidos</h3>
              </div>
              <div class="row">

                <div class="col-md-12">
                  <hr class="visible-sm visible-xs lg">
                  <div class="testimonial">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut laoreet mi. Integer vitae elit quis leo tincidunt euismod. Nullam blandit vestibulum lectus sed sollicitudin. </p>
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

                <div class="col-md-12" style="padding: 3em 0">
                  <hr class="visible-sm visible-xs lg">
                  <div class="testimonial">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut laoreet mi. Integer vitae elit quis leo tincidunt euismod. Nullam blandit vestibulum lectus sed sollicitudin. </p>
                    </blockquote>
                    <div class="bq-author">
                      <figure class="author-img">
                        <img src="http://placehold.it/60x60" alt="">

                      </figure>
                      <h6>Tatiana</h6>
                      <span class="bq-author-info">Dono da Mel</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php require_once "view/includes/sidebar-painel.php"; ?>
          </div>

        </div>
      </section

<?php
   require_once "view/includes/footer-Registers.php";
?>