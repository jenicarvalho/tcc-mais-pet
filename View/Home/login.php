<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
    require_once "Controller/LoginController.php";
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
            <h1 class="titleHeaderPageLogin">Login</h1>
            <form class="formlogin" method="post">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="email" class="inputRegister" name="usuario" placeholder="Login..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="password" class="inputRegister" name="senha" placeholder="Senha..." required>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="submit" value="Entrar" class="btnRegister" name="fazerLogin">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-sm-12"></div>
        </div>
      </div>
    </section>


<?php

   require_once "view/includes/footer-Registers.php";
?>
    