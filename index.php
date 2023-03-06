<form method="get">
<input type="text" name="search">
<input type="submit">
</form>

<?php

$cars = array(
    'mercedes' => array('s500', 'e280', 'sprinter', 'c63', 'vito', 'ml350'),
    'nissan' => array ('figaro', 'navara', 'leaf', 'silvia'),
    'skoda' => array ('octavia', 'superb', 'fabia'),
    'volkswagen' => array ('passat', 'golf','phaeton', 'touran','polo'),
    'bmw' => array ('328', '116', '520', '323', '750i')
);

if (isset($_GET['search'])){
    $searchText = strtolower($_GET['search']);
    if (array_key_exists($searchText, $cars)){
        echo ucfirst($searchText).'<br>';
        foreach($cars[$searchText] as $key){
            echo ucfirst($key)." ";
        }

    }else {
        foreach($cars as $make => $model){
            foreach ($model as $value){
                if($searchText == $value){
                   echo ucfirst($make);
                }
            }
        }
    }
};
?>