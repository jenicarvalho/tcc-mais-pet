<?php

/**
 *  Project: Mais Pet
 *  Created: 23/08
 *  User: Jeniffer Carvalho
 *  Usage: Tela inicial do sistema logado
 */

if ( isset($_SESSION['usuario']) ) : ?>

<?php
    $success = true;
    require_once "Controller/LoginController.php";
    require_once "view/includes/head.php";
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



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">

                        <div class="col-md-6">
                    		<div class="card-box">
                    			<h4 class="header-title m-t-0 m-b-30">Novos Cadastros no Site</h4>
                                <div class="widget-box-2">
                                    <div class="widget-detail-2">
                                        <span class="badge badge-success pull-left m-t-20">32% <i class="zmdi zmdi-trending-up"></i> </span>
                                        <h2 class="m-b-0"> 200 </h2>
                                        <p class="text-muted m-b-25">Efetuados essa semana</p>
                                    </div>
                                    <div class="progress progress-bar-success-alt progress-sm m-b-0">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                    		</div>
                        </div><!-- end col -->

                        <div class="col-md-6">
                    		<div class="card-box">
                    			<h4 class="header-title m-t-0 m-b-30">Pedidos de Intervenção no Cruzamento</h4>

                                <div class="widget-box-2">
                                    <div class="widget-detail-2">
                                        <span class="badge badge-pink pull-left m-t-20">20% <i class="zmdi zmdi-trending-up"></i> </span>
                                        <h2 class="m-b-0"> 30 </h2>
                                        <p class="text-muted m-b-25">Pedidos feitos esse mês</p>
                                    </div>
                                    <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                                        <div class="progress-bar progress-bar-pink" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                    		</div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->

                    <div class="row">
                    	<h2 class="page-title">Perfis dos novos cadastrados</h2>
                        <div class="col-lg-3 col-md-6">
                            <div class="card-box widget-user">
                                <div>
                                    <img src="view/assets/images/users/avatar-3.jpg" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">
                                        <h4 class="m-t-0 m-b-5 font-600">Beatriz C.</h4>
                                        <p class="text-muted m-b-5 font-13">beatrizc@gmail.com</p>
                                        <small class="text-warning"><b>(19) 0000-0000</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-3 col-md-6">
                            <div class="card-box widget-user">
                                <div>
                                    <img src="view/assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">
                                        <h4 class="m-t-0 m-b-5 font-600"> Michael Z.</h4>
                                        <p class="text-muted m-b-5 font-13">michaelz@gmail.com</p>
                                        <small class="text-warning"><b>(19) 0000-0000</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-3 col-md-6">
                            <div class="card-box widget-user">
                                <div>
                                    <img src="view/assets/images/users/avatar-1.jpg" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">
                                        <h4 class="m-t-0 m-b-5 font-600">Marcelo M.</h4>
                                        <p class="text-muted m-b-5 font-13">marcelom@gmail.com</p>
                                        <small class="text-warning"><b>(19) 0000-0000</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-3 col-md-6">
                            <div class="card-box widget-user">
                                <div>
                                    <img src="view/assets/images/users/avatar-10.jpg" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">
                                        <h4 class="m-t-0 m-b-5 font-600">Bruno S.</h4>
                                        <p class="text-muted m-b-5 font-13">brunos@gmail.com</p>
                                        <small class="text-warning"><b>(19) 0000-0000</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2017 © MaisPet.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

<?php
    require_once "view/includes/footer.php";
?>






<?php 
	else :
	echo "Sem acesso";
endif;