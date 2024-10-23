// Relógio

<?php
    echo "<br><br>";
    date_default_timezone_set('America/Sao_Paulo'); // Corrigido para set
    $data = date("d/m/Y"); // Exibe a data, mês e ano atual
    $hora = date("H:i"); // Exibe a hora e minuto atual

    // Exibe a data
    echo "Data: $data<br>";
    echo "Hora: $hora<br>";
    
     // Verifica a hora e exibe a mensagem correspondente
     if ($hora >= "07:00" && $hora < "12:00") {
        echo "Acorda, Bom dia!";
    } elseif ($hora >= "12:00" && $hora < "18:00") {
        echo "Hora do café, Boa tarde!";
    } elseif ($hora >= "18:00" && $hora < "24:00") {
        echo "Hora de dormir, Boa noite!";
    } else {
        echo "Boa madrugada!";
    }
    echo "<br><br>";

    var_dump($data); // Chamada pra ver o código da função
    var_dump($hora); // Chamada pra ver o código da função
?>