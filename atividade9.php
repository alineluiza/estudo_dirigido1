<?php

$area =108;

$latarendi =108;
$latapreco = 80;

$galaorendi =21.6 ;
$galaopreco = 25; 

#a comprar apenas com latas de 18 litros pintando 109m
$quantlatas = ceil ($area / $latarendi);
print $quantlatas;

#b comprar apenas com galoes de 3,6 litros
$quantgalao = ceil ($area / $galaorendi );
$galaorendi = 

#c comprar com o melhor custo beneficio

$quantlatas = (int) ($area / $latarendi);
$faltoulata = fmod ($area % $galaorendi);
$quantgalao =ceil ($faltoulata / $galaorendi);

print ("$faltoulata -$quantgalao")
