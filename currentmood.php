<?php
session_start();

//created a function since at first tried to include it inside html code but without success, would need JavaScript
function ranksmovies($mooda,$moodb,$moodc,$moodd){
		
	//use fgetcsv function to get the current data into a multidimensional array:
	$fp = fopen("films_data.csv", "r");
	$i=0;
	$data=array();
	
	while(($line=fgetcsv($fp))!== FALSE){
		$data[$i]=$line;
		$i=$i+1;
			}
		
	fclose($fp);

	//Now work on the data to give each an individual score.
	//I built a score for each picture based on Sum Squared of Difference, and evaluate it compared to others.
	//(note: the first line of the csv file is made of headers)

	$l=count($data);

	$scores=array();
	for($x = 1; $x < $l; $x++) {
		$calm_i=$data[$x][2];
		$sad_i=$data[$x][3];
		$awake_i=$data[$x][4];
		$fearless_i=$data[$x][5];
		
		$title_i=$data[$x][0];
		
		$scores[$x-1]=($mooda-$calm_i)**2+($moodb-$sad_i)**2+($moodc-$awake_i)**2+($moodd-$fearless_i)**2;
			
		
		}
	
	asort($scores);
	
	$ranking=array_keys($scores);
	
	$resultarray=array();
	
	
	//Now we can create our output of the name and files that are the 5 solutions
	for($y=0;$y<5;$y++){
		$r=$ranking[$y];
		$resultarray[$y][0]=$data[$r+1][0];
		$resultarray[$y][1]=$data[$r+1][1];
			
	}
	return $resultarray;
}


//Now the code for the form:

if (isset($_POST["calm"])&& isset($_POST["sad"])&& isset($_POST["awake"])&& isset($_POST["fearless"])){
	
	$result=ranksmovies($_POST["calm"],$_POST["sad"],$_POST["awake"],$_POST["fearless"]);
		
	for($u=0;$u<5;$u++){
			
		$_SESSION["file_".$u]=$result[$u][1];
		$_SESSION["title_".$u]=$result[$u][0];
	}	
	
	header("Location: index.php");
	exit;
}

 


?>