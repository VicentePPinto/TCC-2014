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


<label><h4>Cadastro de Vlan</h4></label>

</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >


    <div class="control-group"  >


        <h2><input id="tag"type="text" name="tag" placeholder="Tag"  ></h2>
        <h2><input id="descricao"type="text" name="descricao" placeholder="Descrição"  ></h2>
        <div class="btn-group">
            <a href="ScanerVlan.php" class="btn btn-inverse ">Interface</a>
            <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>