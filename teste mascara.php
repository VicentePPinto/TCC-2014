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
            xmlhttp.open("GET","Get_Mascara.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include "BarraMenu.php";
include '/model/Mascara.php';
$mascara= new Mascara();
$result=$mascara->AllMascara();

?>
<div class="container-fluid">
    <div class="span12">
        <p><b>Digite o nome do Cliente:</b></p>
        <form>
            <input type="text" onkeyup="showHint(this.value)">
            <?php
            $n=0;
            while($dados = mysql_fetch_array($result))
            { $masc = new Mascara();
                $masc->setDescricao($dados[1]);
                ?>
                <?php $desc=$masc->getDescricao();?>
                <input type=button class="btn-inverse" onclick='showHint("<?php echo $desc;?>")' value='<?php echo $desc;?>'>
                <?php
                $n++;
            }
            $q=@$_GET["q"];
            if($q!=""){
                echo $q;
            }
            ?>
        </form>

    </div>
</div>

<p>Encontrado: <span id="txtHint"></span></p>
</body>
</html>