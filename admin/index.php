<?php

  function __autoload($class_name) {
    require_once 'Controller/' . $class_name . '.php';
  }

  $success = false;
  require_once("Controller/UsuariosAdministrativos.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="view/assets/images/favicon.ico">

        <!-- App title -->
        <title>:: Área Administrativa :: Acesso Restrito</title>

        <link href="view/assets/plugins/summernote/dist/summernote.css" rel="stylesheet" /><!-- Custom box css -->
        <link href="view/assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

        <!-- App CSS -->
        <link href="view/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="view/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="view/assets/js/modernizr.min.js"></script>

    </head>


<body class="fixed-left">

    <!-- Begin page -->
 <div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left" style="width: 100%">
            <a href="index.html" class="logo"><span>Mais<span>PET</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>
    </div>

    <div class="content-page" style="margin: 2em auto 0; width: 700px">
        <div class="content">
            <div class="container">
                <div class="card-box">
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

                                <h4 class="header-title m-t-0 m-b-30">Cadastro de usuário administrativo</h4>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-horizontal" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nome</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="Nome.." name="nome">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" required placeholder="Email" name="email" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">CPF</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="000.000.000-00" name="cpf">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Login</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" required placeholder="Login" name="login">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Senha</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" required placeholder="*******" name="senha">
                                                </div>
                                            </div>

                                            <?php if($success == true) : ?>

                                            <p class='bg-success' style="margin-left: 100px; text-align: center; color: #fff" >Inserido com Sucesso!</p>

                                            <?php endif; ?>

                                            <button style="margin-left: 100px" type="submit" class="btn btn-purple waves-effect waves-light" name="cadastrar">Cadastrar</button>
                                        </form>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="view/assets/js/jquery.min.js"></script>
        <script src="view/assets/js/bootstrap.min.js"></script>
        <script src="view/assets/js/detect.js"></script>
        <script src="view/assets/js/fastclick.js"></script>
        <script src="view/assets/js/jquery.slimscroll.js"></script>
        <script src="view/assets/js/jquery.blockUI.js"></script>
        <script src="view/assets/js/waves.js"></script>
        <script src="view/assets/js/jquery.nicescroll.js"></script>
        <script src="view/assets/js/jquery.scrollTo.min.js"></script>
        <script src="view/assets/pages/jquery.inbox.js"></script>

        <!--form validation init-->
        <script src="view/assets/plugins/summernote/dist/summernote.min.js"></script>

        <!-- Modal-Effect -->
        <script src="view/assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="view/assets/plugins/custombox/dist/legacy.min.js"></script>

        <!-- App js -->
        <script src="view/assets/js/jquery.core.js"></script>
        <script src="view/assets/js/jquery.app.js"></script>
    </body>
</html>