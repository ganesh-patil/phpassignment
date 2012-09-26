<?php

    $validMimes = array(
    'image/png',
    'image/x-png',
    'image/gif',
    'image/jpeg',
    'image/pjpeg'
);

    $image= $_FILES['upfile'];

    if(!in_array($image['type'], $validMimes)) {
    echo "your file name is wrong";
}
    echo "<br/> file type:: <br/>";
    echo $image['type'];

?>
