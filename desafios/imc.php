<?php   
    $peso = 100;
    $altura = 1.87;
    $imc = $peso / $altura ** 2;

    echo "Seu IMC é de $imc. Voce está com o IMC ";

    if($imc < 18.5){
        echo "abaixo";
    } elseif ($imc < 25){
        echo "dentro";
    } else {
        echo "acima";
    }

    echo " do recomendado";