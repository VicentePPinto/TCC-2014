<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 13/11/13
 * Time: 20:40
 */

class Usuario {

    private $nome;
    private $email;
    private $login;
    private $senha;
    private $perfil;
    private $status;
    private $idUser;

    function __construct()
    {

            }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }


    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    function verificaUser($senha, $login){
        include "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $user=$MySql->executeQuery("SELECT * FROM`usuario`WHERE`Login` =  '"
            .$login."'AND `Senha` = '".$senha."';");
        while($userresult= mysql_fetch_object($user)){
            $this->setNome($userresult->Nome);
            $this->setIdUser($userresult->Matricula);
            $this->setPerfil($userresult->Perfil);
        }

        return $this;
    }

    function cadastraUser(){
        include "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.usuario(`Matricula`, `Nome`,`Email`,
        `Login`, `Senha`, `Perfil`, `Situacao`)VALUES ('default','".$this->nome."','"
        .$this->email."','".$this->login."','".$this->senha."','".
            $this->perfil."','1');");
    }
}
?>