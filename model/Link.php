<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/02/14
 * Time: 22:29
 */

class Link {
    private $cliente;
    private $ativacao;
    private $desativacao;
    private $designador;
    private $interface;
    private $operadora;
    private $velocidade;

    function __construct()
    {
    }

    /**
     * @param mixed $ativacao
     */
    public function setAtivacao($ativacao)
    {
        $this->ativacao = $ativacao;
    }

    /**
     * @return mixed
     */
    public function getAtivacao()
    {
        return $this->ativacao;
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
     * @param mixed $desativacao
     */
    public function setDesativacao($desativacao)
    {
        $this->desativacao = $desativacao;
    }

    /**
     * @return mixed
     */
    public function getDesativacao()
    {
        return $this->desativacao;
    }

    /**
     * @param mixed $designador
     */
    public function setDesignador($designador)
    {
        $this->designador = $designador;
    }

    /**
     * @return mixed
     */
    public function getDesignador()
    {
        return $this->designador;
    }

    /**
     * @param mixed $interface
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;
    }

    /**
     * @return mixed
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * @param mixed $operadora
     */
    public function setOperadora($operadora)
    {
        $this->operadora = $operadora;
    }

    /**
     * @return mixed
     */
    public function getOperadora()
    {
        return $this->operadora;
    }

    /**
     * @param mixed $velocidade
     */
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
    }

    /**
     * @return mixed
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }
    function verificaLink($numero){
        include "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $link=$MySql->executeQuery("SELECT * FROM`Link`WHERE`Numero` =  '"
            .$numero."';");
        while($linkresult= mysql_fetch_object($link)){
            $this->setCliente($linkresult->Cliente_id_Cliente);
            $this->setAtivacao($linkresult->Data_Ativacao);
            $this->setDesativacao($linkresult->Data_Desativacao);
            $this->setDesignador($linkresult->Designador);
            $this->setInterface($linkresult->Interface_Id_Interface);
            $this->setOperadora($linkresult->Operadora_idOperadora);
            $this->setVelocidade($linkresult->Velocidade);
        }
    return $this;
    }
} 