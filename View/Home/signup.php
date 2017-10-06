<?php

    require_once "view/includes/header.php";

    $success = false;
    require_once("Controller/ProprietariosController.php");

?>

    <!-- Main -->
    <div class="main" role="main">

      <!-- Page Heading -->
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Crie uma conta</h1>
            </div>
            <div class="col-md-6">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Criar Conta</li>
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
            <div class="col-md-8 col-md-offset-2">
              <!-- Profile Form -->
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
                  <input type="submit" name="submit_job" class="btn btn-primary" value="Alterars &rarr;" />
                </p>

              </form>
            </div>
          </div>

        </div>
      </section>
      <!-- Page Content / End -->


<?php

   require_once "view/includes/footer-Registers.php";
?>
		