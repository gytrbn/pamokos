<form method="get">
<input type="text" name="search">
<input type="submit">
</form>

<?php

$cars = array(
    'mercedes' => 's500', 'e280', 'sprinter', 'c63', 'vito', 'ml350',
    'nissan' => 'figaro', 'navara', 'leaf', 'silvia',
    'skoda' => 'octavia', 'superb', 'fabia',
    'volkswagen' => 'passat', 'golf','phaeton', 'touran','polo',
    'bmw' => '328', '116', '520', '323', '750i');

if (isset($_GET['search'])){
    $searchText = strtolower($_GET['search']);
    if (array_key_exists($searchText, $cars)){
        echo 'yra tokia marke<br>';
        echo $searchText.'<br>';
    }else if(in_array($searchText, $cars)){
        echo $searchText.'<br>';
        echo 'Modelis';
    }else{
        echo 'nera';
    }
}

?>