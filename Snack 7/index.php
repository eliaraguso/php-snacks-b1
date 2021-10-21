<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome 
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$studenti = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [5,6,7,7,9]
    ],
    [
        "nome" => "Marco",
        "cognome" => "Bianchi",
        "voti" => [8,10,9,9,10]
    ],
    [
        "nome" => "Anna",
        "cognome" => "Verdi",
        "voti" => [5,4,7,7,6]
    ],
];

function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
  }




foreach ($studenti as $studente) {
    $media = calcolaMedia($studente["voti"]);
    echo "{$studente["nome"]} {$studente["cognome"]} {$media} <br>";
}
?>