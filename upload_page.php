<!DOCTYPE html>
<html>

<head>
	<title>This is the Moodslider project</title>
	<link type="text/css" rel="stylesheet" href="style/core.css" />
</head>

<body>
		<!-- First The logo, title and index (instead of copying it could have made it dynamic with JavaScript)-->
		
				
		<header> 
			<table style=width:100%">
				<tr>
					<th> 
					<img src="style/logo.png" alt="logo" />
					</th>
					<th>
					<h! style="font-size:300%;">Upload content to the Moodslider</h!>
					<nav>
							<a style="font-size:160%;" href="index.php">Moodslider</a>
							<span>&#124;</span> 
							<a style="font-size:160%;" href="upload_page.php">Upload Content</a>
						
					</nav>
					</th>
				</tr>
			</table>
			
			<!-- The formulaire 
			
			First, the title-->
			
			<form action="upload.php" method="post" enctype="multipart/form-data" style="font-size:130%;text-align:center;">
			
				<p>Please enter here the name of the movie to add to our suggestions:</p> 
				
				<br>
			
				<input type="text" name="title_i" placeholder="Movie Title" style="font-size:100%; text-align:center;">
				
				<br>		
				<br>
								
				
			<!--Now the image-->
				
				<p> Now upload the corresponding image:</p>
				 
				<br>
				<br>
				<input type="file" name="fileToUpload" id="fileToUpload" style="font-size:100%; text-align:center;">
				<br>
				<br>
							
			<!-- Now the sliders-->
							
				<p>Now rate the corresponding perfect mood for this movie:</p> 
				
				<br>
				
				<table style="width:100%">
					<tr>
						
						<th>					
						<h!>Agitated</h!> 
						</th>
						<th>
						<div class="slidecontainer" >
							<input type="range" min="1" max="100" value="50" class="slider" id="calm" name="calm">
						</div>
						</th>
						<th> <h!>Calm</h!> </th>
					</tr>
					
					<tr>
						
						<th> <h!>Happy</h!> </th>
						<th>
						<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider" id="sad" name="sad">
						</div>
						</th>
						<th> <h!>Sad</h!> </th>
					</tr>	
					
					<tr>
						<th> <h!>Tired</h!> </th>
						<th>
						<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider" id="awake" name="awake">
						</div>
						</th>
						<th> <h!>Wide Awake</h!> </th>
					</tr>
					
					<tr>						
						<th> <h!>Scared</h!> </th>
						<th>
						<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider" id="fearless" name="fearless">
						</div>
						</th>
						<th> <h!>Fearless</h!> </th>
					</tr>
						
				</table>
								
				<br>
				<br>
		   
				<input type="submit" value="Submit" style="font-size:130%; text-align:center;">
			</form>
		
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