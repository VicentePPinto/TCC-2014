<?php
/*
 * classe TRecord
 * Esta classe provê os metodos para persistir e
 * recuperar da base de dados (Active Record)
 * 
 * author Thiago Selliach
 */
abstract class TRecord
{
    protected $data; 
    
    
    public function __construct($id = NULL)
    {
        if ($id)
        {
            
            $object = $this->load($id);
            if ($object)
            {
                $this->fromArray($object->toArray());
            }
        }
    }
    
   
    public function __clone()
    {
        unset($this->id);
    }
    
   
    public function __set($prop, $value)
    {
        // verifica se existe metodo set_<propriedade>
        if (method_exists($this, 'set_'.$prop))
        {
            
            call_user_func(array($this, 'set_'.$prop), $value);
        }
        else
        {
            if ($value === NULL)
            {
                unset($this->data[$prop]);
            }
            else
            {

                $this->data[$prop] = $value;
            }
        }
    }
    
    public function __get($prop)
    {

        if (method_exists($this, 'get_'.$prop))
        {

            return call_user_func(array($this, 'get_'.$prop));
        }
        else
        {

            if (isset($this->data[$prop]))
            {
                return $this->data[$prop];
            }
        }
    }
    
//    retorna o nome da entidade tabela
     
    private function getEntity()
    {
        // obt�m o nome da classe
        $class = get_class($this);
        
        // retorna a constante de classe TABLENAME
        return constant("{$class}::TABLENAME");
    }
    
    
    public function fromArray($data)
    {
        $this->data = $data;
    }
    
    
    public function toArray()
    {
        return $this->data;
    }
    
    
    public function store()
    {
        // verifica se tem ID ou se existe na base de dados
        if (empty($this->data['id']) or (!$this->load($this->id)))
        {
            // incrementa o ID
            if (empty($this->data['id']))
            {
                $this->id = $this->getLast() +1;
            }
            // cria uma instru��o de insert
            $sql = new TSqlInsert;
            $sql->setEntity($this->getEntity());
            // percorre os dados do objeto
            foreach ($this->data as $key => $value)
            {
                // passa os dados do objeto para o SQL
                $sql->setRowData($key, $this->$key);
            }
        }
        else
        {
    
            $sql = new TSqlUpdate;
            $sql->setEntity($this->getEntity());
            // cria um criterio de selecao baseado no ID
            $criteria = new TCriteria;
            $criteria->add(new TFilter('id', '=', $this->id));
            $sql->setCriteria($criteria);
            // percorre os dados do objeto
            foreach ($this->data as $key => $value)
            {
                if ($key !== 'id')
                
                {
                    // passa os dados do objeto para o SQL
                    $sql->setRowData($key, $this->$key);
                }
                
            }
        }
        
        if ($conn = TTransaction::get())
        
        {
        
            TTransaction::log($sql->getInstruction());
            $result = $conn->exec($sql->getInstruction());
        
            return $result;
        }
        else
        {
        
            throw new Exception('Não há transação ativa!!');
        }
    }
    
    
    public function load($id)
    {
    
        $sql = new TSqlSelect;
        $sql->setEntity($this->getEntity());
        $sql->addColumn('*');
        
        
        $criteria = new TCriteria;
        $criteria->add(new TFilter('id', '=', $id));
       
        $sql->setCriteria($criteria);
        
     
        if ($conn = TTransaction::get())
        {
         
            TTransaction::log($sql->getInstruction());
            $result= $conn->Query($sql->getInstruction());
            
         
            if ($result)
            {
         
                $object = $result->fetchObject(get_class($this));
            }
            return $object;
        }
        else
        {
         
            throw new Exception('Nao ha transacao ativa!');
        }
    }
    
    public function delete($id = NULL)
    {
    
        $id = $id ? $id : $this->id;
        
    
        $sql = new TSqlDelete;
        $sql->setEntity($this->getEntity());
    
        $criteria = new TCriteria;
        $criteria->add(new TFilter('id', '=', $id));
        
       
        $sql->setCriteria($criteria);
       
       
        if ($conn = TTransaction::get())
        {
       
            TTransaction::log($sql->getInstruction());
            $result = $conn->exec($sql->getInstruction());
            
            return $result;
        }
        else
        {
            
            throw new Exception('N�o h� transa��o ativa!!');
        }
    }
    
    /*
     * m�todo getLast()
     * retorna o �ltimo ID
     */
    private function getLast()
    {
        // inicia transa��o
        if ($conn = TTransaction::get())
        {
            // instancia instru��o de SELECT
            $sql = new TSqlSelect;
            $sql->addColumn('max(ID) as ID');
            $sql->setEntity($this->getEntity());
            
            // cria log e executa instru��o SQL
            TTransaction::log($sql->getInstruction());
            $result= $conn->Query($sql->getInstruction());
            
            // retorna os dados do banco
            $row = $result->fetch();
            return $row[0];
        }
        else
        {
            // se n�o tiver transa��o, retorna uma exce��o
            throw new Exception('N�o h� transa��o ativa!!');
        }
    }
}
?>