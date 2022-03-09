<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 19/02/14
 * Time: 19:16
 */
?>
<html>
<head>
    <title>SG Telecom</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
<?php include 'BarraMenu.php';?>
<label><h2>Chamados Abertos</h2></label>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span2">

        </div>

        <div class="span12">
            <div class="control-group">
                <?php
                $ip=@$_GET["ip"];
                $comunity=@$_GET["comunity"];

                ?>
                <table class="table table-striped"  height="100">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Chamado
                        </td>
                        <td>
                            Operadora
                        </td>
                        <td>
                            Cliente
                        </td>
                        <td>
                            Sla
                        </td>
                    </tr>
                </table>
            </div>
        </div>
