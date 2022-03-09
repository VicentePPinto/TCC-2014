<html>
<head>
<title>SG Telecom</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Incluindo o JavaScript do Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<?php include"BarraMenu.php";?>
<h2>Cadastro de Usuário</h2>
<div class="container">
      <div class="row-fluid">
        <div class="offset1 span4">

          <form  method="GET"  class="form-horizontal" action="validaUser.php" method="post">
			 	
		   <fieldset  >

              <div class="control-group center">
                <div class="l">Nome</div> <div class="field"><input type="text" id="txtNome" name="txtNome"></div>
              </div>
              <div class="control-group center">
                <div class="2">E-mail</div> <div class="field"><input type="text" id="txtEmail" name="txtEmail"></div>
              </div>
              <div class="control-group center">
                <div class="3">Login</div> <div class="field"><input type="text" id="txtLogin" name="txtLogin" ></div>
              </div>
			  <div class="control-group center">
                <div class="4">Senha</div> <div class="field"><input type="password" id="txtSenha" name="txtSenha" ></div>
              </div>
			  Perfil
			  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="perfil" id="radios-0" value="operador" checked="checked">
      Operador
    </label>
	</div>
	<div class="radio">
    <label for="radios-1">
      <input type="radio" name="perfil" id="radios-1" value="administrador">
      Administrador
    </label>
	</div>
			  <div class="control-group">
  <label class="control-label" for="ok"></label>
  <div class="controls">
    <button id="ok" name="ok" class="btn btn-inverse">OK</button>
  </div>
</div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

<div class="modal-footer span9 badge " >
By Vicente Pinto</div>

