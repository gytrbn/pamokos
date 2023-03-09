<a href = 'index.php'>Iterpti nauja modeli ir marke </a>&nbsp&nbsp&nbsp<a href = table.php>Perziureti paskutinius 10 duomenu</a><br><hr>

<?php

$id = $_GET['id'];

$server = 'pamokos.test';
$name = 'root';
$pass = '';
$db = 'cars';

$connect = new mysqli($server, $name, $pass, $db);

$makeInfo = "
    SELECT make.id, make.make, model.id, model.model, model.make_id
    FROM `model`
    LEFT JOIN make on model.make_id = make.id
    WHERE model.id = $id
";

if($results = $connect -> query($makeInfo)){
    while ($resultLine = $results -> fetch_assoc()){
        echo ucfirst($resultLine['model']).' '.ucfirst($resultLine['make']);
        $model = $resultLine['model'];
    }
}else{
    echo 'Klaida';
}

echo '<br><a href = "update.php?id='.$id.'&model='.$model.'">Atnaujinti</a>';

$connect = null;


?>