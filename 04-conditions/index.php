<?php
/*
<
>
>=
<=
== : comparaison d'égalité en valeur
=== : comparaison d'égalité en valeur et en type
!=
!==
*/
//================
// if/elseif/else
//================
// $age = 18;
// if ($age >= 18) {
//     echo "Vous avez l'age de voter";
// }elseif($age<=25){
//     echo "Vous avez le droit de voter car votre âge entre 18 et 85";
// }
// else{
//     echo "Vous ne pouvez pas voter car vous n'êtes majeur car votre âge est de : $age ans.";
// }

// affiche l'heure

// avec la condition if/else afficher si on est le matin ou le midi ou le soir (après 18h)

//$heure = date('H');
// $heure = 8;
// if ($heure <= 12) {
//     echo "On est le matin";
// } elseif ($heure  >= 18) {
//     echo "C'est le soir";
// } else {
//     echo "le midi";
// }

//***************************** */
$a = 20;
$b = 5;
$c1 = 10;
$c2 = '10';

// if ($b != 3) {
//     echo 'La variable $b n\'est pas égale à 3';
// }

// Tester $c1 et $c2 avec == et ===
//
// if ($c1 == 10) {
//     echo 'La variable $c1 égale à 10 <br>';

// }
// if ($c2 === '10') {
//     echo 'La variable $c2 est bien strictement === à la valeur 10 et type string  ';
// }else{
//     echo 'La valeur doit strictement === être le string 10';
// }
// if ($c2 !== '10') {
//     echo 'Test !=';
// }

//==============
//SWITCH CASE
//==============
// $couleur = 'jaune';

// switch ($couleur) {
//     case 'red':
//         echo 'votre couleur favorite est le rouge';
//         break;
//     case 'blue':
//         echo 'votre couleur favorite est le bleue';
//         break;
//     case 'green':
//         echo 'votre couleur favorite est le vert';
//         break;
//     case 'jaune':
//     default:
//         echo 'Votre couleur favorite n\'est ni le rouge, ni le bleu, ni le vert ';
//         break;
// }

//==============
//EMPTY/ISSET
//==============
//$vrai = true;
//$var2 = ''; // que ce soit '' ou 0 et false ou null ou non défini le résultat est vide 

// if (empty($var1)) {
//     echo ' $var est vide !';
// }else{
//     echo var_dump($var1);
// }

//**** ISSET */
// isset test si la variable est défini et a une valeur non null
// $var2 ;
// if (isset($var2)) {
//     echo 'test isset';
// }


// if (!isset($article)) {
//     echo 'il y a pas d\'articles <br>';
// }
// echo '<hr>';
//Faire une condition sur ce tableau : tester l'article à l'index 0 si il eest non vide, 
//sinon afficher "il n'y a pas d'articles"
// Créer une brance articles, que vous fusionnerez avec main lorsque l'exercice est finit
//echo (isset($articles));
// $articles = [
//     '',
//     'planete',
//     'chemises',
// ];

// if (!isset($articles[0])) {
    
//    var_dump( $articles[0]);
    
// }
// else{
   
//     echo 'il y a pas articles  <br>';
// }

//========== */
// Opérateur ternaire
// condition ? true : false
//================

// $articles = [];
// echo !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";

$premierArticle = !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";
echo $premierArticle;