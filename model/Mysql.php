<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 13/11/13
 * Time: 20:34
 */

class MySQL
{
    var $host="localhost";
    var $user="root";
    var $password="";
    var $database="sgtelecom";


    var $query;
    var $link;
    var $result;
    var $numero_linhas;

    function MySQL()
    {
        //Apenas instancia o Objeto
    }

    //Esta função faz a conexão com o Banco de Dados
    function connect()
    {
        $this->link=mysql_connect($this->host,$this->user,$this->password);
        if(!$this->link)
        {
            echo "Falha na conexão com o Banco de Dados!<br />";
            echo "Erro: " . mysql_error();
            die();
        }
        elseif(!mysql_select_db($this->database, $this->link))
        {
            echo "O Banco de Dados solicitado não pode ser aberto!<br />";
            echo "Erro: " . mysql_error();
            die();
        }
    }

    //Esta função executa uma Query
    function executeQuery($query)
    {
        $this->connect();
        $this->query=$query;
        if($this->result=mysql_query($this->query))
        {
            $this->disconnect();
            return $this->result;
        }
        else
        {
            echo "Ocorreu um erro na execução da SQL";
            echo "Erro :" . mysql_error();
            echo "SQL: " . $query;
            die();
            disconnect();
        }
    }

    function contalinha($query){
        $this->connect();
        $this->query=$query;
        $this->result = $this->executeQuery($this->query);
        $this->numero_linhas = mysql_num_rows($this->result);

        //echo "iii".$this->numero_linhas;
        $this->disconnect();
        return $this->numero_linhas;
    }

    //Esta função desconecta do Banco
    function disconnect()
    {
        return mysql_close($this->link);
    }
}
?>

} 