<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SG Telecom </title>
    <form class="form-horizontal" method="GET" action="FrameInterfaceStatus.php" name="frm">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//code.jquery.com/jquery.js">
    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<?php include'BarraMenu.php';?>


<label><h4>Cadastro de Operadora</h4></label>

</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-important">
<div class="span4"  >


    <div class="control-group"  >

        <h2><input id="cnpj"type="text" name="cnpj" placeholder="CNPJ"  ></h2>

        <h2><input id="nome"type="text" name="Nome" placeholder="Nome"  ></h2>
        <h2><input id="idOperadora"type="text" name="idOperadora" placeholder="Código DDD"  ></h2>


        <input type="submit" value="OK">
        <input type="submit" value="Contato">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>