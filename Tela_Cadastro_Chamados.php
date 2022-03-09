<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 04/02/14
 * Time: 11:00
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
    <title>SG Telecom</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
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
 <?php  echo"<h4>Cadastrado por: ". $_SESSION["Nome"]."</h4>";

          ?>

        <h2><input id="cliente"type="text" name="cliente" placeholder="Cliente"  ></h2>
        <h2><input id="hr_abertura"type="text" name="hr_abertura" placeholder="Data e hora da abertura"  ></h2>
        <h2><input id="hr_encerramento"type="text" name="hr_encerramento" placeholder="Data e hora do encerramento"  ></h2>
        <h2><input id="numero"type="text" name="numero" placeholder="Numero do Chamado"  ></h2>
        <h2><input id="operadora"type="text" name="operadora" placeholder="Operadora"  ></h2>
       <h4>Observação</h4>
    <TEXTAREA NAME="observacao" ROWS=8 COLS=50 placeholder="Observação">
    </TEXTAREA>


        <input type="submit" value="OK">
        <br>

    </div>
</span>
    </div>
    </div>
</form>

</html>