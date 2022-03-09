<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SG Telecom </title>
    <form class="form-horizontal" method="GET" action="Cadastra_Fabricante.php" name="frm">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<script src="//code.jquery.com/jquery.js">
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include'BarraMenu.php';?>
<label><h4>Cadastro de Usuário</h4></label>
</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >
    <h2><input id="nome"type="text" name="nome" placeholder="Nome"  ></h2>
    <h2><input id="id"type="text" name="id" placeholder="ID do Fabricante"  ></h2>
    <h2><input id="separador"type="text" name="separador" placeholder="Caracter separador do Fabricante"  ></h2>
    <input type="submit" value="OK">
        <br>
    </div>
</span>
    </div>
    </div>
</form>

</html>