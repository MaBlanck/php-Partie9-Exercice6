<?php
$m = 2;
$y = 2016;
    $mois = mktime( 0, 0, 0, $m, 1, $y ); 
    setlocale(LC_TIME, 'fr.UTF-8'); 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 6 Partie 9</title>
</head>

<body>
    <h1>Exercice 6 Partie 9</h1>
    <p><?= 'Le mois de ' . strftime('%B %Y', $mois) . ' possède ' . date("t", $mois) . ' jours'; ?></p>
</body>

</html>