<!DOCTYPE html>
<html>
<head>
	<title>Tempertature</title>
	<link href="https//fonts.googlepis.com/css?family=Muli&display=swap" rel="stylesheet">
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Muli';
}
h1{
	background-color: #3c9fa7;
	text-transform: capitalize;
	text-align: center;
	line-height: 20vh;
	color: white;
}

.main-div{
width: 100%;
height:80vh;
display: flex;
justify-content: space-around;
align-items: center;

}

.left-side{

background-color: #D5DBDB;
	border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
}
.left-side img
{
	max-width: 400px;
	height: auto;
	
}
.right-side{

	width: 400px;
	height: 300px;
	background-color: #D5DBDB;
	border-radius: 15px;
	
	display: flex;
	flex-direction: column;
	justify-content: center;
	text-align: center;
	align-items: center;

	
}
.input1{
	width: 250px;
height: 40px;
padding: 5px;
outline: none;
border-radius: 1px solid grey;
border-radius: 5px;	
}
.selection{
	width: 100%;
	margin: 20px 0 ;
}
.btn{
	padding: 10px 16px;
	border-radius: 5px;
	outline: none;
	border: none;
	background-color: #3c9fa7;
	color: white;
	font-size: 0.9rem;
}
p{
	margin-top: 20px;
}


</style>
</head>
<body>
<h1>temprature convertion</h1>
<div class="main-div">
	<div class="left-side"><img src="cal.png"></div>



	<div class="right-side">
		<form method="post">
		<input type="text" placeholder="Enter Number" class="input1" name="nam">
		<div class="selection"><label> Celc</label>
		<input type="radio" name="unit" value="Celc">
		<label>Feren</label><input type="radio" name="unit" value="Feren">

	</div>
		<input type="submit" class="btn" name="submit" value="Convert Now">
	</form>
	<div ><p>   

			<?php
				if(isset($_POST['submit']))
				{
					$num=$_POST['nam'];
					$temp=$_POST['unit'];
					if($temp=="Celc")
					{
						$result=$num * 9 / 5 + 32;
	
						echo"The convertion value of Cel in faren is" .$result;

					}
					else
					{
						$result=($num -32)* 5 /9;
						echo"The convertion value of Fearen in Celc is" .$result;
					}
				}


			?>


	    </p></div>
	</div>



</div>
</body>
</html>