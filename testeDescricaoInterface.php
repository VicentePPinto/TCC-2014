<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/02/14
 * Time: 22:20
 */
include "/model/UtilSNMP.php";
include "/model/Fabricante.php";
include "/model/Equipamento.php";
$ip="192.168.1.30";
$comunity="public";
$fabric= new Fabricante();
$snmpcomand = new  UtilSNMP($ip,$comunity);
$ifdescription=$snmpcomand->getInterfaceDescription();
$iana= $snmpcomand->getIanaNumberr();
$hostname=$snmpcomand->getHostnameEquipament();
$fabric->verificaIdFabricante($iana);

$equipamento= new Equipamento();
$equipamento->GetEquipamento($hostname[0]);
$resMasc= explode($fabric->getSeparador(),$equipamento->getmascara());

for($n=0; $n<sizeof($ifdescription); $n++){
    $resultdesc = explode("/", $ifdescription[$n]);
if(@$ifdescription[$n]!=""){
    echo"<a href=#>".@$resultdesc[$n]."</a>".@$separador;

    $resultdesc = explode("/", $ifdescription[$n]);
    for ($y=0; $y< sizeof($resultdesc);$y++){

        for ($x=0;$x < sizeof($resMasc); $x++){
            switch ($resMasc[$x]) {
                case "Cliente":
                    include_once "/model/Cliente.php";
                    $cliente= new Cliente();
                    $daddosCliente=$cliente->verificaNomeCliente($resultdesc[$y]);
                    echo $daddosCliente->getNome();
                    echo $daddosCliente->getCnpj();
                    break;
                case "Link":
                    include_once "/model/Link.php";
                    $circuito= new Circuito();
                    $daddosCliente=$cliente->verificaNomeCliente($resultdesc[$y]);
                    echo $daddosCliente->getNome();
                    echo $daddosCliente->getCnpj();
                    break;
                case "Operadora":
                    include_once "/model/Operadora.php";
                    $operadora= new Operadora();
                    $daddosOperadora=$operadora->GetOperadora($resultdesc[$y]);
                    echo $daddosOperadora->getNome();
                    echo $daddosOperadora->getCnpj();
                    break;

            }

        }
    }
}

}
