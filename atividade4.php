<?php

print "Informe o valor do produto :";
$preco = (int) fgets (STDIN);

print "Informe a porcentagem de desconto:";
$desconto = (int) fgets (STDIN);

$valordesconto = ($preco * $desconto) /100;

$precofinal = $preco - $valordesconto; 

print " \n Seu desconto é de: $valordesconto \n \n";
print "\n Valor total a pagar: $precofinal \n \n";
