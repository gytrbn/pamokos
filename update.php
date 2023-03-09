<form method = "post">
    <input type = "text" name = "newModel" value = "<?php echo $_GET['model'];?>" >
    <input type = "submit">
</form>

<?php

$id = $_GET['id'];

if(isset($_POST['newModel'])){
    $newModel = $_POST['newModel'];
}else{
    $newModel = '';
}

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

$updateModel = "
    UPDATE `model` 
    SET `id`= $id,
    `model`= $newModel
";

if($results = $connect -> query($makeInfo)){
    while ($resultLine = $results -> fetch_assoc()){
        echo ucfirst($resultLine['model']).' '.ucfirst($resultLine['make']);
    }
}else{
    echo 'Klaida';
}

if($newModel != ''){
    $connect -> query($updateModel);
}else{
    echo 'Atnaujinti nepavyko!';
}

?>