<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 15/02/14
 * Time: 01:06
 */

$ip=@$_GET["ip"];
$comunity=@$_GET["comunity"];
include '/model/UtilSNMP.php';
include '/model/Fabricante.php';
include '/model/Mascara.php';
include '/model/Equipamento.php';
$mascara= new Mascara();
$equipamento=new Equipamento();
$fabricante= new Fabricante();
$snmpcomand = new  UtilSNMP($ip,$comunity);
$host= $snmpcomand->getHostnameEquipament();
$hostname=ltrim($host);
$iana = $snmpcomand->getIanaNumberr();
$idfabricante=$fabricante->verificaIdFabricante($iana);
$result=$mascara->AllMascara();
$hostname= $snmpcomand->getHostnameEquipament();
$equipamento=new Equipamento();
$host= ltrim($hostname);

$equip=$equipamento->GetEquipamento($host);
$controle=null;
while($dados=mysql_fetch_array($equip)){
    $controle=$dados[0];
}
if (is_null($controle)){



echo$controle;

$equipamento->setIdFabricante($iana);

$equipamento->setHostname($host);
$equipamento->setDescr_Mascara("");
$equipamento->cadastraEquipamento();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SG Telecom </title>


</head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<form class="form-horizontal" method="GET" action="Cadastra_Equipamento.php" name="frm">

    <body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    <?php include'BarraMenu.php';?>
    <h2>Cadastro de Equipamento</h2>
    <form method="post">
        <div class="container">
            <div class="row-fluid">
                <div class="offset1 span8">
                    <fieldset  >
                        <div class="control-group center">
                            <h4> <div class="label label-default">Fabricante:<?php echo $idfabricante->getNome();?></div></h4>
                            <h4> <div class="label label-default">Hostname:<?php echo $hostname?></div></h4>

                            <a href="Tela_Cadastrar_Equipamentos.php?ip=<?php echo $ip?>&comunity=<?php echo $comunity?>" class="btn btn-info ">Cadastrar Máscara</a>
<?php
}
else{
    echo"!!".$controle;
    echo "equipamento cadastrado";?>
    <a href="Tela_Cadastrar_Equipamentos.php?ip=<?php echo $ip?>&comunity=<?php echo $comunity?>" class="btn btn-info ">Editar Máscara</a>
<?php
}


?>