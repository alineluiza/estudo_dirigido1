<?php

print " \n Informe seu sálario: ";
$salario = (int) fgets(STDIN);

print " \n Informe o aumento do seu salário: ";
$aumento = (int) fgets(STDIN);

$valoraumento = $salario*$aumento/100;
$salariofinal  =  $salario + $valoraumento;

print "\n Seu salário final vai ser: $salariofinal ";