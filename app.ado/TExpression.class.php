<?php
/*
 * classe TExpression
 * classe abstrata para gerenciar express�es
 */
abstract class TExpression
{
    // operadores l�gicos
    const AND_OPERATOR = 'AND ';
    const OR_OPERATOR = 'OR ';
    
    // marca método dump como obrigatório
    abstract public function dump();
}
?>