<?php
// // //Tableau indexé
// // //déclaration d'un tableau
// // echo '<pre>';
// // $tableau = array();
// // //$tableau = [];
// //$tab2 = array('Lundi', 'Mardi', 45, 67.8, false);
// // $tableau = [
// //     true,
// //     45,
// //     'Terre',
// //     56, 
// //     [45, 67, 78]
// //     ];
// // //var_dump($tableau);
// // //echo '</pre>';
// // $tableau[]='janvier';
// // $tableau[]=45;
// // $tableau[]=false;
// // //il est préférable d'utiliser array_push()
// // array_push($tableau,'voiture');
// // //echo '<br> le nombre de valeur';
// // //echo count($tableau);
// // echo '<br>';
// // //var_dump($tableau);
// // //echo $tableau[0];
// // //echo $tableau[2];



// // $notes = [12,5,16,7];
// // //afficher la moyenne des notes
// // $sommeNotes = $notes[0] +$notes[1] +$notes[2] + $notes[3];
// // $moyenne = $sommeNotes /4;
// // echo $moyenne;
// // $tab3 = array_merge($tableau,$notes);
// // //var_dump($tab3); //assemble des tableaux
// // echo '</pre>';

// // for($i=0; $i > count($tab2); $i++){
// //     echo $tab2[$i] .'<br>';
// // }

// //*** Parcourir le tableau avec la boucle for ***/
// //$fruits = ['Banane', 'Kiwi', 'Pomme', 'Poire'];
// // $html ='';
// // for($i = 0; $i < count($fruits); $i++) {
// //     $html .= $fruits[$i] . ', ';
// // }
// // echo $html;

// // ****** Parcourir le tableau avec foreach()
// // foreach($fruits as $fruit ){
// //     echo $fruit. '<br>';
// // }

// //************************************************** */
// // Constuire un tableau $nombres à l'aide la boucle for contenant les nombre de 34 à 78
// // $nombres = [];

// // for($i = 34; $i <= 78; $i++){
// //      array_push($nombres, $i);

// // }
// // echo '<pre>';
// // print_r($nombres);
// // echo '</pre>';


// // $nombres2 = [];

// // for ($k = 34; $k <= 78; $k++) {
// //     $nombres2[] = $k;
// // }
// // echo '<pre>';
// // $nombres2[21] = 100;
// // $nombres2[0] .= ' lune';
// // $nombres2[20] = $nombres2[21];
// // print_r($nombres2);
// // echo '</pre>';

// //************************************************** */
// //***  Les tableaux associatives ***/

// // $fruits = ['Banane' => 'jaune', 'Pomme' => 'rouge', 'Kiwi' => 'vert'];

// // echo 'La couleur de la pomme est ' . $fruits['Pomme'] . '. <br>';
// // echo '<pre>';
// // print_r($fruits);
// // echo '</pre>';
// // echo 'La longeur du tableau $fruits est de ' . sizeof($fruits) . '. <br>'; // ici sizeof() est pareil count()
// // $ages =  [
// //     'Michel' => 34,
// //     'Lucie' => 12,
// //     'Mouloud' => 56
// // ];
// // echo '<pre>';
// // print_r($ages);
// // echo '</pre>';
// // $chaine = implode(' - ', $ages); //implode() assemble les valeurs du tableaux en une chaine de caractères.
// // echo $chaine;
// // $ages['Paul'] = 22; // ajout d'un nouvel element au tableau $ages
// // $ages['Lucie'] = 02; // modification d'un element du tableau $ages
// // echo '<pre>';
// // print_r($ages);
// // echo '</pre>';

// // $ages2 = explode('-', $chaine); //transforme une chaine de caractères en un tableau en précisant le délimiteur '-'
// // echo '<pre>';
// // print_r($ages2);
// // echo '</pre>';

// // foreach($ages as $key => $value){
// //     echo $key . ' a ' . $value . ' ans <br>';
// // }

// // $html ='<ul>';
// // foreach($ages as $key => $value){
// //     $html.= '<li>'. $key . ' a ' . $value . ' ans </li>';
// // }
// // $html.='</ul>'; 
// // echo $html;

// /*****Exercice  ******************************************************/
// //***** créer un tableau $notes avec un prénom => une note 
// // afficher une liste ul des eleves et leur notes
// // Marc a obtenue 15/20

// // //on créer un tableau $notes où on a attribu une valeur de notes $value aux eleves $key
// // $ages =  [
// //         'Marc' => 34,
// //         'Laura' => 20,
// //         'Paul' => 25,
// //         'Jeanne' => 35
// //     ];
// // $notes = [
// //     'Marc' => 15,
// //     'Laura' => 18,
// //     'Paul' => 17,
// //     'Jeanne' => 14
// // ];
// // $html = '<ul>';
// // //on parcours le tableau $notes par un foreach et on affiche le résultat dans une liste des élèves avec ses notes.
// // foreach ($notes as $key => $value) {
// //     $html .= '<li> <strong>' . $key . '</strong> a obtenu  <strong>' . $value . '/20</strong> </li>';
// // }
// // $html .= '</ul>';
// // echo $html;

// // $eleves=array_merge($notes, $ages);
// // print_r($eleves);


// //********les tries ************************/
// // création du tableau planètes
// $planetes = [
//     'mars',
//     'terre',
//     'pluton',
//     'venus',
//     'jupiter'
// ];
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';

// //trie asort
// echo " <strong>Trie asort </strong> <br>";
// echo " <p>asort — Trie un tableau en ordre croissant et conserve l'association des index </p> ";
// asort($planetes);
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';

// //trie rsort
// echo " <strong>Trie rsort  </strong><br>";
// echo " <p>rsort — Trie un tableau en ordre décroissant</p> ";
// rsort($planetes);
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';

// //trie ksort
// echo " <strong>Trie ksort  </strong><br>";
// echo " <p>ksort — Trie un tableau en fonction des clés en ordre croissant </p>";
// ksort($planetes);
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';

// //trie arsort
// echo " <strong>Trie arsort </strong><br>";
// echo " <p>Trie un tableau en ordre décroissant et conserve l'association des index </p>";
// arsort($planetes);
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';

// //trie krsort
// echo " <strong>Trie krsort </strong><br>";
// echo " <p>Trie un tableau en fonction des clés en ordre décroissant</p>";
// krsort($planetes);
// echo '<pre>';
// print_r($planetes);
// echo '</pre>';
//********************************************************************************************************************* */
// Créer un tableau avec les mois de l'annnée
// - afficher la valeur de la 5 ligne de ce tableau
// - afficher la vleur de l'index 10
// - modifier le mois d'avril en le mettant en majuscule


// - afficher la valeur de la 5 ligne de ce tableau
$mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
echo '<pre>';
print_r($mois);
echo '</pre>';

//Afficher la valeur de la 5 ligne de ce tableau
echo " <strong>Afficher la valeur de la 5 ligne de ce tableau</strong><br>";
echo '<pre>';
print_r($mois[4]);
echo '</pre>';
// - afficher la vleur de l'index 10
echo " <strong>Afficher la valeur de l'index 10  </strong><br>";
echo '<pre>';
print_r($mois[10]);
echo '</pre>';
// - modifier le mois d'avril en le mettant en majuscule
echo " <strong>Modifier le mois d'avril en le mettant en majuscule </strong><br>";
echo '<pre>';
// strtoupper() retourne string, après avoir converti tous les caractères alphabétiques en majuscules.
$mois[3]=strtoupper($mois[3]);
print_r($mois);
echo '</pre>';

//*******2ème exercice **************** */
// Créer un tableau associatif des departements de la region normandie
// avec le nom du departement en valeur et son code postale en index
// - afficher la valeur de l'index 27
// - ajouter le departement et code postale de la ville de Brest
// - parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// Le 'nom du departement' possede le code postale suivant :  'code pastale'
//*******/
echo '<hr>';
// Créer un tableau associatif des departements de la region normandie
echo " <strong>tableau associatif des departements de la region normandie</strong><br>";
$departements =  [
    14 => 'Calvados',
    27 => 'Eure',
    50 => 'Manche',
    61 => 'Orne',
    76 => 'Seine-Maritime'
    ];

    echo '<pre>';
    print_r($departements);
    echo '</pre>';

// - afficher la valeur de l'index 27
echo "<strong>afficher la valeur de l'index 27</strong><br>";
print_r($departements[27]);
echo "<br><br>";
// - ajouter le departement et code postale de la ville de Brest
echo " <strong>Ajouter le departement et code postale de la ville de Brest</strong><br>";
$departements =  [
    14 => 'calvados',
    27 => 'eure',
    50 => 'manche',
    61 => 'orne',
    76 => 'seine-Maritime'
    ];

// j'ai pensé a faire un array_merge ou array_push mais ça créé un nouveau tableau d'index
// en faisant des recherches j'ai trouvé cette solution en concatainant += le tableau avec les nouvelles valeurs associatives
$departements += [29=>'Finistère'];
//$departements[29]= 'finistère';
echo '<pre>';
print_r($departements);
echo '</pre>';

//- parcourir le tableau des departements et afficher chaque departement dans un parapraphe p de la façon suivante :
// Le 'nom du departement' possede le code postale suivant :  'code pastale'
echo " <strong>parcourir le tableau des departements dans un parapraphe p de la façon suivante :
<br>Le 'nom du departement' possede le code postale suivant :  'code pastale'</strong><br>";
foreach($departements as $key => $value )
{
   echo '<p>' . ucfirst($value) . ' posséde le code postale suivant : ' .$key . '</p>';
}