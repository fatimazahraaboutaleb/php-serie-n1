<?php
 if ($age==6 || $age==7){
    echo "Poussin";
 }
 elseif ($age==8 || $age==9){
    echo "Pupille";
 }
 elseif ($age==10 || $age==11){
    echo "Minime";
 }
 elseif ($age>=12 || $age<=17){
    echo "Cadet";
 }
 else{
    echo "erreur";
 }