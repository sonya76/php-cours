<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau multidimensionnel de produits</title>
</head>

<body> 
    <h1>Produits</h1>
    <?php
   
//Boucler sur le tableau produits (foreach) en affichant le nom du produit et le prix sont selon le modéle : 
// 'nom du produit' : 'prix'€
//dans une liste ul, le 'nom du produit' dans un h3 et le prix dans un p

    // tableau de produits
    $produits = [
        ['nom' => 'chaussettes', 'prix' => 10],
        ['nom' => 'velo', 'prix' => 500],
        ['nom' => 'carotte', 'prix' => 2],
        ['nom' => 'boulon', 'prix' => 9],
    ];
    echo '<pre>';
    print_r($produits);
    echo '</pre>';
    echo '<hr>';

    foreach ($produits as $key => $value) {
    ?><ul>
        <li>
            <h3><?php echo $produits[$key]['nom']  ?></h3> 
            <p><?php echo $produits[$key]['prix'] . " €" ?></p>
        </li> 
      </ul>
    <?php } ?>
    <?php
      echo '<hr> $produits as $produit';
    foreach ($produits as $produit) {
    ?><ul>
        <li>
            <h3><?php echo $produit['nom'] ; ?></h3> 
            <p><?php echo $produit['prix'] . " €"; ?></p>
        </li> 
      </ul>
    <?php } ?>

</body>

</html>