<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/12/13
 * Time: 20:11
 */
$login=@$_GET["login"];
$senha=@$_GET["password"];
//echo "login: ". $login;
include "/model/Usuario.php";
$user=new Usuario();
$user1=$user->verificaUser($senha,$login);
echo $user1->getNome();
echo $user1->getPerfil();


if ($user1->getPerfil()=="administrador"){
    session_start();
$_SESSION["Nome"]=$user1->getNome();
$_SESSION["IdUser"]=$user1->getIdUser();

   header("location:ConsultaInterface.php");
}

if ($user1->getPerfil()== "operador"){
    header("location: pagina2.php");}
else "Usuário ou senha desconhecido";
?>