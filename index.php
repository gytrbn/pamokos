<form method="get">
<input type="text" name="search">
<input type="submit">
</form>

<?php

$cars = array(
    array('Mercedes', 'S500', 'E280', 'Sprinter', 'C63', 'Vito', 'ML350'),
    array('Nissan', 'Figaro', 'Navara', 'Leaf', 'Silvia'),
    array('Skoda', 'Octavia', 'Superb', 'Fabia'),
    array('Volkswagen', 'Passat', 'Golf','Phaeton', 'Touran','Polo'),
    array('BMW', '328', '116', '520', '323', '750i')
);

if (isset($_GET['search'])){
    $searchText = $_GET['search'];
    if (array_key_exists($searchText, $cars)){
        echo 'yra toks';
    }else{
        echo 'Nera';
    }
}

?>