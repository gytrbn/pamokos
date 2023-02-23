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
E: <input type="text" name="eilutes"><br>
S: <input type="text" name="stulpeliai"><br>
<input type="submit" value="Submit"><br>
</form>

<table>
<?php

$eil="";
$stul="";

if (isset($_GET["eilutes"])){
	$eil=$_GET["eilutes"];
}
if (isset($_GET["stulpeliai"])){
	$stul=$_GET["stulpeliai"];
}

if (is_numeric($eil) && is_numeric($stul)){
    lentele((int)$eil,(int)$stul);
}else {
    echo "Iveskite skaiciu";
}


function lentele($x,$y){

    $bgcl="background-color:grey;";

    for ($i=0;$i<$x;$i++){
        if ($i%2==0){
            echo "<tr>";
            for ($o=0;$o<$y;$o++){
             if ($o%2==0){
             echo "<td>tekstas</td>";
             }else if($o%2==1){
             echo "<td style='$bgcl'>tekstas</td>";
             }
            }
            echo "</tr>";
        }else if($i%2==1){
            echo "<tr>";
            for ($o=0;$o<$y;$o++){
             if ($o%2==0){
             echo "<td style='$bgcl'>tekstas</td>";
             }else if($o%2==1){
             echo "<td>tekstas</td>";
             }
            }
            echo "</tr>";
        }

    }

}
?>
</table>
</body>
</html>
