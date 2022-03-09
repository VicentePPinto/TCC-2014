<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 31/01/14
 * Time: 19:38
 */

class Equipamento {
    private $idEquipamento;
    private $chassi;
    private $hostname;
    private $idFabricante;
    private $Descr_Mascara;

    function __construct()
    {

    }

    /**
     * @param mixed $chassi
     */

    /**
     * @param mixed $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @return mixed
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param mixed $idEquipamento
     */
    public function setIdEquipamento($idEquipamento)
    {
        $this->idEquipamento = $idEquipamento;
    }

    /**
     * @return mixed
     */
    public function getIdEquipamento()
    {
        return $this->idEquipamento;
    }

    /**
     * @param mixed $idFabricante
     */
    public function setIdFabricante($idFabricante)
    {
        $this->idFabricante = $idFabricante;
    }

    /**
     * @return mixed
     */
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }

    /**
     * @param mixed $mascara
     */
    public function setDescr_Mascara($Descr_Mascara)
    {
        $this->Descr_Mascara = $Descr_Mascara;
    }

    /**
     * @return mixed
     */
    public function getDescr_Mascara()
    {
        return $this->Descr_Mascara;
    }

    function cadastraEquipamento(){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("INSERT INTO sgtelecom.equipamento(`Id_Equipamento`,  `Descricao_Mascara`, `Fabricante_idFabricante`,
          `Hostname`) VALUES ('default','".$this->Descr_Mascara."','"
            .$this->idFabricante."','".$this->hostname."');");
    }
    function GetEquipamento($hostname){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $desc=$MySql->executeQuery("Select * FROM `sgtelecom`.`Equipamento` where `Hostname` ='".$hostname."'");
        return $desc;

    }
    function UpdateMascara($descricao,$idEquipamento){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $MySql->executeQuery("UPDATE  `equipamento` SET  `Descricao_Mascara` =  '".$descricao."' WHERE  `Id_Equipamento` =".$idEquipamento);
    }
    function GetMascEquipamento($hostname){
        include_once "Mysql.php";
        $MySql= new MySQL();
        $MySql->connect();
        $desc=$MySql->executeQuery("Select Descricao_Mascara FROM `sgtelecom`.`Equipamento` where `Hostname` ='".$hostname."'");
        return  $desc;

    }
} 