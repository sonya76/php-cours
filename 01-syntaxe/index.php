
<!-- 
$data1 ='Hello';
$data2 ='les terriens';
$data3 ='Mars';
$data4 ='planete';

avec les 2 methodes de concatenation ecrire la phrase :
Hello, les terriens. Je viens de la planete Mars. -->
<?php
$data1 ='Hello';
$data2 ='les terriens';
$data3 ='Mars';
$data4 ='planète';
?>
<p>
<?= $data1 .', '.$data2 . '.' . 'Je viens de la ' . $data4 .' '. $data3 . '.'?>
</p>


<?php
$data ='<p>';
$data .= $data1 .', ';
$data .= $data2  . '.';
$data .= 'Je viens de la ';
$data .= $data4.' ';
$data .= $data3. '.';
$data .='</p>';
echo $data;
?>

