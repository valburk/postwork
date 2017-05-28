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
<script>
"use strict";

 	var operator = document.getElementById('middleInput');
		var leftDisplay = document.getElementById('leftInput');
		var rightDisplay = document.getElementById('rightInput'); 


		function logOne(){
            
            	if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "1";
            	}else {
            		rightDisplay.innerText += "1";
            	}
        }
        document.getElementById('box-one').addEventListener('click', logOne);

</script>

</body>
</html>