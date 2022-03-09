<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/02/14
 * Time: 22:50
 */

class Operadora {
    private $cnpj;
    private $nome;
    private $idOperadora;

    function __construct()
    {
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
     * @param mixed $idOperadora
     */
    public function setIdOperadora($idOperadora)
    {
        $this->idOperadora = $idOperadora;
    }

    /**
     * @return mixed
     */
    public function getIdOperadora()
    {
        return $this->idOperadora;
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

    function CadastraOperadora(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO  `sgtelecom`.`Operadora` (`IdOperadora` ,`CNPJ` , `Nome`)
VALUES ( '".$this->getIdOperadora()."'  , '".$this->getCnpj()."' , '".$this->getNome()."');");
        $MySql=null;
    }

    function GetOperadora($nome){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $desc=$MySql->executeQuery("Select * FROM `sgtelecom`.`Operadora` where `Nome` ='".$nome."'");
        while($descresult= mysql_fetch_object($desc)){
            $this->setNome($descresult->Nome);
            $this->setCnpj($descresult->CNPJ);
            $this->setIdOperadora($descresult->idOperadora);
        }
        return $this;
    }
} 