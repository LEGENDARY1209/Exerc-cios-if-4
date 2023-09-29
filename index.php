<?php
    $velocidade = 45; // Exemplo: velocidade de 45 km/h

    if ($velocidade < 50) {
        echo "O motorista está na velocidade correta.";
    } elseif ($velocidade == 40) {
        echo "Atenção!";
    } else {
        echo "Multa!";
    }
?>
