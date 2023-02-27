<?php
$idade=(int)30;
//NOTAS
$ano = (int)($idade/365);
$rest = $idade%365;
$mes = (int)($rest/30);
$rest = $rest%30;
$dia = $rest;

echo "$ano ano(s) </br>";
echo "$mes mes(es) </br>";
echo "$dia dia(s) </br>";

?>