# Moodslider

INSTRUCTIONS:
-The file is made to be put in a localhost environment.
-The app is built with only PHP, HTML and CSS code.
-The data is in a csv file, thus no use of MySQL.
-It was built for an up-to-date Mozilla Firefox browser, and does not function as well on IE (especially the sliders). 
-In the "php.ini" file, the file_uploads directive has to be set to On.
-For pure aesthetical results, it is better to upload pictures that have a “movie poster”shape, .
-There are already 12 movies entered on my csv file, but they can easily be deleted by accessing the file. Then it is important to keep the first line either empty or with the existing headers, and make sure a new line has been opened for the next movie to be uploaded correctly.

SPECIFICITIES OF THE APPLICATION:
-The movie titles on the moodslider are shown with the first one on the left being the most adequate, the second one the second most adequate etc.
-The adequacy of the movie is computed with a least square difference method, considering all mood parameters.

POTENTIAL IMPROVEMENTS:
-Used MySQL for an easier work with PHP 
-Definitely used JavaScript instead of PHP, essential for the use of “oninput” in HTML, thus not having to use the submit button on the customer-side slider.
-Added a pop-up window to thank for uploading the files.
-Added code to reshape pictures of the wrong size/shape
-And of course improved the aesthetic of the pages!

DETAILS ABOUT EACH FILE:
-index.php: general html/php code for the main page 
	-currentmood.php: php code for processing the input from the index.php  form.
-upload_page.php: html page for uploading the data on the movies
	-upload.php: php code for storing the information in the form in the data file.

-films_data.csv: csv data file, with first line as headers.
-style:   _core.css: the main css file 
	_ logo for the header
-images: the file where the movies’ image are kept and uploaded.
