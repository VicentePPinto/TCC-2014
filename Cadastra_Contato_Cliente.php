<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/01/14
 * Time: 18:17
 */
$idCliente=@$_GET["idCliente"];
$nome=@$_GET["nome"];
$email=@$_GET["email"];
$telefone=@$_GET["telefone"];
$celular=@$_GET["celular"];
$cargo=@$_GET["cargo"];
include "/model/Contato_Cliente.php";
$contato= new Contato_Cliente();
$contato->setNome($nome);
$contato->setCargo($cargo);
$contato->setCelular($celular);
$contato->setEmail($email);
$contato->getIdCliente($idCliente);
$contato->setTelefone($telefone);
$contato->cadastraContatoCliente();
