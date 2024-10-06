<html>
<head>
	<style>

		body{

			background:linear-gradient(#FFF0F5,#4B0082);
	justify-content: center;
	align-content: center;

		}

		div{
          
          background-color: white;
          color: black;
          height: 750px;
          width: 600px;
          text-align:left ;
          margin-left: 20px;
          padding-left: 25px;
          padding-top: 25px;
		}
		input[type="submit"]{
			text-align: center;
	background-color:crimson;
	color: white;
	font-size: 25px;
	font-family: calibri;
	border-color: black;
	text-decoration: none;
		}

		input[type="radio"]{
			width: 2em;
			height: 1em;
			accent-color: green;
		}
		

	

	</style>
	
</head>
<body>

	<center>



	<div>
	<h1><center>Questions</center></h1><hr/>
	
		<form action="quizz3.php" method="post" autocomplete="off">
        
        

			<h3>Q1. Which planet is known as the Red Planet? </h3>

		

			
			<input type="radio" name="question1" value="a">Venus<br/>

            </td><td>
			<input type="radio" name="question1" value="b">Mars<br/>
			

			<input type="radio" name="question1" value="c">Jupiter<br/>

			<input type="radio" name="question1" value="d">Saturn<br/>

		</tr>

			<h3>Q2. What is the chemical symbol for water?<br/></h3>

			<input type="radio" name="question2" value="a">O2<br/>

			<input type="radio" name="question2" value="b">NaCl<br/>

			<input type="radio" name="question2" value="c">CO2<br/>

			<input type="radio" name="question2" value="d">H2O<br/>

			<h3>Q3. What is the process by which plants make their food?<br/></h3>

			<input type="radio" name="question3" value="a">Respiration<br/>

			<input type="radio" name="question3" value="b">Digestion<br/>

			<input type="radio" name="question3" value="c">Photosynthesis<br/>

			<input type="radio" name="question2" value="d">Fermentation<br/>

			<h3>Q4. Who was the first president of United States? <br/></h3>

			<input type="radio" name="question4" value="a">George Washington<br/>

			<input type="radio" name="question4" value="b">Thomas Jefferson<br/>

			<input type="radio" name="question4" value="c">Abraham Lincoln<br/>

			<input type="radio" name="question4" value="d">John Adams<br/>

			<br/><br/>

    
            <center><a href="quizz3.php">
			<input type="submit" name="btn_next" value="Submit"></a></center>

		</form>

	</div>
</center>
	

</body>
</html>