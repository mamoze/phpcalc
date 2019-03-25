<?php
function sum($x, $y) {
	return $x + $y;
}

function sub($x, $y) {
	return $x - $y;
}

function mult($x, $y) {
	return $x * $y;
}


function div($x, $y) {
	return $x / $y;
}
echo (sum($_GET["x"],$_GET["y"] )."\n");
echo (sub(5, 7)."\n");
echo (mult(5, 7)."\n");
echo (div(5, 7)."\n");
?>
