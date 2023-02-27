<!DOCTYPE html>
<html>
<body>

<?php
$valor=(float)91.01;
//NOTAS
$nota100=(int)($valor/100);
$rest = fmod($valor,100);
$nota50=(int)($rest/50);
$rest = fmod($rest,50);
$nota20=(int)($rest/20);
$rest = fmod($rest,20);
$nota10=(int)($rest/10);
$rest = fmod($rest,10);
$nota5=(int)($rest/5);
$rest = fmod($rest,5);
$nota2=(int)($rest/2);
$rest = fmod($rest,2);
$nota1=(int)($rest/1);
$rest = fmod($rest,1);
//MOEDAS
$moeda50=(int)($rest/0.5);
$rest = fmod($rest,0.5);
$moeda25=(int)($rest/0.25);
$rest = fmod($rest,0.25);
$moeda10=(int)($rest/0.1);
$rest = fmod($rest,0.1);
$moeda5=(int)($rest/0.05);
$rest = fmod($rest,0.05);
$moeda1=(int)($rest/0.01);




echo "esse e o valor $valor </br>";
echo "NOTAS </br>";
echo "notas de 100-> $nota100 </br>";
echo "notas de 50-> $nota50 </br>";
echo "notas de 20-> $nota20 </br>";
echo "notas de 10-> $nota10 </br>";
echo "notas de 5-> $nota5 </br>";
echo "notas de 2-> $nota2 </br>";
echo "MOEDAS </br>";
echo "Moeda de 1-> $nota1 </br>";
echo "Moeda de 50-> $moeda50 </br>";
echo "Moeda de 25-> $moeda25 </br>";
echo "Moeda de 10-> $moeda10 </br>";
echo "Moeda de 5-> $moeda5 </br>";
echo "Moeda de 1-> $moeda1 </br>";

?>

</body>
</html>