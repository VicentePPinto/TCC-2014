<html>
<head>
<title></title>
<form method="GET" action="testesnmp1.php" name="frm"></form>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="bootstrap/js/jquery-1.9.1.min.js"></script>
<!-- Incluindo o JavaScript do Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<fieldset>
    <legend></legend>
    <label>SNMP Equipamento</label>
	<form class="form-horizontal" method="GET" action="#" name="frm">

	<div class="control-group">
  <br>
  <br>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  
  <?php
  $ip=@$_GET["ip"];
  $comunity=@$_GET["comunity"];
  include '/model/UtilSNMP.php';
  $snmp = new UtilSNMP($ip,$comunity);
  $iana= $snmp->getIanaNumberr();
  echo $iana;
  $str=$snmp->getIanaNumberr();
  $ifSpeed=$snmp->getIfSpeed();
  $ifIn=$snmp->getIfInOctets();
  $ifOut=$snmp->getIfOutOctets();

  for($i=0; $i<count($ifIn);$i++){

      $result= ($ifIn[$i]+$ifOut[$i]);
      $result= $result*8;
      $result=$result*100;
      if($ifSpeed[$i] != 0){
      $result=$result/$ifSpeed[$i];

  echo ">>".$result."<br>";}
  else echo "0"."<br>";}
?>


</div>
    
</html>