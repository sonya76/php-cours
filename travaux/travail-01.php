<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travail-01</title>
</head>
<body>
<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */
?>
<table class="table table-striped table-responsive">
    <tr>
        <td>| °C | °F |</td>
    </tr>
    <tr>
        <td>| --- | --- |</td>
    </tr>
    <?php
        $celsius = [25,03,35,11];
        foreach ($celsius as $key => $value)
        {
        //Pour chaque valeur du tableau celsius je converti en Fahrenheit
        $fahrenheit = ($value * 9/5) + 32;
    ?>
    <tbody>
    <tr>
        <td>
            <?php echo '| ' . str_pad($value, 2, '0', STR_PAD_LEFT) .' |'; ?>
            <?php echo round($fahrenheit,1,PHP_ROUND_HALF_UP) .' | '; ?>
        </td>
    </tr>
        <?php } ?>
   </tbody>
</table>
</body>
</html>



