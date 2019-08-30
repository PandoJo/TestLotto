<?php

    // Nombre de numéro + résultat du tirage

    $number = array();
    $result = 0;

    for($i=1; $i<=45; $i++){
        array_push($number, $i);
    }


    // Statistique du nombre de gagnant par catégorie

    $n6 = 0;
    $n5plus = 0;
    $n5 = 0;
    $n4plus = 0;
    $n4 = 0;
    $n3plus = 0;
    $n3 = 0;
    $n2plus = 0;
    $n1plus = 0;

    for($n=1; $n<=10; $n++){
        
        $number1 = $number;

        $choice = array_rand($number1, 6);

        for($i=0; $i<=5; $i++){
            unset($number1[array_search($choice[$i], $number1)]);
        }

        $complementaire = array_rand($number1, 1);

        echo 'le résultat du tirage est : ';
        foreach($choice as $num){
            echo $number[$num] . ' - ';
        }

        echo '[' . $number[$number1[$complementaire]] . '] <br>';
    }










?>