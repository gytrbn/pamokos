<form method = "get">
<input type = "text" name = "textInput">
<select name = "outputs">
    <option value = "notset"></option>
    <option value = "line">Eilutei</option>
    <option value = "table">Lentele</option>
</select>
<input type = "submit">
</form>


<?php

$cars = [
    'audi' => ['a2', 'a3', 'a4', 'a5', 'a6'],
    'volkswagen' => ['golf', 'tiguan', 'sharan', 'passat'],
    'mercedes' => ['sprinter', 's500', 'e280'],
    'toyota' => ['corola', 'supra', 'rav4']
];

if(isset($_GET['textInput'])){
    $searchText = strtolower($_GET['textInput']);
}else{ 
    $searchText = null;
}

if(isset($_GET['outputs'])){
    $option = $_GET['outputs'];
}else{
    $option = null;
}

if (array_key_exists($searchText, $cars)){
    $resultMake = $searchText;
    $resultModel = null;
    $printOption = 1;
    foreach ($cars[$searchText] as $make){
        $makeArray[] = $make;
    }
}
foreach($cars as $key => $value){
    if (in_array($searchText, $value)){
        $resultModel = $searchText;
        $resultMake = $key;
        $printOption = 2;
        foreach($value as $models){
            if ($searchText !== $models){
                $makeArray[] = $models;
            }
        }
    }
}

function drawLines ($resultMake, $resultModel, $printOption, $makeArray){
    if ($printOption == 1){
        echo '<b>'.ucfirst($resultMake).'</b><br>';
        foreach ($makeArray as $model){
            echo ucfirst($model).'<br>';
        }
    }else if ($printOption == 2){
        echo '<b>'.ucfirst($resultModel).'</b> yra models, kurio gamintojas yra <b>'.ucfirst($resultMake).'</b>. Kiti gamintojo modeliai yra:<br>';
        foreach($makeArray as $models){
            echo ucfirst($models).'<br>';
            }
    }
};

function drawTables ($resultMake, $resultModel, $printOption, $makeArray){
    if ($printOption == 1){
        echo '<table style = "border: 1px solid black"><tr style = "border: 1px solid black"><td style = "border: 1px solid black">'.ucfirst($resultMake).'</td></tr>';
        foreach ($makeArray as $model){
            echo '<td style = "border: 1px solid black; background-color: silver">'.ucfirst($model).'</td></tr>';
        }
        echo '</table>';
    }else if ($printOption == 2){
        echo '<table style = "border: 1px solid black"><tr style = "border: 1px solid black"><td style = "border: 1px solid black">'
        .ucfirst($resultModel).'</td></tr><tr style = "border: 1px solid black"><td style = "border: 1px solid black; background-color: silver" >'.ucfirst($resultMake).'</td></tr>';
        foreach($makeArray as $models){
            echo '<tr style = "border: 1px solid black"><td style = "border: 1px solid black">'.ucfirst($models).'</td></tr>';
            }
        echo '</table>';
    }
};

switch($option){
    
    case 'notset':
        echo ucfirst($searchText);
        break;
    case 'line':
        drawLines($resultMake, $resultModel, $printOption, $makeArray);
        break;
    case 'table':
        drawTables($resultMake, $resultModel, $printOption, $makeArray);
        break;
};
?>