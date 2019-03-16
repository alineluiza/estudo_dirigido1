<?php

print " \n Você fuma a quantos anos? ";
$anosfumados = (int) fgets (STDIN);

Print " \n Quantos cigarros você fuma por dia? ";
$cigarrosdias = (int) fgets (STDIN);

$cigarros = $cigarrosdias*365*$anosfumados;

$minutosperdidos = $cigarros*10;
$horasperdidas = $minutosperdidos/60;
$diasperdidos = round ($horasperdidas/24);

print " \n Vai morrer $diasperdidos dias mais cedo \n \n ";

