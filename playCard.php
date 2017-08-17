<?php

include ("header.php"); ?>

  <section class="searchList">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo">
            <h1>LOGO</h1>
          </div>
          <div class="filters">
            <form action="#" class="formFilters">
              <label>Informações do Proprietário</label>
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
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="sliderPadding">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img/astor3.JPG" alt="Astor">
                      </div>
                      <div class="item">
                        <img src="img/astor3.JPG" alt="Astor">
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
                <button class="btn btn-default btnCard">Avaliar</button>
              </div>
              <div class="col-md-4 col-sm-12">
                <button class="btn btn-default btnCard">Denunciar</button>
              </div>
              <div class="col-md-4 col-sm-12">
                <button class="btn btn-default btnCard">Detalhes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space"></div>
    </div>
  </section>

<?php

include ("footer.php"); ?>
		