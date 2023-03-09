<a href = "index.php">Ivesti nauja</a><br><hr>

<?php

$server = 'pamokos.test';
$name = 'root';
$pass = '';
$db = 'cars';

$connect = new mysqli($server, $name, $pass, $db);

$getRezults = "
   SELECT make.id, make.make, model.id, model.model
   FROM `make`
   LEFT JOIN model on make.id = model.make_id
   ORDER BY model.id DESC
   LIMIT 10
";

if($results = $connect -> query($getRezults)){
   echo '<table style = "border: 1px black solid;">';
   while ($resultLine = $results -> fetch_assoc()){
      echo '<tr style = "border: 1px black solid;"><td style = "border: 1px black solid;">'.ucfirst($resultLine['make']).
      '</td><td style = "border: 1px black solid;"><a href = "view.php?id='.$resultLine['id'].'">'.ucfirst($resultLine['model']).'</a></td></tr>';
      print_r($resultLine);
   }
   echo '</table>';
}else{
   echo 'Klaida!';
};


$connect = null;
?>