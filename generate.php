<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('COLOR', [255, 255, 255]);
define('FONT_SIZE', 28);
define('FONT_FAMILY', 'Lato-Regular.ttf');
define('MARGIN', 20);

$uploadedImage = isset($_FILES['image']) ? $_FILES['image']['tmp_name'] : null;
$caption = isset($_POST['caption']) ? $_POST['caption'] : null;

if (is_uploaded_file($uploadedImage) && $caption) {
    $image = imagecreatefromjpeg($uploadedImage);
    if ($image) {
        $imageHeight = getimagesize($uploadedImage)[1];
        $imageHeight -= MARGIN;
        $color = imagecolorallocate($image, ...COLOR);
        $font = implode(DIRECTORY_SEPARATOR, ['assets/', FONT_FAMILY]);
        imagettftext($image, FONT_SIZE, 0, MARGIN, $imageHeight, $color, $font, $caption);
        header('Content-Type: image/jpeg');
        imagejpeg($image);
        imagedestroy($image);
    }
}
