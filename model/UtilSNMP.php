<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 11/11/13
 * Time: 20:41
 */

class UtilSNMP {

    private $endIP;
    private $comunidade;

    function __construct($ip,$comunity)
    {
        $this->endIP = $ip;
        $this->comunidade = $comunity;
    }

    function getInterfaceIfName() {

        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.2');
        if($arr!=0){
        for ($n = 0; $n < count($arr); $n++) {
            $result = explode(",", $arr[$n]);
            $array[$n] = $result[1];
        }
        return $array;}
    }
    function getInterfaceAdminStatus() {
        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.7');
        if($arr!=0){
        for ($n = 0; $n < count($arr); $n++) {
            $result = explode(":", $arr[$n]);
            $array[$n] = $result[1];
        }
        return $array;}
    }
    function getInterfaceOperStatus() {
        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.8');
        if($arr!=0){
        for ($n = 0; $n < count($arr); $n++) {
            $result = explode(":", $arr[$n]);
            $array[$n] = $result[1];
        }
        return $array;}
    }
    function getInterfaceDescription() {
        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.31.1.1.1.18');
        if($arr!=0){
        for ($n = 0; $n < count($arr); $n++) {
            $result = explode(":", $arr[$n]);
            $array[$n] = $result[1];
        }
        return $array;}
    }

    function getHostnameEquipament() {

        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.1.5');
        if($arr!=0){
        for ($n = 0; $n < count($arr); $n++) {
            $result = explode(":", $arr[$n]);
            $hostname = $result[1];
        }
        return $hostname;}
    }
    function getIanaNumberr() {

        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.1.2.0');
        if($arr!=0){
             for ($n = 0; $n < count($arr); $n++) {
                 $result = explode(".", $arr[$n]);
                 $str = $result[1];
             }
             return $str;
    }
    }

    function getDevice() {
        $arr = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.1.2');
       /* if($arr!=0){
            for ($n = 0; $n < count($arr); $n++) {
                $result = explode(":", $arr[$n]);
                $array[$n] = $result[1];
            }*/
            return $arr;}

    function getIfSpeed(){
        $strSpeed = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.5');
        if($strSpeed!=0){
            for ($n = 0; $n < count($strSpeed); $n++) {
                $result = explode(":", $strSpeed[$n]);
                $array[$n] = $result[1];
            }
        }
        return $array;
    }
    function getIfInOctets(){
        $strSpeed = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.10');
        if($strSpeed!=0){
            for ($n = 0; $n < count($strSpeed); $n++) {
                $result = explode(":", $strSpeed[$n]);
                $array[$n] = $result[1];
            }
        }
        return $array;
    }

    function getIfOutOctets(){
        $strSpeed = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.16');
        if($strSpeed!=0){
            for ($n = 0; $n < count($strSpeed); $n++) {
                $result = explode(":", $strSpeed[$n]);
                $array[$n] = $result[1];
            }
        }
        return $array;
    }
    function getCourentSpeed(){
        $strSpeed = @snmpwalk($this->endIP, $this->comunidade, '1.3.6.1.2.1.2.2.1.16');
        if($strSpeed!=0){
            for ($n = 0; $n < count($strSpeed); $n++) {
                $result = explode(":", $strSpeed[$n]);
                $array[$n] = $result[1];
            }
        }
        return $array;
    }
}