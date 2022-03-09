<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 13/02/14
 * Time: 19:42
 */
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SG Telecom </title>
    <form class="form-horizontal" method="GET" action="Cadastra_Mascara.php" name="frm">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<script src="//code.jquery.com/jquery.js">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include'BarraMenu.php';?>
<label><h4>Cadastro de Máscara</h4></label>
</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >
    <h2><input id="descricao"type="text" name="descricao" placeholder="Campo de Mascara"  ></h2>
       <input type="submit" value="OK">
    <br>
</div>
</span>
    </div>
    </div>
</form>

</html>