<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/02/14
 * Time: 10:17
 */
?>
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

<?php include'BarraMenu.php';

$cliente=@$_GET["cliente"];
$hr_abertura= @$_GET["hr_abertura"];
$hr_encerramento=@$_GET["hr_encerramento"];
$numero=@$_GET["numero"];
$operadora=@$_GET["operadora"];
$observacao=@$_GET["observacao"];
include_once "Chamado.php";
$chamado= new Chamado();
$chamado->setCliente($cliente);
$chamado->setAbertura($hr_abertura);
$chamado->setEncerramento($hr_encerramento);
$chamado->setNumero($numero);
$chamado->setObeservacao($observacao);
$chamado->getUsuario($_SESSION["Matricula"]);
$chamado->setOperadora($operadora);
$chamado->Cadastra_Chamado();
