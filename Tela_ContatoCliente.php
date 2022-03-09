<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
    <title>SG Telecom</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />

    <script src="jquery.maskedinput-1.3.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#telefone").mask("(99)9999-9999");
            $("#celular").mask("(99)9999-9999");

        });
    </script>
</head>

<body>
<script src="bootstrap/js/bootstrap.min.js"></script>

<?php include "BarraMenu.php";
include '/model/Cliente.php';
$cliente= new Cliente();
$arrayclientes=$cliente->Todos_Clientes();

$idCliente=@$_GET["idCliente"];
$nome=@$_GET["nome"];
$email=@$_GET["email"];
$telefone=@$_GET["telefone"];
$celular=@$_GET["celular"];
$cargo=@$_GET["cargo"];
include "/model/Contato_Cliente.php";

if ($nome != ""){
    echo"teste";
    $contato= new Contato_Cliente();
    $contato->setNome($nome);
    $contato->setCargo($cargo);
    $contato->setCelular($celular);
    $contato->setEmail($email);
    $contato->getIdCliente($idCliente);
    $contato->setTelefone($telefone);
    $contato->cadastraContatoCliente();
    echo"<div class=alert alert-success> Contato Cadastrado</div>";
}

?>
<div class="container-fluid">
    <div class="span12">


    </div>
</div>


<label><h4>Contato de Cliente</h4></label>

<form class="form-horizontal" method="post" action="Tela_ContatoCliente.php" name="frm">
    <div class="container-fluid">
        <div class="span4" >
        </div>
        <span class="badge badge-warning">
<div class="span4"  >

    <div class="control-group"  >
        <select name="idCliente">

            <?php

            while($dadosClientes= mysql_fetch_array($arrayclientes)){
                echo"<option value=".$dadosClientes[0].">".$dadosClientes[2]."</option>";

            }

            ?>
        </select>
        <br>
        <h2><input id="nome"type="text" name="nome" placeholder="Nome Contato"  ></h2>
        <h2><input id="email"type="text" name="email" placeholder="E-mail Contato"  ></h2>
        <h2><input id="cargo"type="text" name="cargo" placeholder="Cargo Contato"  ></h2>
        <h2><input id="telefone"type="text" name="telefone" placeholder="Telefone Fixo"  ></h2>
        <h2><input id="celular"type="text" name="celular" placeholder="Telefone Celular"  ></h2>


        <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>