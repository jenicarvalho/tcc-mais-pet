<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenuDashboard.php";
?>


    <section class="dashboard">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="titlePlaycardT">
              <h3>Anúncios</h3>
            </div>
            <div class="playCardT">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <div class="featuredPicture">
                    <img src="assets/img/buddy.png" style="width: 100%;">
                  </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  <div class="featuredData">
                    <h2>Buddy</h2>
                    <div style="clear: both;"></div>
                    <div class="age">
                      <i class="fa fa-hourglass-half"></i><h3>3 Anos</h3>
                    </div>
                    <div class="brood">
                      <i class="fa fa-paw"></i><h3>RSD</h3>
                    </div>
                    <div class="neighborhood">
                      <i class="fa fa-compass"></i><h3>Jd. das Oliveiras</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-12">
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton"><a href="#">Anúncio</a></p>
                    </div>
                  </div>
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton" style="margin: 1px 30px 1px 30px !important;"><a href="#">Alterar</a></p>
                    </div>
                  </div>
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton" style="margin: 1px 30px 1px 30px !important;"><a href="#">Excluir</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="playCardT">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <div class="featuredPicture">
                    <img src="assets/img/amora.png" style="width: 100%;">
                  </div>
                </div>
                <div class="col-md-5 col-sm-12">
                  <div class="featuredData">
                    <h2>Amora</h2>
                    <div style="clear: both;"></div>
                    <div class="age">
                      <i class="fa fa-hourglass-half"></i><h3>2 Anos</h3>
                    </div>
                    <div class="brood">
                      <i class="fa fa-paw"></i><h3>Golden Retriever</h3>
                    </div>
                    <div class="neighborhood">
                      <i class="fa fa-compass"></i><h3>Jd. das Oliveiras</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-12">
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton"><a href="#">Anúncio</a></p>
                    </div>
                  </div>
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton" style="margin: 1px 30px 1px 30px !important;"><a href="#">Alterar</a></p>
                    </div>
                  </div>
                  <div class="login">
                    <div class="btn-login">
                      <p class="loginTextButton" style="margin: 1px 30px 1px 30px !important;"><a href="#">Excluir</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="titlePlaycardT">
              <h3>Dados Proprietário</h3>
            </div>
            <form class="contact_form2" method="post">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="text" class="inputRegister" placeholder="Nome Completo..." name="nome" required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-4 col-sm-12">
                  <input type="text" class="inputRegister" name="birthdayDate" placeholder="Data de Nasc..." required>
                </div>
                <div class="col-md-3 col-sm-12">
                  <input type="text" class="inputRegister" name="sex" placeholder="Sexo..." required>
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="cpf" placeholder="CPF..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-7 col-sm-12">
                  <input type="text" class="inputRegister" name="street" placeholder="Endereço..." required>
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="neighborhood" placeholder="Bairro..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="city" placeholder="Cidade..." required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="state" placeholder="Estado..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phone" placeholder="Celular..." required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phoneHouse" placeholder="Telefone..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="submit" value="Salvar" class="btnRegister" name="cadastrar">
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="submit" value="Excluir Perfil" class="btnRegister" name="cadastrar">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div> <!-- END DIV BACKGROUND -->


<?php

   require_once "view/includes/footer-Registers.php";
?>
    