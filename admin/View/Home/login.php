<?php
    $success = true;
    $resultado = '';
    require_once "Controller/LoginController.php";
    require_once "view/includes/head.php";
?>


        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><img src="view/assets/images/logo-dark.png" style="width: 100px; margin-bottom: 20px"></a>
                <h5 class="text-muted m-t-0 font-600">: Área Administrativa :</h5>
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Login</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="" method="post">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="seuemail@conta.com" name="usuario" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="senha" required>

                                <?php if($success == false) : ?>
                                <p class='bg-danger' style="text-align: center; color: #fff; margin-top: 10px" >Dados incorretos</p>
                                <?php endif; ?>  
                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">     
                                <button type="submit" class="btn btn-custom btn-bordred btn-block waves-effect waves-light" name="fazerLogin">Enviar</button>
                            </div>                           
                        </div>
                    </form>

                </div>
            </div>            
        </div>
        <!-- end wrapper page -->

<?php
    require_once "view/includes/footer.php";
?>