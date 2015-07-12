<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>weather to image file</title>
</head>

<body>
	<?php
    
    // Create a blank image
    $im = imagecreatetruecolor(600, 800);
	$white = imagecolorallocate($im, 255, 255, 255);
	$black = imagecolorallocate($im, 0, 0, 0);
	imagefill($im, 0, 0, $black);
	
	// Dessine un rectangle blanc
	imagefilledrectangle($im, 5, 5, 595, 795, $white);
	
	// Add text
    imagestring($im, 1, 10, 100, date('l jS \of F Y h:i:s A'), $black);
    
    // Save the image
    imagepng($im, 'output.png');
    
    // Free up memory
    imagedestroy($im);
    
    ?>
</body>
</html>
