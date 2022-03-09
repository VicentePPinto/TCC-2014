<html xmlns="http://www.w3.org/1999/html">
<head>
<title>SG Telecom </title>
<form class="form-horizontal" method="GET" action="FrameInterfaceStatus.php" name="frm">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>

<script src="//code.jquery.com/jquery.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

     <?php include'BarraMenu.php';?>


 <label><h4>Consulta Interfaces</h4></label>

</head>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="span4" >
            </div>
        <span class="badge badge-warning">
<div class="span4"  >


<div class="control-group"  >


    <h2><input id="ip"type="text" name="ip" placeholder="Digite o IP"  ></h2>
    <h2> <input id="comunity"type="text" name="comunity" placeholder="Digite a comunidade SNMP" ></h2>
    <input type="submit" value="ok">
        <br>

  </div>
</span>
    </div>
    </div>
</form>

</html>