<?php

print "\n Informe a Temperatura em Celsius (°C) :";
$celcius = (int) fgets (STDIN);

$fahrenheit = ($celcius * 9/5) + 32 ;

print "\n A temperatura em Fahrenheit (°F) fica: $fahrenheit °F \n \n";
