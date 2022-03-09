<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 23/03/14
 * Time: 21:02
 */
include '/model/Equipamento.php';
$q=$_REQUEST["q"];
$equipamento=new Equipamento();
$string="";
$str=$equipamento->GetMascEquipamento("DmSwitch2104");
while($dados=mysql_fetch_array($str)){
    $aux=$dados[0];

}
$masc=explode("/",$aux);
$x=sizeof($masc)-2;
echo $x;
for($i=0; $i<$x;$i++){
    $aux1[$i]=$masc[$i]."/";

}
for($j=0;$j<sizeof($aux1);$j++){
    echo $aux1[$j];
    $string.=$aux1[$j];
}
echo"<br>";
$equipamento->UpdateMascara($string,"21");
$str2=$equipamento->GetMascEquipamento("DmSwitch2104");
while($dados=mysql_fetch_array($str2)){
    $q= $dados[0];
}
echo$q;