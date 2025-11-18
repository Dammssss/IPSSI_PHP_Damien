<?php
function calcMoy(array $nombres):float {
    $somme = array_sum($nombres);
    $nombreDeNombres = count($nombres);

    if ($nombreDeNombres > 0) {
        $moyenne = $somme / $nombreDeNombres;
        return $moyenne;
    } else {
        return 0;
    }
}

$tableauDeNombres = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$moyenne = calcMoy($tableauDeNombres);

echo "La moyenne est : " . $moyenne;
?>