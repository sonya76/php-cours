<?php
/* //Caculer l'age d'une personne en renseignant son année de naissance
//utiliser la fonction date

$dateNaissance =  1943;
$aujourdhui = date("Y");
$age =  $aujourdhui - $dateNaissance;
echo "<h2>Vous êtes né le " . $dateNaissance .'<br>';
echo 'Vous avez ' . $age. ' ans</h2>';

$dateNaissance =  "15-12-1943";
$aujourdhui = date("Y-m-d");
$age = date_diff(date_create($dateNaissance), date_create($aujourdhui));
echo "<h2>Vous êtes né le " . $dateNaissance .'<br>';
echo 'Vous avez ' . $age->format('%y'). ' ans</h2>'; */

//incrementation / decrementation

/* $i=0;
$i++;
echo $i; */

$j=10;
/* $j-=1; */
/* echo "<h2>". $j . "</h2>"; */

$j--;
echo "<h2>". $j . "</h2>";


?>

