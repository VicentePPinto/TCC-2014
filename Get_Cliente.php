<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 10/03/14
 * Time: 21:11
 */

// Fill up array with names
include "/model/Cliente.php";
$cliente = new Cliente();
$nomes=$cliente->Todos_Clientes();
$n=0;
while($dados = mysql_fetch_array($nomes)){
    $a[$n]=$dados;
    $n=$n+1;
  }

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from ""
if ($q !== "")
{ $q=strtolower($q); $len=strlen($q);
    for ($x=0;$x<sizeof($a); $x++){
    foreach($a[$x] as $name)
    { if (stristr($q, substr($name,0,$len)))
    { if ($hint==="")
     $hint=$name;
   /* else
    { $hint .= ", $name"; }*/
    }
    }
    }
}

// Output "no suggestion" if no hint were found
// or output the correct values
echo  "<a href=Busca_Cliente.php?NomeCliente=".$hint.">".$hint."</a>" ;
?>