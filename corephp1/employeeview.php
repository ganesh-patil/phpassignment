<?php

class view
{
function startConnection()
  {
    $con = mysql_connect("localhost","root","webonise6186");
    if (!$con)
    {
          die('Could not connect: ' . mysql_error());
    }
    else
   {
     echo "connected to database";
     mysql_select_db("corephp", $con);
    }
    
    return $con;
  }
  
 function fetchdata($con)
 {
  echo "fetch data";
   $sql="select *from employees";
   $result=mysql_query($sql,$con);
   //print_r(mysql_fetch_array($result));
   echo "<br />";
   while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['name']." ".$row['age']." ".$row['gender']." ".$row['email']." ".$row['address']." ".$row['pin']." ".$row['picture']." ".$row['technology']." ";
  echo "<img src='http://corephp.webonise.com/photos/".$row['picture']."' width=100 height=100>";
  //echo '<a href="http://corephp.webonise.com/employee.html"> edit </a>';
  $id=$row['id'];
  echo '<form name="form1" action="http://corephp.webonise.com/employeeedit.php" method="get">
        <input type="hidden" name="id" value="'.$row['id'].'" />
        <input type="hidden" name="name" value="'.$row['name'].'" />
        <input type="hidden" name="age" value="'.$row['age'].'" />
        <input type="hidden" name="gender" value="'.$row['gender'].'" />
        <input type="hidden" name="email" value="'.$row['email'].'" />
        <input type="hidden" name="address" value="'.$row['address'].'" />
        <input type="hidden" name="pin" value="'.$row['pin'].'" />
        
        <input type="submit" value="edit" />
        </form>';
        
   echo '<form name="form2" action="http://corephp.webonise.com/employeedelete.php" method="get">
        <input type="hidden" name="id" value="'.$row['id'].'" />
        <input type="hidden" name="name" value="'.$row['name'].'" />
        <input type="hidden" name="age" value="'.$row['age'].'" />
        <input type="hidden" name="gender" value="'.$row['gender'].'" />
        <input type="hidden" name="email" value="'.$row['email'].'" />
        <input type="hidden" name="address" value="'.$row['address'].'" />
        <input type="hidden" name="pin" value="'.$row['pin'].'" />
        
        <input type="submit" value="delete" />
        </form>';
  echo "<br/>";
  }
 }
    
}

$viewobj=new view();
$con=$viewobj->startConnection();
$viewobj->fetchdata($con);
?>
