<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
?>


  <section class="searchList">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="ownerInformation">
            <div class="ownerPicture">
              <img src="img/astor.png" class="ownerPicture">
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <ul class="OwnerSocialMedia">
                  <li class="facebookIcon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li class="twitterIcon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li class="googlePlusIcon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                  <li class="instagramIcon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <h4>Informações do Propritário</h4>
            <hr>
            <div class="row paddingInformationContact">
              <div class="col-md-2 col-sm-2">
                <i class="fa fa-user contactIcons" aria-hidden="true"></i>
              </div>
              <div class="col-md-10 col-sm-10">
                <p>Robson Caetano</p>
              </div>
            </div>
            <div class="row paddingInformationContact">
              <div class="col-md-2 col-sm-2">
                <i class="fa fa-phone contactIcons" aria-hidden="true"></i>
              </div>
              <div class="col-md-10 col-sm-10">
                <p>+55 19 98698-0548</p>
              </div>
            </div>
            <div class="row paddingInformationContact">
              <div class="col-md-2 col-sm-2">
                <i class="fa fa-envelope contactIcons" aria-hidden="true"></i>
              </div>
              <div class="col-md-10 col-sm-10">
                <p>robsoncaetano@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="playCard">
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <div class="featuredPicture">
                  <img src="img/astor.png" class="paddingCard">
                </div>
              </div>
              <div class="col-md-6 col-sm-8">
                <div class="featuredData">
                  <h2>Astor Telus</h2>
                  <hr>
                  <div style="clear: both;"></div>
                  <div class="age">
                    <i class="fa fa-hourglass-half"></i><h3>2 Anos</h3>
                  </div>
                  <div class="brood">
                    <i class="fa fa-paw"></i><h3>Pastor Alemão</h3>
                  </div>
                  <div class="neighborhood">
                    <i class="fa fa-compass"></i><h3>Nova Campinas</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="sliderPadding">
                  <div id="myCarousel" class="carousel slide sliderPosition" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img/astor1.JPG" alt="Astor">
                      </div>
                      <div class="item">
                        <img src="img/astor2.JPG" alt="Astor">
                      </div>
                      <div class="item">
                        <img src="img/astor3.JPG" alt="Astor">
                      </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row playCardActions">
              <div class="col-md-4 col-sm-12">
                <button class="btn btnCard playCardActionsButtons">Avaliar</button>
              </div>
              <div class="col-md-4 col-sm-12">
                <button class="btn btnCard playCardActionsButtons">Denunciar</button>
              </div>
              <div class="col-md-4 col-sm-12">
                <button class="btn btnCard playCardActionsButtons">Detalhes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space"></div>
    </div>
  </section>

<?php

   require_once "view/includes/footer-Registers.php";
?>