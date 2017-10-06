<?php

/**
 *  Project: Mais Pet
 *  Created: 29/09
 *  User: Jeniffer Carvalho
 *  Usage: Tela listagem dos animals
 */


    if ( isset($_SESSION['usuario']) ) : 
    $success = false;
    $successDelete = false;
    require_once "Model/Animais.php";
    require_once "view/includes/head.php";
    require_once "Controller/AnimaisController.php"
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


        <?php require_once("sidebar.php") ?>


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
                                        $resultado = $animal->find($id);
                                ?>
                                <h4 class="header-title m-t-0 m-b-30">Editar Anuncio</h4>
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
                                                <label class="col-md-2 control-label">Raça</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="000.000.000-00" name="cpf"  value="<?php echo $resultado->cpf ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tipo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="celular" name="celular"  value="<?php echo $resultado->celular ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Porte</label>
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

                                <h4 class="header-title m-t-0 m-b-30">Todos os anúncios cadastrados</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive"> 
                                          <table class="table table-striped m-0"> 
                                          <thead> 
                                            <tr> 
                                              <th>#</th> 
                                              <th>Nome</th> 
                                              <th>Porte</th> 
                                              <th>Sexo</th>  
                                              <th>Raça</th>   
                                              <th>Ação</th>   
                                          </tr> 
                                          </thead> 
                                          <tbody> 
                                            <?php foreach( $animal->findAll() as $key => $valor) : ?>
                                             <tr> 
                                               <th scope="row"><?php echo $valor->idAnimal; ?></th> 
                                               <td><?php echo $valor->nomeAnimal ?> </td> 
                                               <td><?php echo $valor->porte?> </td>
                                               <td><?php echo $valor->sexo?> </td>
                                               <td><?php echo $valor->raca?> </td>
                                               <td>
                                                    <a href="?pagina=anuncios&acao=editar&id=<?php echo $valor->id ?>">Editar </a> |

                                                    <a href="?pagina=anuncios&acao=deletar&id=<?php echo $valor->id ?>" > Deletar</a>
                                               </td> 
                                             </tr> 
                                           <?php endforeach;?>

                                           <?php if($successDelete == true) : ?>
                                          
                                           <p class='bg-success' style="text-align: center; color: #fff" >Deletado com Sucesso!</p>

                                           <?php endif; ?>
                                          </tbody> 
                                          </table> 
                                        </div>
                                    </div><!-- end col -->
                                </div>  
                            </div>
                                <?php endif; ?>  
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