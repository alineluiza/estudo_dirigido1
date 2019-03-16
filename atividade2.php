<?php

   print "Digite os dias:";
   $dias = fgets (STDIN);

   print "Digite as horas:";
   $horas = fgets (STDIN);
   
   print "Digite os minutos:";
   $minutos = fgets (STDIN);

   print "Digite os segundos:";
   $segundos = fgets (STDIN);

   $segundos_dias = $dias*86400;
   $segundos_horas = $horas*3600;
   $segundos_minutos = $minutos*60;

   $total_em_segundos = $segundos_dias + $segundos_horas + $segundos_minutos + $segundos;
   print "O total de $dias dias, $horas horas, $minutos minutos, $segundos segundos, em segundos é igual a: $total_em_segundos";



   