<?php
if(isset($_POST) && !empty($_POST)) {
print "<pre>";
print_r($_POST);
print "</pre>";
}
    //echo $_POST['etechnology'];
   // echo $_FILES['upfile']['name'];
   // echo $_FILES['upfile']['tmp_name'];
   $id=$_GET['id'];
   
//   echo $id;
   //$id=5;
 /* echo $_POST['name'];
  echo $_POST['age'];
  echo $_POST['gender']; */
/*  
  $con = mysql_connect("localhost","root","webonise6186");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
     echo "connected to database";
  }

// Create database


// Create table
mysql_select_db("corephp", $con);

$sql="insert into employees(id,name,age,gender,email,address,pin) values(1,'Ganesh',23,'male','patil.ganesh170@gmail.com','pandharpur',413315)";
mysql_query($sql,$con);
$sql="select * from employees";
$result=mysql_query($sql,$con);     The original name of the file on the client machine. 
 while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['name'];
  echo "<br />";
  } 



// Execute query

mysql_close($con);
*/

class employee
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
  
 
 function deleterecord($id,$con)
 {
    echo "delete is $id";
    $sql = 'DELETE FROM employees
        WHERE id='.$id.'';
        mysql_query($sql,$con);
 }
  
}

$emp=new employee();

$con=$emp->startConnection();
//$emp->insertvalue($id,$con,$filepath,$name,$age,$gender,$email,$address,$pincode,$etechnology);
$emp->deleterecord($id,$con);
  

?>
