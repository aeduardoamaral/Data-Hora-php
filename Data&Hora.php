<?php

$dia = date("d");
$mes = date("m");
$ano = date("Y");
$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

$hora=date("H");//h=12 horas - H: 24 horas
$minuto=date("i");
$segundo=date("s");


echo $dia."  de  ".$meses[$mes-1]."  de  ".$ano."<br/>";
echo $hora." : ".$minuto."  :  ".$segundo;








?>