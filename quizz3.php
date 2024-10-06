<?php


$count=0;

//question1
if(isset($_POST['question1'])){
	$answer1=$_POST['question1'];
	if($answer1=="b"){
		$count=$count+25;
	}
}




//question2
if(isset($_POST['question2'])){
	$answer2=$_POST['question2'];
	if($answer2=="d"){
		$count=$count+25;

	}
}

//question3
if (isset($_POST['question3'])) {
	$answer3=$_POST['question3'];
		if($answer3="c"){
			$count=$count+25;
		}
	}

//question4
	if(isset($_POST['question4'])){
		$answer4=$_POST['question4'];
		if ($answer4=="a") {
			$count=$count+25;
		}
	}

	$totalquestions=4;



	


?>

<html>
<head>
<style >
	body{
		background:linear-gradient(#FFF0F5,#4B0082);
	justify-content: center;
	align-content: center;

	}

	div{
		height: 300px;
	width: 400px;
	border-width:3px ;
	border-style: solid;
	border-color: black;
	border-radius: 10px;
	padding: 70px;
	margin-right: 5px;
	margin-left: 5px;
	margin-top: 5px;
	margin-bottom: 5px;
	box-align: center;
	color: black;
	background-color: white;
	}

	h1{
		text-align: center;
		font-size: 25px;

	}
	h2{
		text-align: center;
	text-decoration: none;
	color: crimson;
	margin-top: 5px;
	}
	h3{
		text-align: left;
		color: blue;
	}
	h4{
        text-align: left;
	}
</style>


</head>

	<body>
		<center>
		<div>
		<h1><u>Quiz Result</u></h1><br/>
		<h2><?php
		echo "Your score : $count %"; 
		?></h2>

		<h3>Correct answers:</h3>
		<h4>Q1. Answer: Mars</h4>
		<h4>Q2. Answer: H2O</h4>
		<h4>Q3. Answer: Photosynthesis</h4>
		<h4>Q4. Answer: George Washington</h4>


</div></center>
	</body>
</html>
