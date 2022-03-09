<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 14/02/14
 * Time: 23:01
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
$snmpcomand = new  UtilSNMP("192.168.1.30","public");
$hostname= $snmpcomand->getHostnameEquipament();
$iana = $snmpcomand->getIanaNumberr();
$idfabricante=$fabricante->verificaIdFabricante($iana);
$result=$mascara->AllMascara();
$hostname= $snmpcomand->getHostnameEquipament();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
    <script>
        function delHint(sep,str)
        {
            if (str.length==0)
            {
                document.getElementById("txtHint2").innerHTML="";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","teste deletarmasc.php",true);
            xmlhttp.send();
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>SG Telecom </title>
    <script type="text/javascript">
        function changeText(str){

            document.getElementById('boldStuff').innerHTML = str;

        }
    </script>
</head>
<form class="form-horizontal" method="GET" action="Cadastra_Equipamento.php" name="frm">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    <?php include'BarraMenu.php';?>
    <h2>Cadastro de Equipamento</h2>
    <form method="post">
        <div class="container">
            <div class="row-fluid">
                <div class="offset1 span4">
                    <fieldset  >
                        <div class="control-group center">
                            <h4> <div class="label label-default">Fabricante:<?php echo $idfabricante->getNome();?></div></h4>
                            <h4> <div class="label label-default">Hostname:<?php echo $hostname?></div></h4>
                            <?php $sep=$idfabricante->getSeparador();


                            $equipamento=new Equipamento();
                            $str=$equipamento->GetMascEquipamento("DmSwitch2104");
                           //echo $str;
                            while($dados=mysql_fetch_array($str)){
                                $caracter=$dados[0];
                            //echo $dados[0];

                            }


                            ?>
                            <input type="button" class="btn-inverse" onclick='showHint("<?php echo $sep;?>")' value='Separador'>

                            <?php
                            $n=0;

                            //result traz todos os tipos de mascaras
                            while($dados = mysql_fetch_array($result))
                            { $masc = new Mascara();
                                $masc->setDescricao($dados[1]);
                                ?>
                                <?php $desc=$masc->getDescricao();?>
                                <input type=button class="btn-inverse" onclick='showHint("<?php echo $desc;?>")' value='<?php echo $desc;?>'>

                               <?php
                                $n++;
                            }
                            echo"<br>";
                            $string="";
                            $string= "<b id='boldStuff'></b>";
                            echo $string;
                            echo "<span id='txtHint'></span>";
                            ?>
                            <input type="button" class="btn-inverse" onclick='delHint(<?php echo $caracter;?>,"")'value="<<">
                            <span id='txtHint2'></span>

    </form>
    <br>
    <input type="submit" value="ok">
    <div id="divResultado"></div>
    </div>
    </div>
    </div>
    </div>
</form>
</html>