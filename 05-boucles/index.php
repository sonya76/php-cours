<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>

<body>

    <ul>
    <?php
    // Loops
    //Avec une boucle while afficher toutes les années de 1970 à aujourd'hui dans une liste ul
    // $annee = 1970;
    // $anneeCourent = date('Y');
    // $nbAnnees = $anneeCourent - $annee;
    // while ($annee <= $anneeCourent) {
    //     echo "<li>$annee</li>";
    //     $annee++;
    // }
    // //Afficher le nombre de jour depuis 1970
    // $nbJoursAnnees = 365;
    // $nbJours = $nbAnnees *= $nbJoursAnnees;
    // $j = 0;
    // while ($j <= $nbAnnees) {
    //     $j++;
    // }
    // $j;
    // echo "<li> Le nombre de jours depuis 1970 est : $j </li>";
    // 
    ?>
    </ul>
</body>

</html> -->
<?php
//==========
// Do while
//==========

// $y=0;
// $k=10;
// do{
//     echo "Nombre : $y<br>";
//     $y++;
//     $k--;
// }while($x >=10);
// echo "<br>";
// echo $k;

//
//==========
// FOREACH
//==========

// $tab3 = [
//     'nom' => 'Durand',
//     'prenom' => 'Michel',
//     'age' => 34
// ];
// foreach ($tab3 as $key => $value) {
//     echo "$key : $value<br> ";
// }

//avec une boucle for afficher les nombres de 34 à 89 séparer par une virgule,
//l'affichage ne doit pas se terminer par une virgule

for($i = 34; $i <= 89; $i++)
{
    if($i == 89)
    {
        echo $i;
    }
    else
    {
        echo $i. " , ";
    }
}

?>