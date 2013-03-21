ImageSlider
===========

Easy to deploy, it cuts an image up in rows and let those imagerows slide to the center atop another image 
Created in jQuery

=== Bundled files ===
fullcolor.jpg         - sample file
greyscale.jpg         - sample file
index.php             - sample file
jquery.slideImage.js  - The jQuery script
slidein.php           - the PHP script

=== How to use ===
1) Place the following code in your page (ending with .php, not .html), where "originalimage.jpg" is the starting image :
	<?php require('slidein.php');?> 
	<img id="slidein" src="originalimage.jpg">

	(An example of this can be found in the bundled index.php)

2) Open slidein.php and edit the first lines to your liking. The following things can be configured:
	$slider_image = "fullcolor.jpg";
	Type the file name of your sliding image in place of fullcolor.jpg

	$rowamount = "8";
	Type the amount of sliding rows that you want instead of the number 8

3) That's it!
