<?php
    $page = preg_replace('/\W/si', '', $_GET['fname']);
     echo "$page";
     include('./'.$page.'.php');
    
?>
