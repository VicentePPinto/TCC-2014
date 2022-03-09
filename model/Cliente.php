<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/01/14
 * Time: 18:32
 */

class Cliente {
    private $nome;
    private $razaoSocial;
    private $dataContrato;
    private $cnpj;
    private $idCliente;


    function __construct()
    {


    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $dataContrato
     */
    public function setDataContrato($dataContrato)
    {
        $this->dataContrato = $dataContrato;
    }

    /**
     * @return mixed
     */
    public function getDataContrato()
    {
        return $this->dataContrato;
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
     * @param mixed $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }


    function verificaIdCliente($cnpj, $razaoSocial){

    include_once "Mysql.php";
    $MySql= new MySQL();
    $MySql->connect();
    $id_Cliente=$MySql->executeQuery("SELECT id_Cliente FROM`usuario`WHERE`Razao_Social` =  '"
        .$razaoSocial."'AND `CNPJ` = '".$cnpj."';");
    return $id_Cliente;
}
    function verificaNomeClientePid($id){

        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $Nome_Cliente=$MySql->executeQuery("SELECT Nome FROM`Cliente`WHERE`id` =  '"
            .$id."';");
        return $Nome_Cliente;
    }
    function verificaNomeCliente($nome){

        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $cliente=$MySql->executeQuery("SELECT * FROM`Cliente`WHERE`Nome` =  '"
            .$nome."';");

        return $cliente;
    }
    function cadastraCliente(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.Cliente(`Id_Cliente`,`CNPJ`, `Nome`,
        `Razao_Social`, `Data_Contrato`)VALUES ('default','".$this->cnpj."','".$this->nome."','"
            .$this->razaoSocial."','".$this->dataContrato."');");
    }
    function Todos_Clientes(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $desc=$MySql->executeQuery("Select * FROM `sgtelecom`.`Cliente`"."");
        return $desc;
}
}
