<?php

    $validMimes = array(
    'image/png' => '.png',
    'image/x-png' => '.png',
    'image/gif' => '.gif',
    'image/jpeg' => '.jpg',
    'image/pjpeg' => '.jpg'
   );

    $image= $_FILES['upfile'];

    if(!array_key_exists($image['type'], $validMimes)) {
    echo "image type is wrong";
}
    //echo "<br/> file type:: <br/>";
     
    //echo $image['type'];
    $filename = substr($image['name'], 0, strrpos($image['name'], '.'));
     echo $filename;
    $filename .= $validMimes[$image['type']];
     echo $filename;


?>
