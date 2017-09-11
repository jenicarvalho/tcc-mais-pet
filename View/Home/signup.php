<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
?>

    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="breadCrumbHeader">
              <ul>
                <li class="breadCrumbList">Home</li>
                <li class="breadCrumbList">/</li>
                <li class="breadCrumbList">Cadastro</li>
              </ul>
            </div>
            <h1 class="titleHeaderPage">Cadastro (Proprietário)</h1>
          </div>
        </div>
        <div class="row formArea" method="post">
          <div class="col-md-6 col-sm-12">
            <form class="contact_form">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="text" class="inputRegister" placeholder="Nome Completo...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="birthdayDate" placeholder="Data de Nascimento...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="sex" placeholder="Sexo...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-7 col-sm-12">
                  <input type="text" class="inputRegister" name="street" placeholder="Endereço...">
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="neighborhood" placeholder="Bairro...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="city" placeholder="Cidade...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="state" placeholder="Estado...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-7 col-sm-12">
                  <input type="text" class="inputRegister" name="document" placeholder="CPF...">
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="E-mail" placeholder="E-mail...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phone" placeholder="Celular...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phoneHouse" placeholder="Telefone...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="submit" value="Enviar" class="btnRegister">
                </div>
              </div>
            </form>
            <i class="fa fa-lock spanLockerIcon"></i><span class="spanLocker">Suas informações estão seguras conosco!</span>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="assets/img/pcDog.png" class="pcDog">
          </div>
        </div>
      </div>
    </section>

<?php

   require_once "view/includes/footer-Registers.php";
?>
		