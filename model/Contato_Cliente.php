<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/01/14
 * Time: 18:51
 */

class Contato_Cliente {
    private $nome;
    private $email;
    private $cargo;
    private $telefone;
    private $celular;
    private $id_Cliente;

    function __construct()
    {
 }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
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

    /**
     * @param mixed $id_Cliente
     */
    public function setIdCliente($id_Cliente)
    {
        $this->id_Cliente = $id_Cliente;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_Cliente;
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
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    function verificaContato($nome, $id_cliente){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $perfilUser=$MySql->executeQuery("SELECT Perfil FROM`contatocliente`WHERE`Cliente_id_Cliente` =  '"
            .$id_cliente."'AND `Senha` = '".$nome."';");
        return $perfilUser;
    }

    function verificaContatodCliente($id_cliente){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $contatos=$MySql->executeQuery("SELECT * FROM`contatocliente`WHERE`Cliente_id_Cliente` =  '"
            .$id_cliente."';");
        return $contatos;
    }

    function cadastraContatoCliente(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
       echo "INSERT INTO sgtelecom.contatocliente(`Id_ContatoCliente`,`Cliente_id_Cliente`, `Nome`,
            `Cargo`,`Telefone`,`Email`,`celular`)VALUES
            ('default','".$this->id_Cliente."','".$this->nome."','".$this->cargo."','".$this->telefone."','".$this->email."','".$this->celular."';";

       $MySql->executeQuery("INSERT INTO sgtelecom.contatocliente(`Id_ContatoCliente`,`Cliente_id_Cliente`, `Nome`,
            `Cargo`,`Telefone`,`Email`,`celular`)VALUES
            ('default','".$this->id_Cliente."','".$this->nome."','".$this->cargo."','".$this->telefone."','".$this->email."','".$this->celular."';");
    }
}