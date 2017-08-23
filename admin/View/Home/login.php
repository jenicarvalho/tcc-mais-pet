<?php
    $success = true;
    require_once "Controller/LoginController.php";
    require_once "view/includes/head.php";
?>


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
                                <?php if($success == false) : ?>

                                <p class='bg-danger' style="text-align: center; color: #fff" >Dados incorretos</p>

                                <?php endif; ?>                                
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
<?php
    require_once "view/includes/footer.php";
?>