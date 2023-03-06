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

$cars = array(
    'audi' => array('a2', 'a3', 'a4', 'a5', 'a6'),
    'volkswagen' => array('golf', 'tiguan', 'sharan', 'passat'),
    'mercedes' => array('sprinter', 's500', 'e280'),
    'toyota' => array('corola', 'supra', 'rav4')
);

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


switch($option){
    case 'notset':
        echo ucfirst($searchText);
        break;
    case 'line':
        if (array_key_exists($searchText, $cars)){
            echo '<b>'.ucfirst($searchText).'</b><br>';
            foreach ($cars[$searchText] as $make){
                echo ucfirst($make).'<br>';
            }
        }
        foreach($cars as $key => $value){
            if (in_array($searchText, $value)){
                echo '<b>'.ucfirst($searchText).'</b> yra models, kurio gamintojas yra <b>'.ucfirst($key).'</b>. Kiti gamintojo modeliai yra:<br>';
                foreach($value as $models){
                    if ($searchText !== $models){
                    echo ucfirst($models).'<br>';
                    }
                }
            }
        }
        break;
    case 'table':
        if (array_key_exists($searchText, $cars)){
            echo '<table style = "border: 1px solid black"><tr style = "border: 1px solid black"><td style = "border: 1px solid black">'.ucfirst($searchText).'</td></tr>';
            foreach ($cars[$searchText] as $make){
                echo '<td style = "border: 1px solid black; background-color: silver">'.ucfirst($make).'</td></tr>';
            }
            echo '</table>';
        }
        foreach($cars as $key => $value){
            if (in_array($searchText, $value)){
                echo '<table style = "border: 1px solid black"><tr style = "border: 1px solid black"><td style = "border: 1px solid black">'
                .ucfirst($searchText).'</td></tr><tr style = "border: 1px solid black"><td style = "border: 1px solid black; background-color: silver" >'.ucfirst($key).'</td></tr>';
                foreach($value as $models){
                    if ($searchText !== $models){
                    echo '<tr style = "border: 1px solid black"><td style = "border: 1px solid black">'.ucfirst($models).'</td></tr>';
                    }
                }
            }
        }
        break;

}
?>