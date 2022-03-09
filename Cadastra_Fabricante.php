<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/01/14
 * Time: 22:08
 */


$nome= $_GET["nome"];
$id= $_GET["id"];
$separador= $_GET["separador"];

include "/model/Fabricante.php";
$fabricante= new Fabricante();

$idfabric=$fabricante->verificaIdFabricante($id);

//if ($idfabric->getId()==$id){
    ?>
    <html>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>

        <div class="span4"  >
            <div class="alert alert-danger">
    Fabricante já existe!
            </div>

            </html>
    <?php
//}
if($idfabric->getId()!=$id){
$fabricante->setId($id);
$fabricante->setNome($nome);
$fabricante->setSeparador($separador);
$fabricante->cadastraFabricante();
?>
<html>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
        </div>

        <div class="span4"  >
            <div class="alert alert-success">
                Fabricante cadastrado com sucesso!
            </div>

            </html>

<?php } ?>