<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SG Telecom </title>
    <form class="form-horizontal" method="GET" action="Cadastra_Cliente.php" name="frm">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//bootstrap/js/jquery-1.10.2.min.js">
    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<?php include'BarraMenu.php';?>


<label><h4>Cadastro de Cliente</h4></label>

<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#telefone").mask("(99)9999-9999");
        $("#cnpj").mask("99.999.999/9999-99");
        $("#cep").mask("99999-999");
        $("#data").mask("99-99-9999");
    });
</script>
</head>

</head>

    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >


    <div class="control-group"  >
        <h2><input id="cnpj"type="text" name="cnpj" placeholder="CNPJ"  ></h2>
        <h2><input id="nome"type="text" name="nome" placeholder="Nome"  ></h2>
        <h2><input id="razaoSocial"type="text" name="razaoSocial" placeholder="Razão Social"  ></h2>
        <h2><input id="data"type="text" name="data" placeholder="Data do Contrato"  ></h2>
        <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>