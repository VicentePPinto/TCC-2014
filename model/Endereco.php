<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/03/14
 * Time: 21:13
 */

class Endereco {
private $pais;
    private $estado;
    private $cidade;
    private $cep;
    private $rua;
    private $numero;
    private $complemento;
    private $id_Cliente;

    function __construct()
    {

    }


    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
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
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    function cadastraEndereço(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.Endereco(`id_End`,`Cliente_id_Cliente`,`Pais`, `Estado`,
        `Cidade`, `Cep`,`Rua`,`Numero`,`Complemento`)VALUES ('default','".$this->id_Cliente."','".$this->pais."','"
            .$this->estado."','".$this->cidade."'".$this->cep."'".$this->rua."'".$this->numero."'".$this->numero."'".$this->complemento."');");
    }
    function buscaEndereçoCliente($idCliente){

    }
} 