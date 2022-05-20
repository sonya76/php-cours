<?php

// $tab = [
//     'voiture' => 'ford',
//     'nombre' => [1, 2, 3, 4],
//     'planete' => ['mars', 'terre']
// ];
// echo '<pre>';
// print_r($tab);
// echo '</pre>';

$tab = [];
$tab[] = ['A', 'B', 'C'];
$tab[] = ['Q', 'R', 'T'];
$tab[] = ['E', 'U', 'P', 'I'];
echo '<pre>';
print_r($tab);
echo '</pre>';
echo '<hr>';
//Ecrire le mot CEPPIC
echo '<pre>';
// quand on affiche les valeurs d'un tableau on peut faire un echo plutot qu'un print_r()
echo $tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2];
echo '</pre>';
echo '<hr>';
$tab2 = [
    [0, 1],
    [
        2,
        [2, 3]
    ]
];
//afficher la valeur 3
echo $tab2[1][1][1];
echo '<hr>';
// tableau de produits
$produits[] = [
    ['nom' => 'chaussettes', 'prix' => 10],
    ['nom' => 'velo', 'prix' => 500],
    ['nom' => 'carotte', 'prix' => 2],
    ['nom' => 'boulon', 'prix' => 9],
];

print_r($produits);
//Boucler sur le tableau produits (foreach) en affichant le nom du produit et le prix sont selon le modéle : 
// 'nom du produit' : 'prix'€
//dans une liste ul, le 'nom du produit' dans un h3 et le prix dans un p
