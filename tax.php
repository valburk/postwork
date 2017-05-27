<?php

function addItems(){

}

function multiplyTax($ogNumber){

	$tax = $ogNumber * .07;
	$added = $tax + $ogNumber;
	return $added;

}

$calc = multiplyTax(4);

  ?>

<!DOCTYPE html>
<html>
<head>
    <title> Tax Calculator </title>
</head>
<body>
	<h1> Tax Calculator </h1>
    <h3>
    
<?= $calc ?>
 	</h3>
</body>
</html>