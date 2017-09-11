<?php

    require_once "view/includes/head.php";
    require_once "view/includes/body.php";
    require_once "view/includes/navMenu.php";
?>

  <section class="searchList">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo">
            <h1>LOGO</h1>
          </div>
          <div class="filters">
            <form action="#" class="formFilters">
              <select name="Idade">
                <option>2-3 Anos</option>
                <option>3-4</option>
              </select>
              <div style="clear: both;"></div>
              <select name="Tipagem">
                <option>Tipo 1</option>
                <option>Tipo 2</option>
              </select>
              <div style="clear: both;"></div>
              <select name="Quantidade de Crias">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <div style="clear: both;"></div>
              <select name="Popularidade">
                <option>Normal</option>
                <option>Boa</option>
                <option>Ótima</option>
              </select>
              <div style="clear: both;"></div>
              <select name="Pedigree">
                <option>Sim</option>
                <option>Não</option>
              </select>
              <div style="clear: both;"></div>
              <input type="submit" value="FILTRAR" class="btnFilter">
            </form>
          </div>
        </div>
        <div class="col-md-9">
          <div class="playCard">
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <div class="featuredPicture">
                  <img src="img/astor.png">
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
          </div>
          <div class="playCard">
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <div class="featuredPicture">
                  <img src="img/astor.png">
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
          </div>
          <div class="playCard">
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <div class="featuredPicture">
                  <img src="img/astor.png">
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
          </div>
        </div>
      </div>
      <div class="space"></div>
    </div>
  </section>

<?php

   require_once "view/includes/footer-Registers.php";
?>
    