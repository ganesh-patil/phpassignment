<?php
if(isset($_POST) && !empty($_POST)) {
print "<pre>";
print_r($_POST);
print "</pre>";
}
    //echo $_POST['etechnology'];
   // echo $_FILES['upfile']['name'];
   // echo $_FILES['upfile']['tmp_name'];
   $id=$_POST['id'];
   $name= $_POST['name'];
   $age =$_POST['age'];
   $gender=$_POST['gender'];
   $email= $_POST['email'];
   $address=$_POST['address'];
   $pincode=$_POST['pincode'];
   $description=$_POST['description']; 
   $etechnology=$_POST['etechnology'];
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
  
  function fileUpload()
  {
     echo "in fileupload";
            $uploaddir = '/home/webonise/uploads/';
           $uploadfile = $uploaddir . basename($_FILES['upfile']['name']);

        echo '<pre>';
         if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
          echo "File is valid, and was successfully uploaded.\n";
        } 
       else {
           echo "Possible file upload attack!\n";
         }

      return $uploadfile;  
  }
 
 function insertvalue($id,$con,$filepath,$name,$age,$gender,$email,$address,$pincode,$technology)
 {
 
    //echo "insert value";
   /* $sql="INSERT INTO
     employees(
     name,
     age,
     gender,
     email,
     address,
     pin,
     picture,
     technology)
     VALUES(
     '{$name}',
     '{$age}',
     '{$gender}',
     '{$email}',
     '{$address}',
     '{$pincode}',
     '{$filepath}',
     '{$technology}')"; */
     $sql = 'UPDATE employees
        SET name="'.$name.'",age='.$age.',gender="'.$gender.'",email="'.$email.'",address="'.$address.'",pin='.$pincode.',picture="'.$filepath.'",technology="'.$technology.'" WHERE id='.$id.' ';
     
   /* $sql="insert into employees(name,age,gender,email,address,pin,picture,technology) values('Ganesh1',23,'male','patil.ganesh170@gmail.com','pandharpur',413315,'/abc','c')"; */
      mysql_query($sql,$con);
  //   mysql_query($sql,$con);
     
     //echo "after insaert";
 }   
  
}

$emp=new employee();
$filepath=$emp->fileupload();
$con=$emp->startConnection();
$emp->insertvalue($id,$con,$filepath,$name,$age,$gender,$email,$address,$pincode,$etechnology);
  

?>
