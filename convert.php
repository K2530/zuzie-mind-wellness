<?php
$source = 'public/assets/images/hero-woman-tea.png';
$destination = 'public/assets/images/hero-woman-tea.webp';
$image = imagecreatefrompng($source);
imagepalettetotruecolor($image);
imagealphablending($image, true);
imagesavealpha($image, true);
imagewebp($image, $destination, 80);
imagedestroy($image);
echo "Converted successfully.\n";
