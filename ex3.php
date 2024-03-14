<?php
 $age1=12;
 $age2=3;
 $age3=12;
 
 if ($age1==$age2 && $age2==$age3){
     echo "Les trois variables sont identiques.";
 }
 elseif ($age1==$age2 || $age1==$age3 || $age2==$age3){
     echo " deux des variables sont de valeurs égales.";
 }
 else{
     echo "Les trois variables sont différentes.";
 }