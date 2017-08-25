<?php

/**
 *  Project: Mais Pet
 *  Created: 25/08
 *  User: Jeniffer Carvalho
 *  Usage: Tela listagem dos usuarios administrativos
 */


    if ( isset($_SESSION['usuario']) ) : 
    $success = true;
    require_once "Model/UsuariosAdministrativos.php";
    require_once "view/includes/head.php";
    $usuarioAdm = new UsuariosAdministrativos();
?>
<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Mais<span>Pet</span></span><i class="zmdi zmdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">Painel Administrativo</h4>
                        </li>
                    </ul>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="view/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                    </div>
                    <h5><a href="#">Maurício Lopes</a> </h5>
                    <ul class="list-inline">
                        <li>
                            <a href="#" >
                                <i class="zmdi zmdi-settings"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-custom">
                                <i class="zmdi zmdi-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="?pagina=painel" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Inicio </span> </a>
                        </li>
                        <li>
                            <a href="?pagina=administrativos" class="waves-effect"><i class="zmdi zmdi zmdi-accounts-add"></i> <span> Ver usuários </span> </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- Left Sidebar End -->


        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="dropdown pull-right">
                                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Ir para o site</a></li>
                                    </ul>
                                </div>


                                <?php
                                    if(isset($_GET['acao']) &&  $_GET['acao'] == 'editar') : 
                                        $id = (int)$_GET['id'];
                                        $resultado = $usuarioAdm->find($id);
                                ?>
                                <h4 class="header-title m-t-0 m-b-30">Editar usuário</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-horizontal" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nome</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="Nome.." name="nome"  value="<?php echo $resultado->nome ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" required placeholder="Email" name="email"   value="<?php echo $resultado->email ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">CPF</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="000.000.000-00" name="cpf"  value="<?php echo $resultado->cpf ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Login</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="Login" name="login"  value="<?php echo $resultado->login ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Senha</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" required placeholder="*******" name="senha"  value="<?php echo $resultado->senha ?>">
                                                </div>
                                            </div>

                                            <?php if($success == true) : ?>

                                            <p class='bg-success' style="margin-left: 100px; text-align: center; color: #fff" >Alteração realizada com Sucesso!</p>

                                            <?php endif; ?>

                                            <button style="margin-left: 100px" type="submit" class="btn btn-purple waves-effect waves-light" name="atualizar">Atualizar</button>
                                        </form>
                                    </div><!-- end col -->
                                </div><!-- end row -->  

                                <?php  else :?>  

                                <h4 class="header-title m-t-0 m-b-30">Todos os usuarios cadastrados</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive"> 
                                          <table class="table table-striped m-0"> 
                                          <thead> 
                                            <tr> 
                                              <th>#</th> 
                                              <th>Nome</th> 
                                              <th>E-mail</th> 
                                              <th>CPF</th>   
                                              <th>Login</th>           
                                              <th>senha</th>   
                                              <th>Ações</th>  
                                          </tr> 
                                          </thead> 
                                          <tbody> 
                                            <?php foreach( $usuarioAdm->findAll() as $key => $valor) : ?>
                                             <tr> 
                                               <th scope="row"><?php echo $valor->id; ?></th> 
                                               <td><?php echo $valor->nome ?> </td> 
                                               <td><?php echo $valor->email?> </td>
                                               <td><?php echo $valor->cpf?> </td>
                                               <td><?php echo $valor->login?> </td>
                                               <td><?php echo $valor->senha?> </td>
                                               <td>
                                                    <a href="?pagina=administrativos&acao=editar&id=<?php echo $valor->id ?>">Editar </a> |

                                                    <a href="?pagina=administrativos&acao=deletar&id=<?php echo $valor->id ?>" > Deletar</a>
                                               </td> 
                                             </tr> 
                                           <?php endforeach;?>
                                          </tbody> 
                                          </table> 
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <?php endif; ?>  
                            
                            </div>
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<?php
    require_once "view/includes/footer.php";
    endif; 
?>