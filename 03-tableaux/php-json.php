<?php
$person1 = [
    'prenom' => 'Carle',
    'nom' => 'Awa',
    'email' => 'carwa@laposte.fr',
];
$people = [
    $person1,
    [
        'prenom' => 'Mohamed',
        'nom' => 'Mourad',
        'email' => 'mohmou@yahoo.com',
    ],
    [
        'prenom' => 'Lucie',
        'nom' => 'Dupond',
        'email' => 'ludu@gmail.com',
    ]
];
echo '<pre>';
print_r($people);
echo '</pre>';
echo '<hr>';

//afficher l'email et le nom de famille de lucie
echo 'Le nom de Lucie est '. $people[2]['nom'] . '<br><br>';
echo '<hr>';
echo 'L\'adresse mail de Lucie est : ' .$people[2]['email']. '<br><br>';

$json_array_php=json_encode($people);
echo '<hr>';
print_r($json_array_php);