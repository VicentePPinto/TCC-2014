<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 11/11/13
 * Time: 22:28
 */
?>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Incluindo o JavaScript do Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<div class="navbar navbar">
  <div class="navbar-inner">
    <div class="container">
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 <a class="brand" href="Tela_Login.php"><img src="image/SG Telecom.jpg" width="70"></a>
 <div class="nav-collapse collapse">
	  <div class="btn-group">
  <a class ="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href= "#" id="cadastro">
    Cadastro
  <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" id="cadastro">
    <li><a href="Tela_Usuario.php">Usuário</a></li>

      <li> <a href="Tela_Vlan.php" >Vlan</a></li>
      <li> <a href="Tela_Fabricante.php">Fabricante</a></li>
      <li> <a href="Tela_Link.php"> Circuito</a></li>
      <li> <a href="Tela_Link.php">IP</a></li>

      <li class="divider"></li>
      <li role="presentation" class="dropdown-header">Operadora</li>
      <li><a href="Tela_Operadora.php">Nova Operadora</a></li>
      <li><a href="Tela_ContatoOperadora.php">Novo Contato</a></li>
      <li class="divider"></li>
      <li role="presentation" class="dropdown-header">Cliente</li>
      <li><a href="Tela_Cliente.php">Novo Cliente</a></li>
      <li><a href="Tela_ContatoCliente.php">Novo Contato</a></li>


  </div>
   </ul>
<a href="consultainterface.php" class="btn btn-inverse ">Interface</a>
<a href="Busca_Cliente.php" class="btn btn-inverse ">Clientes</a>
     <div class="btn-group">
         <a class ="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href= "#">
             Equipamento
             <span class="caret"></span>
         </a>
         <ul class="dropdown-menu pull-right">
             <li><a href="Consulta_Equipamento.php">Novo</a></li>
             <li><a href="Tela_Chmados_Abertos.php">Consultar</a></li>

     </div>
     <a href="#" class="btn btn-inverse ">Relatórios</a>
<a href="APP-SNMP-p-IP.php" class="btn btn-inverse ">Operadora</a>
  <div class="btn-group">
  <a class ="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href= "#">
    Chamado
  <span class="caret"></span>
  </a>
  <ul class="dropdown-menu pull-right">
    <li><a href="Tela_Cadastro_Chamados.php">Novo</a></li>
 <li><a href="Tela_Chmados_Abertos.php">Abertos</a></li>
  <li><a href="#">Fechados</a></li>
  </div>
     <a class="badge badge-inverse pull-right" href="Edita_User">
         <?php session_start();
         if ($_SESSION["Nome"]!=""){
         echo"<h6>User:". $_SESSION["Nome"]."</h6></a>";}
        else {  header( 'Location:Tela_Login.php');}?>

  </div>
     </div>
  </div>
</div>