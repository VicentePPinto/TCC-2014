<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/02/14
 * Time: 10:24
 */

class Chamado {
    private $cliente;
    private $numero;
    private $abertura;
    private $encerramento;
    private $obeservacao;
    private $operadora;
    private $usuario;

    function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getOperadora()
    {
        return $this->operadora;
    }

    /**
     * @param mixed $operadora
     */
    public function setOperadora($operadora)
    {
        $this->operadora = $operadora;
    }

    /**
     * @param mixed $abertura
     */
    public function setAbertura($abertura)
    {
        $this->abertura = $abertura;
    }

    /**
     * @return mixed
     */
    public function getAbertura()
    {
        return $this->abertura;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $encerramento
     */
    public function setEncerramento($encerramento)
    {
        $this->encerramento = $encerramento;
    }

    /**
     * @return mixed
     */
    public function getEncerramento()
    {
        return $this->encerramento;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $obeservacao
     */
    public function setObeservacao($obeservacao)
    {
        $this->obeservacao = $obeservacao;
    }

    /**
     * @return mixed
     */
    public function getObeservacao()
    {
        return $this->obeservacao;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    function Cadastra_Chamado(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.chamado(`Numero`,`Cliente_id_Cliente`, `Usuario_Matricula`,
        `Operadora_idOperadora`, `Data_Hr_Abertura`,`Data_Hr_Encerramento`,`Observacao`)VALUES ('".$this->getNumero()."
        ','".$this->getCliente()."','".$this->getUsuario()."','"
            .$this->getOperadora()."','".$this->getAbertura()."'".$this->getEncerramento()."','".$this->getObeservacao()."');");
        return $this;
    }

    function Chamados_Abertos(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $chamado=$MySql->executeQuery("Select * FROM `sgtelecom`.`chamado` WHERE `Data_Hr_Encerramento`= 'NULL'"."");
        return $chamado;
    }
    function Chamados_Numero(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $chamado=$MySql->executeQuery("Select * FROM `sgtelecom`.`chamado` WHERE `Numero`= '".$this->getNumero()."');");
        return $chamado;
    }

}
