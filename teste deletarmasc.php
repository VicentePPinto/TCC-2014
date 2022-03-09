<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 23/03/14
 * Time: 21:02
 */
$q=$_REQUEST["q"];
$host=$_REQUEST["hostname"];
$hostname= ltrim($host);
$id=0;
include '/model/Equipamento.php';
$equipamento=new Equipamento();
$string="";
$str=$equipamento->GetMascEquipamento($hostname);
while($dados=mysql_fetch_array($str)){
    $string=$dados[0];

}
$aux=explode("/",$string);
for($i=0;$i<sizeof($aux)-1;$i++){
    $q=$aux[$i]."/";

}
$str=$equipamento->GetEquipamento($hostname);
while($dados=mysql_fetch_array($str)){
    $id=$dados[2];

    $equipamento->UpdateMascara($q,$id);
}
$equipamentofinal=new Equipamento();
$q="";
$str2=$equipamentofinal->GetMascEquipamento($hostname);
while($dados=mysql_fetch_array($str2)){
    $q=$dados[0];

}
echo $q;