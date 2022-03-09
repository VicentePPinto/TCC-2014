<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 20/02/14
 * Time: 22:16
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
<?php include "BarraMenu.php";?>

<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span2">
            <h2>Cliente</h2>
        </div>
        <div class="span12">
            <div class="control-group">
                    <?php
                    $nomeCliente=@$_GET["NomeCliente"];
                    $idCliente=@$_GET["idCliente"];
                    include "model/Cliente.php";
                    include "model/Contato_Cliente.php";
                    $cliente=new Cliente();
                    $contato=new Contato_Cliente();
                    $dadosCliente=$cliente->verificaNomeCliente($nomeCliente);
                    while($dados = mysql_fetch_array($dadosCliente)){
                    if($dados[0]!=""){
                       echo"<h5>".$dados[2]." (".$dados[3].")</h5><br>";
                    $contatos= $contato->verificaContatodCliente($dados[0]);
                    ?>
                <div class="control-group">
                        <table class="table table-striped"  height="100">
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    Nome
                                </td>
                                <td>
                                    Cargo
                                </td>
                                <td>
                                    Telfone
                                </td>
                                <td>
                                    Celular
                                </td>
                                <td>
                                    e-mail
                                </td>
                            </tr><?php
                                               $n=0;
                            while($dadoContato = mysql_fetch_array($contatos)){

                                echo"<tr>";
                                echo"<td>";
                                    echo $n;
                                echo"</td>";
                                    echo"<td>";
                                    echo  $dadoContato[2];
                                    echo"</td>";
                                    echo"<td>";
                                    echo  $dadoContato[3];
                                    echo"</td>";
                                    echo"<td>";
                                    echo   $dadoContato[4];
                                    echo"</td>";
                                    echo"<td>";
                                    echo    $dadoContato[6];
                                    echo"</td>";
                                    echo"<td>";
                                    echo    $dadoContato[5];
                                    echo"</td>";
                                    echo" </tr>";
$n++;

                            }
                            }
                            else{
                            echo "Cliente não cadastrado";
                            }
                            }
                            ?>
</table>
                        </div>
                    </div>
            </div>
        </div>
</form>
</html>