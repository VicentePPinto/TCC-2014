<?php
/*
 * classe TTransaction
 * esta classe prove os metodos necessarios manipular transações
 */
final class TTransaction
{
    private static $conn;   
    private static $logger; 
    
   
    private function __construct() {}
    
   
    public static function open($database)
    {
        
        if (empty(self::$conn))
        {
            self::$conn = TConnection::open($database);
            
            self::$conn->beginTransaction();
            
            self::$logger = NULL;
        }
    }
    
    
    public static function get()
    {
        // retorna a conexão ativa
        return self::$conn;
    }
    
    
    public static function rollback()
    {
        if (self::$conn)
        {
    
            self::$conn->rollback();
            self::$conn = NULL;
        }
    }
    
    
    public static function close()
    {
        if (self::$conn)
        {
            self::$conn->commit();
            self::$conn = NULL;
        }
    }
    
    
    public static function setLogger(TLogger $logger)
    {
        self::$logger = $logger;
    }
    
        public static function log($message)
    {
    
        if (self::$logger)
        {
            self::$logger->write($message);
        }
    }
}
?>