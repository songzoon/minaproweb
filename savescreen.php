<?php
$im = imagegrabscreen();
imagepng($im, "./img/screenshot/".date('YmdHis').".png");
imagedestroy($im);
?>

