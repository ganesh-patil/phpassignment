<?php
   $username1=$_POST['username'];
   //echo $username;
   //echo $password;
  $password1=md5($_POST['password']);

  $hostname = 'localhost';

/*** mysql username ***/
   $username = 'root';

/*** mysql password ***/
   $password = 'ganesh';
    echo "username='$username1'<br/>      password='$password1'";

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=phpDatabase", $username, $password1);
    /*** echo a message saying we have connected ***/
    $dbh->exec("INSERT INTO errorreport(username, password) VALUES ('$username1', '$password1')");
    $result=$dbh->query("select * from errorreport where username ='$username1'");
    echo "<br/>stored values in table :<br/>";
    foreach($result as $row)
           {
             
             print $row['u_id'] .' - '. $row['username'] . '-'.$row['password'].'<br />';
           }

    echo 'Connected to database<br />';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
