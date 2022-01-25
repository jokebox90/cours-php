<?php

$nom = 'Jonathan';
$prenom = 'VAGNIER';

$result = "Je m'appelle " . $nom . " " . $prenom . " !";

echo $result;

$add = 'denis.lamalice@gmail.com';
$pos =  strpos($add,'@') ;
echo iconv_substr($add,0,$pos);

$lance1 = rand(1, 6);
$lance2 = rand(1, 6);

if ($lance1 > $lance2) {
  echo "Lancé 1 a gagné à " . $lance1 . " contre " . $lance2;
} elseif ($lance1 < $lance2) {
  echo "Lancé 2 a gagné à " . $lance2 . " contre " . $lance1;
} else {
  echo "Lancé 1 et Lancé 2 sont match nul";
}

function calculTVA(int $montant, float $taux = 20.0) {
  $diff = $montant * ($taux / 100);
  $total = $montant + round($diff);
  return $total;
}


echo "CalculTVA :" . calculTVA(200);
echo "CalculTVA :" . calculTVA(200, 5.5);