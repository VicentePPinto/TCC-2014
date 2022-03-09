<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
    <title>SG Telecom</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />

    <script>
        function showHint(str)
        {
            if (str.length==0)
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","Get_Cliente.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include "BarraMenu.php";?>
<div class="container-fluid">
    <div class="span12">
<p><b>Digite o nome do Cliente:</b></p>
<form>
   <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Encontrado: <span id="txtHint"></span></p>
    </div>
</div>
<?php
$nomeCliente=@$_GET["NomeCliente"];
if($nomeCliente!=""){
include "model/Cliente.php";
$cliente=new Cliente();
$dadosCliente=$cliente->verificaNomeCliente($nomeCliente);

while($dados = mysql_fetch_array($dadosCliente)){

    echo "CNPJ:".$dados[0]."<br>";
    echo "CNPJ:".$dados[1]."<br>";
    echo "Nome:".$dados[2]."<br>";
    echo "Razão Social:".$dados[3]."<br>";
}
}
?>
</body>
</html>