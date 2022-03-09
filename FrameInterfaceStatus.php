<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 11/11/13
 * Time: 20:44
 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
    <title>SG Telecom</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include "BarraMenu.php";
$ip=@$_GET["ip"];
$comunity=@$_GET["comunity"];
?>
<label><h2>Interface Status</h2></label>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span2">
        </div>
        <div class="span12">
            <div class="control-group">
                <table class="table table-striped"  height="100">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Hostname
                        </td>
                        <td>
                            Interface
                        </td>
                        <td>
                            Description
                        </td>
                        <td>
                            Speed
                        </td>
                        <td>
                            Status
                        </td>
                    </tr>
                    <?php
                    include '/model/UtilSNMP.php';
                    include '/model/Fabricante.php';
                    include '/model/Equipamento.php';
                    $fabricante= new Fabricante();
                    $equipamento=new Equipamento();
                    $snmpcomand = new  UtilSNMP($ip,$comunity);
                    $host= $snmpcomand->getHostnameEquipament();
                    $hostname=ltrim($host);
                    $ifadminstatus= $snmpcomand->getInterfaceAdminStatus();
                    $ifoperstatus=$snmpcomand->getInterfaceOperStatus();
                    $ifname=$snmpcomand->getInterfaceIfName();
                    $ifdescription=$snmpcomand->getInterfaceDescription();

                    $iana= $snmpcomand->getIanaNumberr();
                    $fabricante->verificaIdFabricante($iana);
                    $separador=$fabricante->getSeparador();
                  //  echo">>".$separador;
                    $ifSpeed=$snmpcomand->getIfSpeed();
                    $ifIn=$snmpcomand->getIfInOctets();
                    $ifOut=$snmpcomand->getIfOutOctets();


                    for ($n = 0; $n < count($ifname); $n++) {
                        echo"<tr>";
                        echo"<td>";
                        echo $n;
                        echo"</td>";
                        echo"<td>";
                        echo $hostname;
                        echo"</td>";
                        echo"<td>";
                        echo $ifname[$n];
                        echo"</td>";
                        echo"<td>";
                        //echo "!!";
                        $equipamento=new Equipamento();
                        $equip=$equipamento->GetEquipamento($hostname);
                        //laço para pegar a descrição da mascara do equipamento
                        while( $dados= mysql_fetch_array($equip))
                        {

                           /* if ($dados[0]==""){
                                echo "Você deve cadastrar o equipamento primeiramente";

                            }*/

                            //Laço para imprimir o nome das interfaces


                            $itemMasksnmp= explode($separador, $ifdescription[$n]);
                          //  echo$itemMasksnmp[0];
                       //     echo"<br>";
                            //dados[3] traz a descriçaõ de mascara deste equipamento
                            $itemMask= explode($separador, $dados[3]);
                         //   echo $itemMask[0];
                            //Laço para colocar o link na descrição
                          //  echo $ifdescription[$n] ;

                          //  if($ifdescription[$n] != " "){
                                //echo "N=".sizeof($itemMask);
                            if($ifdescription[$n]!=" "){
                            for($x=0;$x<sizeof($itemMask);$x++){
                              //  echo $itemMasksnmp[$x];



                                //echo$itemMask[$x];


                                    $str=ltrim($itemMasksnmp[$x]);
                                    switch ($itemMask[$x]) {
                                        case "Cliente":
                                            echo "<a href='Exibe_Cliente.php?NomeCliente=".$str."'>".$itemMasksnmp[$x]."</a>";
                                            echo $separador ;
                                            break;
                                        case"Operadora":
                                            echo "<a href='Exibe_Operadora.php?NomeCliente=".$str."'>".$itemMasksnmp[$x]."</a>";
                                            echo $separador;
                                            break;
                                        case "Link":
                                            echo "<a href='Exibe_Operadora.php?NomeCliente=".$str."'>".$itemMasksnmp[$x]."</a>";
                                            echo $separador;
                                            break;

                                    }

                                }
                            }

                                else{
                                    echo "Sem Descrição";

                                }
                            }


                        echo"</td>";
                        echo"<td>";
                        echo $ifSpeed[$n];
                        echo"</td>";
                        echo"<td>";
                        $str1=(substr_compare($ifoperstatus[$n],"up",1,2));
                        $str=(substr_compare($ifadminstatus[$n],"up",1,2));
                        if(($str==0) and ($str1==0)) {?>
                            <script type="text/javascript">
                                $("*([rel='tooltip']").tooltip({
                                    html: true,
                                    placement: 'button'
                                });
                                );
                            </script>
                            <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="rigth" title="Spped:"><?php echo substr($ifoperstatus[$n], 1, 2) ?></button>
                            <?php
                            echo"</div>";
                        }
                        if(($str!=0) and ($str1!=0)) {
                            ?><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="rigth" title="Spped"><?php echo"Admin ". substr($ifoperstatus[$n], 1, 4) ?></button><?php
                            echo"</div>";}
                        if(($str==0) and ($str1!=0)) {
                            ?><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="rigth" title="Spped:"><?php echo substr($ifoperstatus[$n], 1, 4) ?></button><?php
                            echo"</div>";
                        }
                        echo"</td>";
                        echo"</tr>";
                    }?>
                </table>
            </div>
        </div>



                <p class="navbar-fixed-bottom">  By Vicente Pinto</p>
            </div>

        </div>


</form>
</html>
