<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 18/01/14
 * Time: 21:17
 */

class Fabricante {


    private $nome;
    private $id;
    private $separador;
    private $desc_Masc;

    function __construct()
    {


    }

    /**
     * @param mixed $desc_Masc
     */
    public function setDescMasc($desc_Masc)
    {
        $this->desc_Masc = $desc_Masc;
    }

    /**
     * @return mixed
     */
    public function getDescMasc()
    {
        return $this->desc_Masc;
    }

    /**
     * @param mixed $separador
     */
    public function setSeparador($separador)
    {
        $this->separador = $separador;
    }

    /**
     * @return mixed
     */
    public function getSeparador()
    {
        return $this->separador;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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

    function verificaIdFabricante($id){

        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $dadosFabricnate=$MySql->executeQuery("SELECT * FROM`fabricante`WHERE`idFabricante` =  '"
            .$id."';");
        while($fabricresult= mysql_fetch_object($dadosFabricnate)){
            $this->setNome($fabricresult->Nome);
            $this->setId($fabricresult->idFabricante);
            $this->setSeparador($fabricresult->Caracter_Separador);

        return $this;
    }
    }
    function verificaNomeFabricante(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $char=$MySql->executeQuery("SELECT Nome FROM`fabricante`WHERE`IdFabricante` =  '"
            .$this->id."';");
        $MySql=null;
        return $char;
    }

    function verificaSeparadorFabricante(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $char=$MySql->executeQuery("SELECT Caracter_Separador FROM`fabricante`WHERE`IdFabricante` =  '"
            .$this->id."';");
        $MySql=null;
        return $char;
    }
    function cadastraFabricante(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.fabricante(`idFabricante`, `Nome`,`Caracter_Separador`,`Descr_Mascara`)VALUES ('".$this->id."','"
            .$this->nome."','".$this->separador."',".$this->desc_Masc."');");
        $MySql=null;
    }

} 