<?php
// What is the original image?
$original_image = "greyscale.jpg";
// What is the sliding image?
$slider_image = "fullcolor.jpg";
// How many rows do you want?
$rowamount = "8";
 
// Don't edit this part unless you know what you're doing
if (!is_numeric($rowamount)) $rowamount = 8;
if (!file_exists($original_image)) $original_image = "greyscale.jpg";
if (!file_exists($slider_image)) $slider_image = "fullcolor.jpg";
// End of part
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.slideImage.js"></script>

<script>
	$(document).ready(
		function(){
			$imagewidth = $('#slidein').width();
			$imageheight = $('#slidein').height();
			$('#container').css("width", $imagewidth+"px");
			$('#container').css("height", $imageheight+"px");
			// Parameters: imagepath, imagewidth, imageheight, rowamount
			$.slideImage("<?php echo $slider_image;?>", $imagewidth, $imageheight, <?php echo $rowamount;?>);
		}
	);
</script>