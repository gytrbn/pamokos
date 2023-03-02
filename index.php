<!DOCTYPE html>
<html>
<head>
<title>Draw Table</title>
</head>
<style>
table{
    border: 1px solid black;
}
td{
    border: 1px solid black;
}
</style>
<body>

<form method="get">
E: <input type="text" name="lines"><br>
S: <input type="text" name="columns"><br>
<input type="submit" value="Submit"><br>
</form>

<?php

$line = 0;
$column = 0;

if (isset($_GET['lines'])){
	$line = $_GET['lines'];
}
if (isset($_GET['columns'])){
	$column = $_GET['columns'];
}

if (is_numeric($line) && is_numeric($column)){
    drawTable((int)$line, (int)$column);
}else {
    echo "Iveskite skaiciu";
}


function drawTable($tableLines, $tableColumns){
    $backgroundColor = "background-color:grey;";

    echo "<table>";
    for ($i = 0; $i < $tableLines; $i++){
        if ($i%2 == 0){
            echo "<tr>";
            for ($o = 0; $o < $tableColumns; $o++){
                if ($o%2 == 0){
                 echo "<td>tekstas</td>";
                }else if($o%2 == 1){
                    echo "<td style='$backgroundColor'>tekstas</td>";
             }
            }
            echo "</tr>";
        }else if($i%2 == 1){
            echo "<tr>";
            for ($o = 0; $o < $tableColumns; $o++){
                if ($o%2 == 0){
                    echo "<td style='$backgroundColor'>tekstas</td>";
                }else if($o%2 == 1){
                    echo "<td>tekstas</td>";
             }
            }
            echo "</tr>";
        }

    }
    echo "</table>";
}
?>
</body>
</html>
