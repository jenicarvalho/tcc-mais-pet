<?php 
  $success = false;
  require_once("Controller/ProprietariosController.php");
  require_once "view/includes/header.php";
?>

    <section class="signUp">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="breadCrumbHeader">
              <ul>
                <li class="breadCrumbList">Home</li>
                <li class="breadCrumbList">/</li>
                <li class="breadCrumbList">Cadastro</li>
              </ul>
            </div>
            <h1 class="titleHeaderPage">Cadastro (Proprietário)</h1>
          </div>
        </div>
        <div class="row formArea" method="post">
          <div class="col-md-6 col-sm-12">
            <form class="contact_form">
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="text" class="inputRegister" placeholder="Nome Completo...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="birthdayDate" placeholder="Data de Nascimento...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <select name="" id="sex"  class="inputRegister" >
                    <option value="">Sexo</option>
                    <option value="f">Feminino</option>
                    <option value="m">Masculino</option>
                  </select>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-7 col-sm-12">
                  <input type="text" class="inputRegister" name="street" placeholder="Endereço...">
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="neighborhood" placeholder="Bairro...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="city" placeholder="Cidade...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <select name="" id="sex" class="inputRegister" name="state">
                    <option value="">Estado</option>
                    <option value="sp">São Paulo</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="mg">Minas Gerais</option>
                  </select>
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-4 col-sm-12">
                  <input type="text" class="inputRegister" name="document" placeholder="CPF...">
                </div>
                <div class="col-md-5 col-sm-12">
                  <input type="text" class="inputRegister" name="email" placeholder="E-mail...">
                </div>
                <div class="col-md-3 col-sm-12">
                  <input type="text" class="inputRegister" name="senha" placeholder="Senha...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phone" placeholder="Celular...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <input type="text" class="inputRegister" name="phoneHouse" placeholder="Telefone...">
                </div>
              </div>
              <div class="row inputLine">
                <div class="col-md-12 col-sm-12">
                  <input type="submit" value="Enviar" class="btnRegister">
                </div>
              </div>
            </form>
            <i class="fa fa-lock spanLockerIcon"></i><span class="spanLocker">Suas informações estão seguras conosco!</span>
          </div>
        </div>
      </div>
    </section>

<?php require_once "view/includes/footer.php";?>
		