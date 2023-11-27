<!DOCTYPE HTML>
<html>
<head>
<title>NerdLuv SignUp</title>
<link href ="nerdieluv.css" rel = "stylesheet">

</head>

	<header>
		<div class = "logo_box">
		<img class = "logo" src = "nerdluvlogo2.png" alt ="NerdLuv Logo">
		</div>
	</header>
	
<body>
<div class = "sign_up_box">
<p>New User Signup</p>

<form method ="POST" action = "signup-submit.php">

	<div>
		<label for "name">Name:</label>
		<input type = "text" name = "name" id ="name" size = "25" maxlength = "16" required>
	</div>

	<div>
			<label for "gender">Gender:</label>
			<label for "male">Male</label>
			<input type = "radio" name = "gender" value = "male" id = "male" required>
			<label for "female">Female</label>
			<input type = "radio" name = "gender" value = "female" id = "female" required>
	</div>

	<div>
		<label for "age">Age:</label>
		
			<input type = "text" name ="age" id = "age" maxlength = "2" size = "10"required>
		
	</div>

	<div>
			<label for "personality_type">Personality Type:</label>
		<input type = "text" name ="personality_type" id = "personality_type" maxlength = "4" size = "10" required>
		(<a href = "http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
		
	</div>

	<div>
		<label for "favorite_os">Favorite OS:</label>
		<select required name = "favorite_os" id = "favorite_os">
			<option value = "Windows" selected>Window</option>
			<option value = "Mac OS">Mac OS X</option>
			<option value = "Linux">Linux</option>
		</select>
	</div>


	<div>
	<label for "seeking_age_min">Seeking Age</label>
		<p style = "white-space: nowrap; margin-right: 10px;"><input type = "text" name = "seeking_age_min" id = "seeking_age_min" maxlength = "6" size = "10" placeholder = "min" required> to
		<input type = "text" name = "seeking_age_max" id = "seeking_age_max" maxlength = "6" size = "10" placeholder ="max" required>
		</p>
	</div>

	<input type = "submit" name = "signup" value = "Sign Up" id ="signup">

</form>

<footer>
	<div class = "footer_box">
		<p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin!Thank you for using our site. 
		<br>
		Results and page (C) Copyright NerdLuv Inc.
		</p>
	<p>
		<img class = "icon2" src = "back_to_index.png" alt ="icon for index page">
		<a href = "index.php">Go back to front page</a>
	<p>
	</div>
</footer>

</div>
</body>



</html>