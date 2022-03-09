<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 04/02/14
 * Time: 11:05
 */
$nome=@$_GET["nome"];
$cnpj=@$_GET["cnpj"];
$razaoSocial=@$_GET["razaoSocial"];
$data=@$_GET["data"];
$result = explode("-", $data);
$datacorreta= $result[2].$result[1].$result[0];
include "/model/Cliente.php";
$cliente=new Cliente();
$cliente->setNome($nome);
$cliente->setCnpj($cnpj);
$cliente->setRazaoSocial($razaoSocial);
$cliente->setDataContrato($datacorreta);
$cliente->cadastraCliente();

echo $data;