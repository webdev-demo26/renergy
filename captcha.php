<?php
session_start();

// Generate random captcha
$chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
$captcha = "";
for ($i = 0; $i < 6; $i++) {
    $captcha .= $chars[rand(0, strlen($chars)-1)];
}
$_SESSION['captcha'] = $captcha;

// Image size
$width = 180;
$height = 60;

$image = imagecreatetruecolor($width, $height);

// Colors
$bg = imagecolorallocate($image, 245, 247, 250);
$text_color = imagecolorallocate($image, 20, 40, 80);
$noise_color = imagecolorallocate($image, 120, 140, 180);

// Fill background
imagefilledrectangle($image, 0, 0, $width, $height, $bg);

// Add noise lines
for ($i = 0; $i < 8; $i++) {
    imageline(
        $image,
        rand(0,$width), rand(0,$height),
        rand(0,$width), rand(0,$height),
        $noise_color
    );
}

// Add noise dots
for ($i = 0; $i < 300; $i++) {
    imagesetpixel($image, rand(0,$width), rand(0,$height), $noise_color);
}

// Optional font (put .ttf file in same folder)
$font = __DIR__ . '/arial.ttf'; // you can change font

// Draw each character with rotation
$x = 15;
for ($i = 0; $i < strlen($captcha); $i++) {

    $angle = rand(-25, 25);
    $y = rand(35, 50);

    if (file_exists($font)) {
        imagettftext(
            $image,
            24,
            $angle,
            $x,
            $y,
            $text_color,
            $font,
            $captcha[$i]
        );
    } else {
        // fallback if font not found
        imagestring($image, 5, $x, rand(10,30), $captcha[$i], $text_color);
    }

    $x += 25;
}

// Apply wave distortion
$distorted = imagecreatetruecolor($width, $height);
imagefill($distorted, 0, 0, $bg);

for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        $newX = $x + sin($y / 10) * 5;
        $newY = $y + sin($x / 10) * 5;

        if ($newX >= 0 && $newX < $width && $newY >= 0 && $newY < $height) {
            $color = imagecolorat($image, $newX, $newY);
            imagesetpixel($distorted, $x, $y, $color);
        }
    }
}

// Output image
header("Content-Type: image/png");
imagepng($distorted);

imagedestroy($image);
imagedestroy($distorted);
?>