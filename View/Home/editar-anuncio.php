<?php

    require_once "view/includes/header-dashboard.php";

    $success = false;
    require_once("Controller/AnimaisController.php");
    require_once("Model/Animais.php");

    $animal = new Animais();

    $idAnimal = (int)$_GET['cod'];  
    $resultado = $animal->findAnimal($idAnimal);

?>

    <!-- Main -->
    <div class="main" role="main">

      <section class="page-content">
        <div class="container">
          
          <div class="row">
            <div class="content col-md-8 col-md-8 col-md-offset-1 col-md-push-3">
              <!-- Profile Form -->
              <form method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">
                
                <h3>Edite o anúncio do animal abaixo</h3>
                
                <?php

                    if($success == true) {?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                        <strong>Anúncio Alterado!</strong></div>
                    <?php
                  }
                ?>

                <!-- Job Information Fields -->
                <fieldset class="fieldset-job_title">
                  <label for="job_title">Nome do animal</label>
                  <div class="field">
                    <input type="text" class="form-control" name="animal_nome" id="job_title" placeholder="" value="<?php echo $resultado->nomeAnimal;?>" required/>
                  </div>
                </fieldset>


                <div class="row">
                  <div class="col-md-6">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Tipo</label>
                      <div class="field select-style">
                        <select name="animal_tipo" id="job_type" class="form-control" required>
                    
                          <?php
                            $tipo = $resultado->tipo;

                            if($tipo == 1) {
                              $tipo_nome = "Cachorro";
                            }
                            if($tipo == 2) {
                              $tipo_nome = "Gato";
                            }

                          ?>                        
                          <option value="<?php echo $resultado->tipo;?>" selected="selected"><?php echo $tipo_nome?></option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset class="fieldset-job_category">
                      <label for="job_category">Cor</label>
                      <div class="field select-style">
                        <select name="animal_cor" id="animal_cor" class="form-control" required>
                          <option value="Branco">Branco</option>
                          <option value="Preto">Preto</option>
                          <option value="Amarelo">Amarelo</option>
                          <option value="Cinza">Cinza</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>                
                <div class="row">
                  <div class="col-md-6">
                    <fieldset class="fieldset-job_type">
                      <label for="job_type">Sexo</label>
                      <div class="field select-style">
                        <select name="animal_sexo" id="job_type" class="form-control" required>
                          <option value="1">Fêmea</option>
                          <option value="2">Macho</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset class="fieldset-job_category">
                      <label for="job_category">Porte</label>
                      <div class="field select-style">
                        <select name="animal_porte" id="animal_porte" class="form-control" required>
                          <option value="Médio">Médio</option>
                          <option value="Grande">Grande</option>
                          <option value="Pequeno">Pequeno</option>
                        </select>
                      </div>
                    </fieldset>
                  </div>
                </div>


                <fieldset class="fieldset-skills">
                  <label>Idade</label>
                  <div class="field">
                    <input type="text" class="form-control" name="animal_idade" id="skills" placeholder="" value="<?php echo $resultado->data_nascimento;?>" required/>
                  </div>
                </fieldset>

                <fieldset class="fieldset-skills">
                  <label>Raça</label>
                  <div class="field">
                    <input type="text" class="form-control" name="animal_raca" id="skills" placeholder="" value="<?php echo $resultado->raca;?>" required/>
                  </div>
                </fieldset>

<!--                 <fieldset class="fieldset-company_logo">
                  <label for="company_logo">Foto</label>
                  <div class="field">
                    <input type="file" class="form-control" name="company_logo" id="company_logo" />
                    <small class="description">Tamanho máximo: 2 MB. Tipo: jpg.</small>
                  </div>
                </fieldset> -->

                <fieldset class="fieldset-job_description">
                  <label>Descrição</label>
                  <div class="field">
                    <textarea cols="30" rows="8" class="form-control" name="animal_descricao"><?php echo $resultado->descricao;?></textarea>
                  </div>
                </fieldset>

                <div class="spacer"></div>

                <p>
                  <input type="submit" name="cadastra_animal" class="btn btn-primary" value="Cadastrar Animal &rarr;" />
                </p>

              </form>
              <!-- Profile Form / End -->
            </div>

            <?php require_once "view/includes/sidebar-painel.php"; ?>
          </div>

        </div>
      </section>
<?php

   require_once "view/includes/footer-Registers.php";
?>
		