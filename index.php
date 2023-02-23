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
<input type="text" name="skaicius"><br>
<input type="submit" value="Submit"><br>
</form>

<table>
<?php

$num="";

if (isset($_GET["skaicius"])){
	$num=$_GET["skaicius"];
}

if (is_numeric($num)){
    lentele((int)$num);
}else {
    echo "Iveskite skaiciu";
}


function lentele($x){

    $bgcl="background-color:grey;";

    for ($i=0;$i<$x;$i++){

    if ($i%2==0){
        echo "<tr><td>tekstas</td></tr>";
     }else if ($i%2==1){
	    echo "<tr><td style='$bgcl'>tekstas</td></tr>";
    }else echo "Klaida!";
    }

}
?>
</table>
</body>
</html>
