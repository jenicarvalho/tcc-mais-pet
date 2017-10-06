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
                <h3>Meu perfil</h3>
              </div>

              <form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">

                <!-- Job Information Fields -->
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Nome</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>

                <fieldset>
                  <label>Email <span class="required">*</span></label>
                  <div class="field">
                    <input type="email" class="form-control" name="create_account_email" id="account_email" placeholder="you@yourdomain.com" value="" />
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">CPF</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Endereço</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Cidade</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Bairro</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>


                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Estado</label>
                      <div class="field select-style">
                        <select name="job_type" id="job_type" class="form-control">
                          <option value="SP">SP</option>
                          <option value="RJ">RJ</option>
                          <option value="MG">MG</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Celular</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Telefone</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value=""/>
                  </div>
                </fieldset>

                <div class="spacer"></div>

                <p>
                  <input type="submit" name="submit_job" class="btn btn-primary" value="Alterar &rarr;" />
                </p>

              </form>
            </div>

            <?php require_once "view/includes/sidebar-painel.php"; ?>
          </div>

        </div>
      </section

<?php
   require_once "view/includes/footer-Registers.php";
?>