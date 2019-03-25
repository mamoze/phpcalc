<?php
class Calculator {
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
}

/*$calculator = new Calculator();
echo ($calculator->sum($GET_[x],$GET_[y])."\n");
echo ($calculator->sub(8, 2)."\n");
echo ($calculator->mult(2, 5)."\n");
echo ($calculator->div(20, 4)."\n");*/
$calc = new Calculator();
$op= $_GET["op"];
$x = $_GET["x"];
$y = $_GET["y"];
switch($op){
  case "sum":
  	echo $calc->sum($x,$y)."\n";
  	break;
  case "sub":
  	echo $calc->sub($x,$y)."\n";
  	break;
  case "mult":
  	echo $calc->mult($_GET["x"],$_GET["y"])."\n";
  	break;
  case "div":
  	echo $calc->div($_GET["x"],$_GET["y"])."\n";
  	break;

  default: print "T'es mauvais jaaack";
}

?>
