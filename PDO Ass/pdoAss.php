<?php

class student                     //class for FETCH_CLASS example.
{ 
   public $s_id;                           
   public $Name;
   public $city;
   public $Phno;

   public function uppercase()
   {
      echo"in uppercase ";
      return strtoupper($this->Name);
      
    } 
}

class pdoOperations                                //  class declaration 
{
       

function startDatabase()                            //function to start adatabase
{
       $hostname = 'localhost';
       $username = 'root';
       $password = 'root'; 
    try {
          
          $dbh = new PDO("mysql:host=$hostname;dbname=phpdatabase", $username, $password);       //creation of new PDO object 
          
          echo "</br></br>Connected to database<br/>";
          return $dbh;
        }
    catch(PDOException $e)
       {
         echo $e->getMessage();
       }
} 

function closeConnection($dbHandler)                //function to close connection 
{
   $dbHandler=NULL;
   echo "CLosed connection ";
}
 
function insertValue($dbHandler)                      //function to insert value 
{
  echo "insertion";
  $count=$dbHandler->exec("INSERT INTO student(s_id,Name,city,phno)VALUES(,'Akshay','Pune',9028762781)");
  echo " <br/><br/> Number of rows affected after insert =$count<br/>";
}

function fetchAssoc($dbHandler)                                   //  function for fetch Assoc  
{
  $sql="SELECT  * FROM student";
  $statement=$dbHandler->query($sql);
  $result = $statement->fetch(PDO::FETCH_ASSOC);
  echo "<br/><br/> FETCH_Assoc Result:<br/>";
  foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }
}

function fetchNum($dbHandler)
{
  $sql="SELECT  * FROM student";
  $statement=$dbHandler->query($sql);
  $result = $statement->fetch(PDO::FETCH_NUM);
   echo "<br/><br/> FETCH_NUM: Result<br/>";
  foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }
}

function fetchBoth($dbHandler)                             //function for fetch both 
{
  $sql="SELECT  * FROM student";
  $statement=$dbHandler->query($sql);
  $result = $statement->fetch(PDO::FETCH_BOTH);
   echo "<br/><br/> FETCH_BOTH: Result<br/>";
  foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }
}

function fetchObject($dbHandler)                                //function for fetch objects 
{
  $sql="SELECT  * FROM student";
  $statement=$dbHandler->query($sql);
  $result = $statement->fetch(PDO::FETCH_OBJ);       //Here $result act as a class object 
   echo "<br/><br/> FETCH_OBJ: Result<br/>";        
   echo "<br/> $result->s_id";
   echo "<br/> $result->Name";
   echo "<br/> $result->city";
   echo "<br/> $result->Phno";    

}

function fetchClass($dbHandler)                                    //Function for fetch class 
{
  $sql="SELECT  * FROM student";
  $statement=$dbHandler->query($sql);
  $result = $statement->fetchALL(PDO::FETCH_CLASS,'student');       //Here $result act as astudent  object 
   echo "<br/><br/> FETCH_CLASS: Result<br/>";
   foreach($result as $student)                                  //
        {
        
        echo $student->uppercase().'<br />';                     //
        }    

}

function errorHandler($dbh)                                            //function for error handle 
{
      
       echo "<br/><br/> Error Handle :<br/>";
      try
      {
       $dbh = new PDO("mysql:host=$hostname;dbname=phpdatabase1", $username, $password);       //creation of new PDO object 
      $sql = "SELECT username FROM student";                           //wrong query here 
      
    foreach ($dbh->query($sql) as $row)
        {
        print $row['Name'] .' - '. $row['city'] . '<br />';
        }
       //echo "in error";
     }
     catch(PDOException $e)
    {
     
    echo $e->getMessage();
    }
 
}

function prepareds($dbHandler)                                          //function for prepareds 
{
  
  
  $dbHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $s_id=2;
  $Name='Ganesh';
  $stmt = $dbHandler->prepare("SELECT * FROM student WHERE s_id = :s_id AND Name = :Name");
  $stmt->bindParam(':s_id', $s_id, PDO::PARAM_INT);
  $stmt->bindParam(':Name', $Name, PDO::PARAM_STR, 5);
  $stmt->execute();
  $result = $stmt->fetchAll();
   echo "<br/><br/> prepared statement RESULT:<br/> ";
  foreach($result as $row)
        {
        echo $row['s_id'].'<br />';
        echo $row['Name'].'<br />';
        echo $row['city'].'<br/>';
        echo $row['Phno'];
        }
   
}

function transactions($dbh)                                            //function for transaction 
{
    try
  {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();
   /* $table = "CREATE TABLE studenttrans ( s_id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    s_type VARCHAR(25) NOT NULL,
    s_name VARCHAR(25) NOT NULL 
    )";

    

    $dbh->exec($table); */
     echo "<br/><br/>transaction result<br/>";
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('emu', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('funnel web', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('lizard', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('dingo', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('kangaroo', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('wallaby', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans(s_type, s_name) VALUES ('wombat', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('koala', 'bruce')");
    $dbh->exec("INSERT INTO studenttrans (s_type, s_name) VALUES ('kiwi', 'bruce')");

     $dbh->commit();
    echo 'Data entered successfully<br />';
  }
  catch(PDOException $e)
    {
    /*** roll back the transaction if we fail ***/
    $dbh->rollback();

    /*** echo the sql statement and error message ***/
    echo $sql . '<br />' . $e->getMessage();
    }


}


}



$usePdo=new pdoOperations();
$dbHandler=$usePdo->startDatabase();                       //start connection

$usePdo->insertValue($dbHandler);

$usePdo->fetchAssoc($dbHandler);                            //fetch_assoc
$usePdo->fetchNum($dbHandler);                              //fetch_num
$usePdo->fetchBoth($dbHandler);                             //fetch_both.
$usePdo->fetchObject($dbHandler);                             //fetch_object.
$usePdo->fetchClass($dbHandler);                             //fetch_object.
$usePdo->errorHandler($dbHandler);
$usePdo->prepareds($dbHandler);
$usePdo->transactions($dbHandler);



$usePdo->closeConnection($dbHandler);                      //end connection

 

?>
