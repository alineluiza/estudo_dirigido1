<?php

print "informe a distancia que sera percorrida Km: ";
$Km = (int) fgets (STDIN);

print "Informe a velocidade media que sera percorrido: ";
$velocidade = (int) fgets (STDIN);

$tempo = round ($Km / $velocidade) ;

print "Sua viajem irá durar: $tempo horas \n \n";