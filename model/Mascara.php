<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 11/11/13
 * Time: 22:39
 */

class Mascara {

    private $descricao;

    function __construct()
    {

    }
    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    function  BuscaDescricao($description){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
       $desc= $MySql->executeQuery("SELECT `Descricao` FROM `sgtelecom`.`mascara` where `Descricao`='".$description."'");
        while($descresult= mysql_fetch_object($desc)){
            $this->setNome($descresult->Nome);}
        $MySql=null;
        return $this;
    }

    function InsereMascara(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO  `sgtelecom`.`mascara` (`idMascara` ,`Descricao`)
VALUES ( default  , '".$this->getDescricao()."');");
        $MySql=null;
    }
    function AllMascara(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $desc=$MySql->executeQuery("Select * FROM `sgtelecom`.`mascara`"."");
        return $desc;
    }
    function Count_Mask(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $count=$MySql->executeQuery("SELECT COUNT( * ) FROM  `mascara`"."");
        return $count;
    }
} 