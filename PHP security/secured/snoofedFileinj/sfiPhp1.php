<?php
    $sname=$_SERVER['HTTP_REFERER'];

//echo strcmp($name, "http://localhost/sfi1.html");
    //$ourserver= "http://localhost/sfi1.html";
      if(!strcmp($sname, "http://localhost/sfi1.html"))
     { 
        $gender=$_POST['gender'];
         echo "Gender is :: $gender";
    }
   else
  {
        echo "server is wrong";
  }
?>
