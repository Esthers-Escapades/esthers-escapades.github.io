<!DOCTYPE HTML>
<html>
<head>
<title>NerdLuv SignUp Submission</title>
<link href ="nerdieluv.css" rel = "stylesheet">

<style>
	header{
		height: 20%;
	}
</style>
</head>

	<header>
		<div class = "logo_box">
		<img class = "logo" src = "nerdluvlogo2.png" alt ="NerdLuv Logo">
		</div>
	</header>
<body>


	<?php
		$name = $_POST['name'];
		if($_POST['gender'] == "male"){
			$gender = "M";
		}
		else{
			$gender = "F";
		}
		$age = $_POST['age'];
		$personality_type = $_POST['personality_type'];
		
		if($_POST['favorite_os'] == "MacOS"){
			$favorite_os = "Max OS X";
		}
		else{
			$favorite_os = $_POST['favorite_os'];
		}
		$seeking_age_min = $_POST['seeking_age_min'];
		$seeking_age_max = $_POST['seeking_age_max'];
		
		$get_data = "\n{$name},{$gender},{$age},{$personality_type},{$favorite_os}, {$seeking_age_min},{$seeking_age_max}";
		/*If form has been submited */
			
			file_put_contents("singles.txt",$get_data,FILE_APPEND);
			
	?>

	<div class = "main_box">
		<p>Thank you!</p>
		<p>Welcome to NerdLuv, <?php echo $name?></p>
		<p>Now <a href ="matches.php">Log in to see your matches!</a></p>

	</div>

</body>

<footer>
	<div class = "footer_box">
		<p>This page is for single nerds to meet and date each other!Thank you for using our site. 
		<br>
		Results and page (C) Copyright NerdLuv Inc.
		</p>
	<p>
		<img class = "icon2" src = "back_to_index.png" alt ="icon for index page">
		<a href = "index.php">Go back to front page</a>
	<p>
	</div>
</footer>

</html>