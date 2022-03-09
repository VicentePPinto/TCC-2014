<?php
/*
 * classe TSqlInsert
 * Esta classe prov� meios para manipula��o de uma instru��o de INSERT no banco de dados
 */
final class TSqlInsert extends TSqlInstruction
{
    private $columnValues;
    
    /*
     * método setRowData()
     * Atribui valores é determinadas colunas no banco de dados que seráo inseridas
     * @param $column = coluna da tabela
     * @param $value = valor a ser armazenado
     */
    public function setRowData($column, $value)
    {
        // verifica se � um dado escalar (string, inteiro, ...)
        if (is_scalar($value))
        {
            if (is_string($value) and (!empty($value)))
            {
                // adiciona \ em aspas
                $value = addslashes($value);
                // caso seja uma string
                $this->columnValues[$column] = "'$value'";
            }
            else if (is_bool($value))
            {
                // caso seja um boolean
                $this->columnValues[$column] = $value ? 'TRUE': 'FALSE';
            }
            else if ($value!=='')
            {
                // caso seja outro tipo de dado
                $this->columnValues[$column] = $value;
            }
            else
            {
                // caso seja NULL
                $this->columnValues[$column] = "NULL";
            }
        }
    }
    
    /*
     * método setCriteria()
     * n�o existe no contexto desta classe, logo, ir� lan�ar um erro ser for executado
     */
    public function setCriteria(TCriteria $criteria)
    {
        // lan�a o erro
        throw new Exception("Cannot call setCriteria from " . __CLASS__);
    }
    
    /*
     * método getInstruction()
     * retorna a instru��o de INSERT em forma de string.
     */
    public function getInstruction()
    {
        $this->sql = "INSERT INTO {$this->entity} (";
        // monta uma string contendo os nomes de colunas
        $columns = implode(', ', array_keys($this->columnValues));
        // monta uma string contendo os valores
        $values = implode(', ', array_values($this->columnValues));
        $this->sql .= $columns . ')';
        $this->sql .= " values ({$values})";
        return $this->sql;
    }
}
?>