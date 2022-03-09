<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SG Telecom </title>
    <form class="form-horizontal" method="GET" action="validaUser.php" name="frm">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//code.jquery.com/jquery.js">
    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<?php include'BarraMenu.php';?>


<label><h4>Cadastro de Usuário</h4></label>

</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-important">
<div class="span4"  >


    <h2><input id="nome"type="text" name="nome" placeholder="Nome"  ></h2>
    <h2><input id="email"type="text" name="email" placeholder="e-mail"  ></h2>
    <h2><input id="login"type="text" name="login" placeholder="Login"  ></h2>
    <h2><input id="senha"type="password" name="senha" placeholder="Senha"  ></h2>
   <h3> Perfil</h3>
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

        <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>