<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
?>


    <section class="logoAndSearch">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="logo">
                  <img src="assets/img/logo.png" class="logoLightHome">
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="search">
                  <form class="formSearch" action="#">
                    <input name="search" class="inputSearch" placeholder="Faça sua Busca">
                    <button type="submit" name="send" class="btnSearch">BUSCAR</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="arrowDown">
                  <a href="#"><i class="fa fa-arrow-circle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            
          </div>
        </div>
      </div>
    </section>
  </div> <!-- END DIV BACKGROUND -->

    <section class="feautures">
      <div class="container">
        <div class="sectionTitle">
          <h2>Diferenciais</h2>
          <hr/>
        </div>
        <div class="row phonePadding">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="feauturePhoneArea">
              <img class="feauturePhone" src="assets/img/phone.png">
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </section>


<?php

   require_once "view/includes/footer-Registers.php";
?>
    