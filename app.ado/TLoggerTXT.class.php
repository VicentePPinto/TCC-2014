<?php
/*
 * classe TLoggerTXT
 * implementa o algoritmo de LOG em TXT
 */
class TLoggerTXT extends TLogger
{
   
    public function write($message)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $time = date("Y-m-d H:i:s");
        
        
        $text = "$time :: $message\n";
        
       
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}
?>