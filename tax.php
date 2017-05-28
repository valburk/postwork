

<!DOCTYPE html>
<html>
<head>
    <title> Tax Calculator </title>
    <link rel="stylesheet" href="css/position.css">
</head>
<body>
    <h1> </h1>
    <div id="leftInput" class="resultboxL"> Item 1: </div>
    <div id="middleInput" class="middle"></div>
    <div id="rightInput" class="resultboxR"></div>
    <button id="box-one" class="box"> 1</button>
    <button id="box-two" class="box">2</button>
    <button id="box-three" class="box">3 </button>
    <button id="box-four" class="box">4 </button>
    <button id="box-five" class="box">5 </button>
    <button id="box-six" class="box">6 </button>
    <button id="box-seven" class="box"> 7 </button>
    <button id="box-eight" class="box"> 8 </button>
    <button id="box-nine" class="box"> 9 </button>
    <button id="box-clear" class="box">C </button>
    <button id="box-zero" class="box"> 0 </button>
        <button id="box-deci" class="box">. </button>
    <button id="additem" class="additem"> Add Item </button>
    <button id="equals" class="equalsbox"> Calculate Tax </button>
	<script>

		"use strict";
		var operator = document.getElementById('middleInput');
		var leftDisplay = document.getElementById('leftInput');
		var rightDisplay = document.getElementById('rightInput'); 
      

       //console log 1    
        function logOne(){
            
            	if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "1";
            	}else {
            		rightDisplay.innerText += "1";
            	}
        }
        document.getElementById('box-one').addEventListener('click', logOne);

     	



     	//console log 2   
        function logTwo(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "2";
            }else{
            		rightDisplay.innerText += "2";
            }
        }
        document.getElementById('box-two').addEventListener('click', logTwo);

         


            
        //console log 3   
        function logThree(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "3";
            }else{
            		rightDisplay.innerText += "3";
            }
        }
        document.getElementById('box-three').addEventListener('click', logThree);




        //console log 4   
        function logFour(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "4";
            }else{
            		rightDisplay.innerText += "4";
            }
        }
        document.getElementById('box-four').addEventListener('click', logFour);



         
      	//console log 5    
        function logFive(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "5";
            }else{
            		rightDisplay.innerText += "5";
            }
        }
        document.getElementById('box-five').addEventListener('click', logFive);




        //console log 6    
        function logSix(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "6";
            }else{
            		rightDisplay.innerText += "6";
            }
        }
        document.getElementById('box-six').addEventListener('click', logSix);

        



        //console log 7    
        function logSeven(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "7";
            }else{
            		rightDisplay.innerText += "7";
            }
        }
        document.getElementById('box-seven').addEventListener('click', logSeven);




        //console log 8 
        function logEight(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "8";
            }else{
            		rightDisplay.innerText += "8";
            }
        }
        document.getElementById('box-eight').addEventListener('click', logEight);





        //console log 9    
        function logNine(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "9";
            }else{
            		rightDisplay.innerText += "9";
            }
        }
        document.getElementById('box-nine').addEventListener('click', logNine);





        //console log 0
           
        function logZero(){
            if (operator.innerText =="" && leftDisplay !==""){
            		leftDisplay.innerText += "0";
            }else{
            		rightDisplay.innerText += "0";
            }
        }
        document.getElementById('box-zero').addEventListener('click', logZero);

           



        //log .
        var leftDisplay = document.getElementById('leftInput');            
        function logDeci(){
            leftDisplay.innerText += "."
        }
        document.getElementById('box-deci').addEventListener('click', logDeci);


          		//console log C  
       
        function logC(){
            leftDisplay.innerText = "";
            operator.innerText = "";
            rightDisplay.innerText = "";
        }
        document.getElementById('box-clear').addEventListener('click', logC);


//make this it's own item and if not empty then add to bottom display!!

         function addItem(){
            if (leftDisplay !==""){
            		rightDisplay.innerText = "Item 2:";
            }else{
            		rightDisplay.innerText = "Item 2:";
            }
        }
        document.getElementById('additem').addEventListener('click', addItem);




        document.getElementById('equals').addEventListener('click', logEquals);
        function logEquals(){
        	 if (operator.innerText == "+"){
        	 	var result = parseInt(leftDisplay.innerText) + parseInt(rightDisplay.innerText);
        	 	rightDisplay.innerText = ""
        	 	leftDisplay.innerText=result
        	 	operator.innerText=""
        	 }else if (operator.innerText == "-"){
        	 	var result = parseInt(leftDisplay.innerText) - parseInt(rightDisplay.innerText);
        	 	rightDisplay.innerText = ""
        	 	leftDisplay.innerText= result
        	 	operator.innerText=""      		
        	}else if (operator.innerText == "x"){
        	 	var result = (parseInt(leftDisplay.innerText) * parseInt(rightDisplay.innerText));
        	 	rightDisplay.innerText = ""
        	 	leftDisplay.innerText= result
        	 	operator.innerText=""
        
        	}else if (operator.innerText == "/"){
        	 	var result = (parseInt(leftDisplay.innerText) / parseInt(rightDisplay.innerText));
        	 	rightDisplay.innerText = ""
        	 	leftDisplay.innerText= result
        	 	operator.innerText=""
        	 }
        };

    		
        






	</script>
</body>
</html>