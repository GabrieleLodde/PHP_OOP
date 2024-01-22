<?php
    require_once("Alunno.php");

    $alunno1 = new Alunno("Luca", "Giorgi", 27);
    $alunno2 = new Alunno("Andrea", "Verdi", 30);
    $alunno3 = new Alunno("Matteo", "Rossi", 35);

    $arrayAlunni = [];

    array_push($arrayAlunni, $alunno1, $alunno2, $alunno3);

    echo "<html><body bgcolor=\"yellow\">";


    $index = 1;
    foreach ($arrayAlunni as $alunno) {
        echo "<h2 style=\"color:pink;\">Alunno numero: " . $index;
        echo $alunno->toString();
        $index++;
    }

    echo "</body></html>";
?>