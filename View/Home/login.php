<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
?>


    <section class="signUp" id="loginPage">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="breadCrumbHeader">
              <ul>
                <li class="breadCrumbList">Home</li>
                <li class="breadCrumbList">/</li>
                <li class="breadCrumbList">Login</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row formArea" method="post">
          <div class="col-md-4 col-sm-12"></div>
          <div class="col-md-4 col-sm-12">
            <h1 class="titleHeaderPageLogin">Login (Proprietário)</h1>
            <form class="formlogin">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="text" class="inputRegister" placeholder="Login...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="password" class="inputRegister" name="birthdayDate" placeholder="Senha...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="submit" value="Entrar" class="btnRegister">
                </div>
              </div>
            </form>
            <i class="fa fa-lock spanLockerIcon"></i><span class="spanLocker">Suas informações estão seguras conosco!</span>
          </div>
          <div class="col-md-4 col-sm-12"></div>
        </div>
      </div>
    </section>


<?php

   require_once "view/includes/footer-Registers.php";
?>
    