<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

// Creo Array di varie partite con i rispettivi punti
$partite = [
    [
        "squadraCasa" => "Banco di Sardegna Sassari",
        "squadraOspite" => "AIX Armani Exchange Milano",
        "puntiCasa" => 42,
        "puntiOspite" => 80,
    ],
    [
        "squadraCasa" => "Allianz Pallacanestro Trieste",
        "squadraOspite" => "Fortitudo Bologna",
        "puntiCasa" => 51,
        "puntiOspite" => 68,
    ],
    [
        "squadraCasa" => "Bertram Derthona Tortona",
        "squadraOspite" => "Carpegna Prosciutto Pesaro",
        "puntiCasa" => 63,
        "puntiOspite" => 90,
    ],
    [
        "squadraCasa" => "Dolomiti Energia Trentino",
        "squadraOspite" => "Germani Brescia",
        "puntiCasa" => 75,
        "puntiOspite" => 74,
    ],
];

// Ciclo sulle partite e stampo i risultati come da consegna
for ($i=0; $i < count($partite); $i++) { 
    echo $partite[$i]["squadraCasa"] ." " . "-" . " " . $partite[$i]["squadraOspite"] . " " . "|" . " " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] . "<br><br>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 1</title>
</head>

<body>

</body>

</html>