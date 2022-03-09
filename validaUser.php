
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
 * Date: 13/11/13
 * Time: 21:44
 */

$nome= $_GET["nome"];
$email= $_GET["email"];
$login=$_GET["login"];
$senha=$_GET["senha"];
$perfil=$_GET["perfil"];
include "/model/Usuario.php";
$user= new Usuario($nome,$email,$login,$senha,$perfil,'1');
$user->cadastraUser();
?>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>

<div class="span4"  >
<div class="alert alert-success">
    Usuário cadastrado com sucesso!
</div>

</html>