<?php
/*
 * classe TCriteria
 * Esta classe prov� uma interface utilizada para defini��o de crit�rios
 */
class TCriteria extends TExpression
{
    private $expressions; 
    private $operators;   
    private $properties;   
    
   
    function __construct()
    {
        $this->expressions = array();
        $this->operators = array();
    }
    
   
    public function add(TExpression $expression, $operator = self::AND_OPERATOR)
    {
   
        if (empty($this->expressions))
        {
            $operator = NULL;
        }
        
        // agrega o resultado da expressao
        $this->expressions[] = $expression;
        $this->operators[]    = $operator;
    }
    
    /*
     * m�todo dump()
     * retorna a express�o final
     */
    public function dump()
    {
        // concatena a lista de express�es
        if (is_array($this->expressions))
        {
            if (count($this->expressions) > 0)
            {
                $result = '';
                foreach ($this->expressions as $i=> $expression)
                {
                    $operator = $this->operators[$i];
                    
                    $result .= $operator. $expression->dump() . ' ';
                }
                $result = trim($result);
                return "({$result})";
            }
        }
    }
    
    
    public function setProperty($property, $value)
    {
        if (isset($value))
        {
            $this->properties[$property] = $value;
        }
        else
        {
            $this->properties[$property] = NULL;
        }
    }
    
    
    public function getProperty($property)
    {
        if (isset($this->properties[$property]))
        {
            return $this->properties[$property];
        }
    }
}
?>