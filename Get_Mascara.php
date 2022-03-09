<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 10/03/14
 * Time: 21:11
 */
$q=$_REQUEST["q"];
$host=$_REQUEST["hostname"];
$hostname= ltrim($host);
echo $hostname;
$aux=";";
$str="";
//echo $q;
include '/model/Equipamento.php';
$equipamento=new Equipamento();
$str=$equipamento->GetMascEquipamento($hostname);
while($dados=mysql_fetch_array($str)){

    $q=$dados[0].$q;
    echo $q;

}
$str=$equipamento->GetEquipamento($hostname);
while($dados=mysql_fetch_array($str)){
    $id=$dados[2];

$equipamento->UpdateMascara($q,$id);
}
    ?>