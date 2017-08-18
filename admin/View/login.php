<?php
    session_start();
    session_destroy();

//classes

include "../admin/classes/DB.php";
include "../admin/classes/UsuariosAdministrativos.php";    

if( isset($_POST['fazerLogin']) ) {

    $user = $_POST['usuario'];
    $pass = $_POST['senha'];

    $usuarioAdm = new UsuariosAdministrativos();
    $resultado = $usuarioAdm->login($user, $pass);

    echo $resultado->nome;              

    if ( $resultado ) {

        $_SESSION['login'] = $_POST['login']; 

        header('Location: http://localhost/maispet/frontend/index.html');

    } else {
        echo "<p>Erro ao realizar login, verifique os campos e tente novamente.</p>"; 
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>:: Área Administrativa :: Acesso Restrito</title>

        <link href="assets/plugins/summernote/dist/summernote.css" rel="stylesheet" /><!-- Custom box css -->
        <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

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

    <div class="content-page" style="margin: 2em auto 0; width: 500px ">
        <div class="content">
            <div class="container">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12" style="float: none;">
                            <h4 class="m-t-0 header-title"><b>Login</b></h4>
                            <p class="text-muted m-b-30 font-13">
                               Preencha os dados abaixo para fazer o login
                            </p>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="seuemail@conta.com" name="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="senha">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Lembrar
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light" name="fazerLogin">Enviar</button>
                            </form>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>
 </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/pages/jquery.inbox.js"></script>

        <!--form validation init-->
        <script src="assets/plugins/summernote/dist/summernote.min.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="assets/plugins/custombox/dist/legacy.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>