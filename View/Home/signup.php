<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";

    $success = false;
    require_once("Controller/ProprietariosController.php");

?>

    <section class="logoAndSearch">
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
            <form class="contact_form" method="post">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="text" class="inputRegister" placeholder="Nome Completo..." name="nome" required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="birthdayDate" placeholder="Data de Nascimento..." required>
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="sex" placeholder="Sexo..." required>
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
                <div class="col-md-4 col-sm-12">
                  <input type="text" class="inputRegister" name="document" placeholder="CPF..." required>
                </div>
                <div class="col-md-4 col-sm-12">
                  <input type="email" class="inputRegister" name="email" placeholder="E-mail..." required>
                </div>
                <div class="col-md-4 col-sm-12">
                  <input type="password" class="inputRegister" name="pass" placeholder="Senha..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="submit" value="Enviar" class="btnRegister" name="cadastrar">
                </div>
              </div>
            </form>

            <?php if($success == true) : ?>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <p class='bg-success'>Cadastro Realizado!</p>
                </div>
              </div>
            <?php endif; ?>

            <i class="fa fa-lock spanLockerIcon"></i><span class="spanLocker">Suas informações estão seguras conosco!</span>
          </div>
          <div class="col-md-6 col-sm-12"> 
          
          </div>
        </div>
      </div>
    </section>

<?php

   require_once "view/includes/footer-Registers.php";
?>
		