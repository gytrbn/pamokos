<form method = "post">
Marke:<input type = "text" name = "make">
Modelis:<input type = "text" name = "model">
<input type = "submit">
</form>

<?php

if (isset($_POST['make']) and isset($_POST['model'])){
    $inputMake = strtolower($_POST['make']);
    $inputModel = strtolower($_POST['model']);
}else{
    $inputMake = null;
    $inputModel = null;
};

$server = 'pamokos.test';
$name = 'root';
$pass = '';
$db = 'cars';

$connect = new mysqli($server, $name, $pass, $db);

function newMake($connect, $inputMake){
    $insertMake = "INSERT INTO `make`(`id`, `make`) VALUES (null,'$inputMake')";
    mysqli_query($connect, $insertMake);
};

function newModel($connect, $inputMake, $inputModel){
    $checkMakeId = "SELECT `id` FROM `make` WHERE `make` = '$inputMake'";
    $makeId = mysqli_fetch_assoc(mysqli_query($connect, $checkMakeId));
    $newMakeId = $makeId['id'];

    $insertModel = "INSERT INTO `model`(`id`, `model`, `make_id`) VALUES (null,'$inputModel','$newMakeId')";
    mysqli_query($connect, $insertModel);
};

$checkMake = "SELECT `make` FROM `make` WHERE `make` = '$inputMake'";
$checkResultMake = mysqli_query($connect, $checkMake);

$checkModel = "SELECT `model` FROM `model` WHERE `model` = '$inputModel'";
$checkResultModel = mysqli_query($connect, $checkModel);

if (mysqli_num_rows($checkResultMake) == 0){
    newMake($connect, $inputMake);
    newModel($connect, $inputMake, $inputModel);
    echo 'Marke ir modelis ivesti i duomenu baze!';
}else if (mysqli_num_rows($checkResultModel) == 0){
    newModel($connect, $inputMake, $inputModel);
    echo 'Modelis ivestas i duomenu baze!';
}else{
    echo 'Toks modelis jau ivestas!';
};

$connect = null;
?>