<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
 Travail-00 :

    Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
    Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
    Afficher les résultats sous forme de liste html ul comme ceci (xx,yy sont des nombres) :

* xx : pair
* yy : impaire
etc ...
 */
$nombres = [27,15,34,379,248,5643,81,211,999,142,300,572];

foreach ($nombres as $key => $value) {
  ?>
<ul>
    <li><?php
     $ispair = $value % 2;
     if ($ispair===0)
     {
     echo $value ." : pair";
     }
     else
     {
        echo $value ." : impaire";
     }

     ?></li>
</ul>

<?php
}
?>
</body>
</html>

