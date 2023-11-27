<!DOCTYPE HTML>
<html>
	<head>
		<title>NerdLuv Matches Results</title>
		<link href ="nerdieluv.css" rel = "stylesheet">

		<style>
			header{
				height: 20%;
			}
			
			.match_image{
				width: 150px;
				float: left;
				margin-right: 10px;
				margin-bottom: 3em;
			}
			
			.match_info{
				
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
			$user = $_GET['user'];
			$get_matches = file('singles.txt');
			$user_array = array();
			$singles_array = array();
			$type_counter = 0;
			
			/*Test 1: 
				Get the name and find1` it in the list, print out info if the name is the same 
				*/
				
			// the first loop just gets the user information
			foreach($get_matches as $line){
				$curr_line = explode(",",$line);
				$name = $curr_line[0];
				if($user == $name){
					$user_array = array("name" => $name, "gender" =>$curr_line[1], "age" => $curr_line[2], "personality_type" => $curr_line[3], "favorite_os" => $curr_line[4],"seeking_age_min" => $curr_line[5],"seeking_age_max" => $curr_line[6]);
				}
				else{
					array_push($singles_array, array("name" => $name, "gender" =>$curr_line[1], "age" => $curr_line[2], "personality_type" => $curr_line[3], "favorite_os" => $curr_line[4],"seeking_age_min" => $curr_line[5],"seeking_age_max" => $curr_line[6]));
					
				}
			}
			//the second loop is used to compare matches and set the $singles_array
				foreach($singles_array as $key => $match){
					//remove singles if gender is not compatible
					if($user_array['gender'] == $singles_array[$key]['gender']){
						unset($singles_array[$key]);
					}
					//remove singles if the age is not compatible with the user
					if(($match['age'] < $user_array['seeking_age_min']) || ($match['age'] > $user_array['seeking_age_max']) || $user_array['age'] < $match['seeking_age_min'] || $user_array['age'] > $match['seeking_age_max']){
						unset($singles_array[$key]);
					}
					//check if user and singles have the same favorite OS 
					if($user_array['favorite_os'] != $singles_array[$key]['favorite_os']){
						unset($singles_array[$key]);
					}
					
					//check if at least 2 personality types matter
						//loop through 
					for($x = 0; $x < 4; $x++){
						//get the personality types as string
						$type1 = $user_array['personality_type'];
						$type2 = $singles_array[$key]['personality_type'];
						//if the letter is the same, add to the type counter
						if($type1[$x] == $type2[$x]){
							$type_counter += 1;
						}
					}
					//if 2 or more letters don't match, remove match from array 
					if($type_counter < 2){
						unset($singles_array[$key]);
					}
					
					//reset type_counter 
					$type_counter = 0;
					
				}



		?>
		<div class = "title_box">
		<p>Matches for <?php echo $user;?>:</p>
		</div>
		<br>
		
		
		<?php foreach($singles_array as $key => $match){?>
		
			<div class = "match">
				<div >
					<img src = "matches.png" alt = "match image">
				</div>
				<div class = "match_info">
					<ul>
						<li>
							<p class = "name">
								<?php echo $singles_array[$key]['name']?>
							</p>
						</li>
						<li>
							<p>
								<span class = "bold">gender:</span>
								<?php echo $singles_array[$key]['gender']?>
							</p>
						</li>
						<li>
							<p>
								<span class = "bold">age:</span>
								<?php echo $singles_array[$key]['age']?>
							</p>
						</li>
						<li>
							<p>
								<span class = "bold">type:</span>
								<?php echo $singles_array[$key]['personality_type']?>
							</p>
							
						</li>
						<li>
							<p>
							<span class = "bold">OS:</span>
							<?php echo $singles_array[$key]['favorite_os']?>
							</p>
						</li>
					
					</ul>
					
				</div>
			</div>
			
			

		<?php 
		}

		?>
	
		</div>
		


	</body>

<footer>
	<div class = "footer_box">
		<p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin!Thank you for using our site. 
		<br>
		Results and page (C) Copyright NerdLuv Inc.
		</p>
	<p>
		<img class = "icon2" src = "back_to_index.png" alt ="icon for index page">
		<a href = "index.php">Go back to front page</a>
	</p>
	</div>
</footer>


</html>