<?php
//Starts a session once browser opens. Essential for storing variables while showing "No content" when no choice has been made yet.
session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<title>This is the Moodslider project</title>
	<link type="text/css" rel="stylesheet" href="style/core.css" />
</head>
<body>
		<!-- First The logo, title and index -->
				
		<header> 
			<table >
				<tr>
					<th> 
					<img src="style/logo.png" alt="logo" />
					</th>
					<th>
					<h! style="font-size:300%;">Welcome to the Moodslider</h!>
					<nav>
							<a style="font-size:160%;" href="index.php">Moodslider</a>
							<span>&#124;</span> 
							<a style="font-size:160%;" href="upload_page.php">Upload Content</a>
						
					</nav>
					</th>
				</tr>
			</table>
			
			
			<!-- Now the sliders-->
			<!--Would be far better with Javascript. Could have then written an "oninput" function 
			and the images would have changed without the need of a submit button.-->
			
			<form action="currentmood.php" method="post">
			
			<!-- With more time would have simplified this table with php coding by putting the adjectives in an array and using "for" -->
			
			<table style="width:100%">
				<tr>
					
					<th>					
					<h! style="font-size:180%;" >Agitated</h!> 
					</th>
					<th>
					
					<div class="slidecontainer" >
						<input type="range" min="1" max="100" value="50" class="slider" id="calm" name="calm">
					</div>
					</th>
					<th> <h! style="font-size:180%;" >Calm</h!> </th>
				</tr>
					<tr>
					
					<th> <h! style="font-size:180%;" >Happy</h!> </th>
					<th>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="50" class="slider" id="sad" name="sad">
					</div>
					</th>
					<th> <h! style="font-size:180%;" >Sad</h!> </th>
				</tr>	<tr>
					
					<th> <h! style="font-size:180%;" >Tired</h!> </th>
					<th>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="50" class="slider" id="awake" name="awake">
					</div>
					</th>
					<th> <h! style="font-size:180%;" >Wide Awake</h!> </th>
				</tr>
				<tr>
					
					<th> <h! style="font-size:180%;" >Scared</h!> </th>
					<th>
					<div class="slidecontainer" >
						<input type="range" min="1" max="100" value="50" class="slider" id="fearless" name="fearless">
					</div>
					</th>
					<th> <h! style="font-size:180%;" >Fearless</h!> </th>
				</tr>
				<tr>
				<th></th>
				<th><input name="submit" type="submit" value="submit" style="font-size:120%;">
				</th>
				<th></th>
				</tr>
					
			</table>
			</form>
			<p><?php // for testing in case something is wrong:
			
			//echo("The values stored in SESSION are:");
			//print_r($_SESSION);?></p>
			
			<br>
			</br>
			<br>
			</br>
			
			<!-- Finally, the suggestions, linked to php code with SESSION variables, and a "No content" placeholder.
			Here far easier to use for and php for building the table, but should have done it earlier as well-->
			
					
			<table style="width:100%;font-size:180%; text-align:center;">
				<tr>
					<?php 
						
						 for ($i=0;$i<=4;$i++){
							if(isset($_SESSION["file_".$i])){
						 echo "<th><img src=\"".$_SESSION["file_".$i]."\" alt=\"No content\" style=\"font-size:150%; text-align:center;\"></th>";}
						 else{echo "<th>No content</th>";}}
						?>
										
					
								
				</tr>
					
				<tr>
					 <?php 
						
						 for ($i=0;$i<=4;$i++){
							echo "<th>";
							if (isset($_SESSION['title_'.$i])){
							  echo $_SESSION['title_'.$i];}
							else {echo "No content";}
						 echo "</th>";}
						?>
					
					
				</tr>
			
			
			</table>
		
		</header>
		<div id="content">
			
		</div>
		
		<footer>
			<br>
			</br>
			<br>
			</br>
		</footer>
	
</body>

</html>