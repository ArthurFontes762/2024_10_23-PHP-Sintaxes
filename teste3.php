// Arrays de chamada dos alunos

<?php
    echo "<br><br>";
    $chamada = array();
    $chamada["Abelardo"] = 25;
    $chamada["Adenaldo"] = 1;
    $chamada["Afumaldo"] = 14;
    $chamada["Azelaide"] = 6;

    foreach ($chamada as $nome => $faltas) {
        echo "$nome teve $faltas faltas <br>";
    }
    echo "<br>";

    var_dump($chamada); // Chamada pra ver o código da função
?>