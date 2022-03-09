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


<label><h4>Cadastro de Link</h4></label>

</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >


    <div class="control-group"  >


        <h2><input id="cliente"type="text" name="cliente" placeholder="Cliente"  ></h2>
        <h2><input id="ativacao"type="text" name="nome" placeholder="Data de ativação"  ></h2>
        <h2><input id="desativacao"type="text" name="desativacao" placeholder="Data de desativação"  ></h2>
        <h2><input id="designador"type="text" name="designador" placeholder="Designador"  ></h2>
        <h2><input id="interface"type="text" name="interface" placeholder="Interface"  ></h2>
        <h2><input id="operadora"type="text" name="operadora" placeholder="Operadora"  ></h2>
        <h2><input id="velocidade"type="text" name="velocidade" placeholder="Velociadade"  ></h2>


            <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>