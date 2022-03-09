
<html>
<head>
    <title>SG Telecom</title>
    <form method="GET" action="validarLogin.php" name="frm"></form>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="bootstrap/js/jquery-1.10.2.min.js">
    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<?php include"BarraMenu.php";?>

<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 13/02/14
 * Time: 19:53
 */
$descricao= @$_GET["descricao"];
include "/model/Mascara.php";

$mask=new Mascara();
$mask->setDescricao($descricao);
    $mask->InsereMascara();
?>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>

<div class="span4"  >
<div class="alert alert-success">
Máscara cadastrada com sucesso!
</div>

</html>
