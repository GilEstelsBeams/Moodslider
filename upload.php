
<?php


//First the code for uploading the image, so that if it fails nothing is changed in the data yet.

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo("File type:".$imageFileType);
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
		//then the file could be uploaded and we can add all the data to our data file
		
		$fp = fopen("films_data.csv", "a");

		if (isset($_POST["calm"]) || isset($_POST["sad"])||isset($_POST["awake"])||isset($_POST["fearless"])){
			$line=array($_POST["title_i"],$target_file,$_POST["calm"],$_POST["sad"],$_POST["awake"],$_POST["fearless"]);
			fputcsv($fp,$line);
			fclose($fp);
		}
		else{
			echo("Please set the sliders and submit again");
			echo("<br>");
		}
		//Now can directly redirect to the moodslider like asked
		
		header("Location: index.php");
		exit;
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
