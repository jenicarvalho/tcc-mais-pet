<?php
    $success = false;
    require_once "view/includes/header-dashboard.php";
    require_once "Controller/ProprietariosController.php";
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
                <?php

                    if($success == true) {?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <strong>Alteração Realizada!</strong>
                      </div>
                    <?php
                  }
                ?>
              <form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">

                <!-- Job Information Fields -->
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Nome</label>
                  <div class="field">
                    <input type="text" class="form-control" name="nome" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->nome) ?>"/>
                  </div>
                </fieldset>

                <fieldset>
                  <label>Email <span class="required">*</span></label>
                  <div class="field">
                    <input type="email" class="form-control" name="email" id="account_email" placeholder="you@yourdomain.com" value="<?php echo utf8_encode($resultado->email) ?>" />
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Senha</label>
                  <div class="field">
                    <input type="password" class="form-control" name="pass" id="pass1" placeholder="" value="<?php echo utf8_encode($resultado->senha) ?>"/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">CPF</label>
                  <div class="field">
                    <input type="text" class="form-control" name="document" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->cpf) ?>"/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Data de Aniversário</label>
                  <div class="field">
                    <input type="text" class="form-control" name="birthdayDate" id="job_title" placeholder="10/10/1990" value="<?php echo utf8_encode($resultado->data_nascimento) ?>"/>
                  </div>
                </fieldset>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Sexo</label>
                      <div class="field select-style">
                        <select name="sex" id="job_type" class="form-control">
                          <option value="<?php echo utf8_encode($resultado->sexo) ?>" selected><?php echo utf8_encode($resultado->sexo) ?></option>
                          <option value="Feminino">Feminino</option>
                          <option value="Masculino">Masculino</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div> 

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Endereço</label>
                  <div class="field">
                    <input type="text" class="form-control" name="street" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->endereco) ?>"/>
                  </div>
                </fieldset>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Cidade</label>
                  <div class="field">
                    <input type="text" class="form-control" name="city" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->cidade) ?>"/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-job_title">
                  <label for="job_title">Bairro</label>
                  <div class="field">
                    <input type="text" class="form-control" name="neighborhood" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->bairro) ?>"/>
                  </div>
                </fieldset>


                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Estado</label>
                      <div class="field select-style">
                        <select name="state" id="job_type" class="form-control">
                          <option value="<?php echo utf8_encode($resultado->estado) ?>" selected><?php echo utf8_encode($resultado->estado) ?></option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>


                <fieldset class="fieldset-job_title">
                  <label for="job_title">Celular</label>
                  <div class="field">
                    <input type="text" class="form-control" name="phone" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->celular) ?>"/>
                  </div>
                </fieldset>
                
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Telefone</label>
                  <div class="field">
                    <input type="text" class="form-control" name="phoneHouse" id="job_title" placeholder="" value="<?php echo utf8_encode($resultado->telefone) ?>"/>
                  </div>
                </fieldset>

                <div class="spacer"></div>

                <input type="hidden" name="usuario_id" value="<?php echo utf8_encode($resultado->id) ?>">

                <p>
                  <input type="submit" name="atualizar" class="btn btn-primary" value="Alterar &rarr;" />
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