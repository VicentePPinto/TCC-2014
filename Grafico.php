<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 26/01/14
 * Time: 22:12
 */
SetFileFormat("png");
#Indicamos o títul do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");
#Definimos os dados do gráfico
$dados = array( array('Janeiro', 10), array('Fevereiro', 5), array('Março', 4), array('Abril', 8), array('Maio', 7), array('Junho', 5), );
$grafico->SetDataValues($dados);
#Neste caso, usariamos o gráfico em barras
$grafico->SetPlotType("bars");
#Exibimos o gráfico
$grafico->DrawGraph(); ?>

