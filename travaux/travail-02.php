
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travail-02</title>
</head>
<body> 
<h2>Article</h2>

<?php
$json_url = "./persons.json";
$json = file_get_contents($json_url);
$articles = json_decode($json, true);


foreach ($articles as $key => $value) {
?>
   <table class="table table-striped table-responsive">
     <tbody>

        <tr>
         <td><img src="<?php echo $value['picture']; ?>" alt=""></td>
        </tr>
        <tr>
         <td>Nom : 
             <?php echo $value['name']; ?>
        </td>
       </tr>
       <tr>
           <td>
           <?php
                if ($value['name'] == 'Raymond Jimenez') {

                    foreach ($value['friends'] as $key1 => $value1)
                    {
                        if ($key1 == 1) {?>
                        <h3><?php echo "Ami : " . $value1['name'];?></h3>
                        <?php
                        }
                    }
                }
                ?>
           </td>
       </tr>
       <tr>
       <td>Age : <?php echo $value['age']; ?></td>
       </tr>
       <tr>
         <td>
            <?php
                if ($value['name'] == "Ball Shaffer"){
                ?>
                    <strong>La couleur des yeux de <?php echo $value['name']; ?>  est  : <?php echo $value['eyeColor']; ?></strong>
               <?php } else { ?>

             Couleur des yeux : <?php echo $value['eyeColor']?>;
            <?php } ?>
        </td>
       </tr>
       <tr>
         <td>Email : <?php echo $value['email']; ?></td>
       </tr>
       <tr>
         <td>Fruit favori : <?php echo $value['favoriteFruit']; ?></td>
       </tr>
       <tr>
         <td>
         <?php
                if ($value['isActive'] == 1){
                ?>
                    ACTIF
               <?php }  ?>
         </td>
       </tr>
       <tr>
         <td>Tags :
            <?php
                $lastItem=count($value['tags']);

                foreach ($value['tags'] as $key => $value){
                    if ($key == $lastItem-1) {
                        echo  $value . "";
                    } else {
                        echo  $value . ", ";
                    }
                }
            ?>
        </td>
        <hr>
       </tr>
     </tbody>
<?php
}
?>
    </table>

</body>
</html>