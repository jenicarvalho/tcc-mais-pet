<aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
              
              <hr class="visible-sm visible-xs lg">

              <!-- Widget :: Categories -->
              <div class="widget_categories widget widget__sidebar">
                <h3 class="widget-title">Dados do usuário</h3>
                <div class="widget-content dados-usuario">

                  <div class="row paddingInformationContact">
                    <div class="col-md-1 col-sm-2">
                      <i class="fa fa-user contactIcons" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10">
                      <p><?php echo utf8_encode($resultado->nome) ?></p>
                    </div>
                  </div>
                  <div class="row paddingInformationContact">
                    <div class="col-md-1 col-sm-2">
                      <i class="fa fa-phone contactIcons" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10">
                      <p><?php echo utf8_encode($resultado->celular) ?></p>
                    </div>
                  </div>
                  <div class="row paddingInformationContact">
                    <div class="col-md-1 col-sm-2">
                      <i class="fa fa-envelope contactIcons" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10">
                      <p><?php echo utf8_encode($resultado->email) ?></p>
                    </div>
                  </div>            
                  <div class="row paddingInformationContact">
                    <div class="col-md-1 col-sm-2">
                      <i class="fa fa-pencil contactIcons" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10">
                      <p><a href="?pagina=painel_perfil">Editar</a></p>
                    </div>
                  </div>         
                  <div class="row paddingInformationContact">
                    <div class="col-md-1 col-sm-2">
                      <i class="fa fa-sign-out contactIcons" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 col-sm-10">
                      <p><a href="?logout=true">Sair</a></p>
                    </div>
                  </div>

                </div>
              </div>

              <div class="latest-posts-widget widget widget__sidebar">
                <h3 class="widget-title">Últimos Anúncios</h3>
                <div class="widget-content">
                  <ul class="latest-posts-list">
                    <li>
                      <figure class="thumbnail"><a href="#"><img src="assets/images/animais/dog.png" alt="" width="60"></a></figure>
                      <span class="date">Franklin</span>
                      <h5 class="title"><a href="#">Macho, 2 anos</a></h5>
                    </li>
                    <li>
                      <figure class="thumbnail"><a href="#"><img src="assets/images/animais/dog.png" alt="" width="60"></a></figure>
                      <span class="date">Franklin</span>
                      <h5 class="title"><a href="#">Macho, 2 anos</a></h5>
                    </li>
                    <li>
                      <figure class="thumbnail"><a href="#"><img src="assets/images/animais/dog.png" alt="" width="60"></a></figure>
                      <span class="date">Franklin</span>
                      <h5 class="title"><a href="#">Macho, 2 anos</a></h5>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>