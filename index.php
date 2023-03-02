<!DOCTYPE html>
<html>
<head>
<title>kaskelinta pamoka php</title>
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
<input type="text" name="number"><br>
<input type="submit" value="Submit"><br>
</form>

<?php
$num=0;

if (isset($_GET['number'])){
	$num=$_GET['number'];
}

if (is_numeric($num)){
    drawTable((int)$num);
}else {
    echo "Iveskite skaiciu";
}


function drawTable($x){
    echo "<table>";
    $backgroundColor="background-color:grey;";

    for ($i=0;$i<$x;$i++){
        if ($i%2==0){
            echo "<tr><td>tekstas</td></tr>";
        }else if ($i%2==1){
	        echo "<tr><td style='$backgroundColor'>tekstas</td></tr>";
    }}
    echo "</table>";
}
?>
</body>
</html>
