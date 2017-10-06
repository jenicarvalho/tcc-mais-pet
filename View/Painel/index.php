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
                <h3>Meus anúncios</h3>
              </div>
                <div class="job_listings">           

                <ul class="job_listings">
                  <li class="job_listing">
                    <a href="#">
                      <img src="assets/images/animais/mel.jpg" alt="" class="company_logo" width="70">
                      <div class="position">
                        <h3>Brutus</h3>
                        <div class="company">
                          <strong>Cachorro</strong>
                        </div>
                      </div>
                      <div class="location">
                          Macho 
                      </div>
                      <div class="location">
                          <p>Adicionado em 10/09/2017 </p>
                      </div>
                      <div class="location">
                        Editar
                      </div>
                    </a>
                  </li>
                  <li class="job_listing">
                    <a href="#">
                      <img src="assets/images/animais/mel.jpg" alt="" class="company_logo" width="70">
                      <div class="position">
                        <h3>Brutus</h3>
                        <div class="company">
                          <strong>Cachorro</strong>
                        </div>
                      </div>
                      <div class="location">
                          Macho 
                      </div>
                      <div class="location">
                          <p>Adicionado em 10/09/2017 </p>
                      </div>
                      <div class="location">
                        Editar
                      </div>
                    </a>
                  </li>
                  <li class="job_listing">
                    <a href="#">
                      <img src="assets/images/animais/mel.jpg" alt="" class="company_logo" width="70">
                      <div class="position">
                        <h3>Brutus</h3>
                        <div class="company">
                          <strong>Cachorro</strong>
                        </div>
                      </div>
                      <div class="location">
                          Macho 
                      </div>
                      <div class="location">
                          <p>Adicionado em 10/09/2017 </p>
                      </div>
                      <div class="location">
                        Editar
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="spacer"></div>

              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <a class="load_more_jobs btn btn-default" href="#">Ver todos</a>
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