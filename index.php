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
<input type="text" name="skaicius" value="0"><br>
<input type="submit" value="Submit"><br>
</form>

<table>
<?php

$num=0;



if (isset($_GET["skaicius"])){
	$num=$_GET["skaicius"];
}


for ($i=0;$i<$num;$i++){
	echo "<tr><td>tekstas</td></tr>";
}
?>
</table>
</body>
</html>
