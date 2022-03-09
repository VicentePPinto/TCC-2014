<?php
/*
 * classe TFilter
 * Esta classe prov� uma interface para defini��o de filtros de sele��o
 */
class TFilter extends TExpression
{
    private $variable; 
    private $operator; 
    private $value;    
    
  
    public function __construct($variable, $operator, $value)
    {
      
        $this->variable = $variable;
        $this->operator = $operator;
        
        $this->value     = $this->transform($value);
    }
    
   
    private function transform($value)
    {
        // caso seja um array
        if (is_array($value))
        {
            
            foreach ($value as $x)
            {
                // se for um inteiro
                if (is_integer($x))
                {
                    $foo[]= $x;
                }
                else if (is_string($x))
                {
                   
                    $foo[]= "'$x'";
                }
            }
            
            $result = '(' . implode(',', $foo) . ')';
        }
       
        else if (is_string($value))
        {
            // adiciona aspas
            $result = "'$value'";
        }
        // caso seja valor nullo
        else if (is_null($value))
        {
            // armazena NULL
            $result = 'NULL';
        }
        
        else if (is_bool($value))
        {
            $result = $value ? 'TRUE' : 'FALSE';
        }
        else
        {
            $result = $value;
        }
       
        return $result;
    }
    
    
    public function dump()
    {
        // concatena a expressão
        return "{$this->variable} {$this->operator} {$this->value}";
    }
}
?>