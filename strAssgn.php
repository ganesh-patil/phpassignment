<?php

      

	$string1="PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of 		the code it finds until it runs into a PHP closing <br/> tag.";
	

	$string2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable 		is used.";


    
 
    $str1Arr=array();
    $index=0;

    function printAllArray($index,$str1Arr)         //function to print array recursively.
    {
        
      if($index<0) 
      {
         return;
      }
      else{
           printAllArray(--$index,$str1Arr);          //recursive call 
           echo " ";
            echo $str1Arr[$index];
        }
      
    }

    echo "<br/><br/> Q1 </br>";
	$occPhp=strstr($string1,'PHP');              //find the occurance of string 'PHP'
	if($occPhp){
 		echo("string PHP found <br/><br/>");
	}
	else{
 		echo("string PHP not found <br/><br/>");
	}


    echo "<br/><br/> Q2 </br>";
    $findString="PHP";                            //find the position of string 'php' in string 1 
    $phpPos=strpos($string1,$findString);
    if($occPhp!==false){
      
 		echo ("occurance of 'PHP' string is at position  $phpPos <br/>");
       
	}
	else{
 		echo("string PHP not found<br/>");
	}


     echo "<br/><br/> Q3 </br>";
    $tok = strtok($string1, " ");               //break string and store in array and display using recursive function. 
    
    while ($tok !== false) {
    //echo "Word=$tok<br />";
     $str1Arr[$index++]=$tok;
     $tok = strtok(" \n\t");
    }
    //echo $str1Arr[$index];
     echo"<br/> String1 is: <br/>";
     printAllArray($index,$str1Arr);                    //call to function printAllArray.

     echo "<br/><br/> Q4 </br>";
     echo "<br/><br/>UPPERCASE of string1 is :<br/>";    //print string 1 in uppercase     
     echo strtoupper($string1);

     echo "<br/><br/> Q5 </br>";
     $string3=$string1.$string2;
     echo"<br/><br/> combine of string 1 and 2 is:<br/>";
     echo $string3; 


        echo "<br/><br/> Q6 </br>";

		echo <<<HERE
         "$string1"
HERE;
     echo "<br/><br/> Q7 </br>";
     echo "</br></br> Today's date:<br/>";               //print particular date.
     echo date("Y/m/d");
     
      echo "<br/><br/> Q8 </br>";
     $pDate = mktime(0,0,0,1,12,2012);
     echo "<br/><br/>Perticular date  is: ".date("Y/m/d", $pDate);

      echo "<br/><br/> Q9 </br>";
     $add7Date=mktime(0,0,0,date("m"),date("d")+7,date("Y"));           //print date after seven days.
     echo "<br/><br/>Date after seven days is: ".date("Y/m/d",$add7Date);
      
      echo "<br/><br/> Q10 </br>";
     $slen=strlen($string1);                                  //split string into 4 patrs;
     $splitLength=$slen/4;
     $spartArray=array();
     $spartArray=str_split($string1,$splitLength);
     echo "<br/></br> String one After splitting in four parts:";
     for ($i=0; $i<=3; $i++)
     {
       echo "<br/>The $i part is : $spartArray[$i]";
     }
       


      echo "<br/><br/> Q11 </br>";
      $dtok = strtok($string1, ".");               //break string and store in array and display using recursive function. 
      $strDarr=array();
      $dindex=0;    
    while ($dtok !== false) {
    //echo "Word=$tok<br />";
     $strDarr[$dindex++]=$dtok;
     $dtok = strtok(".");
    }
    //echo $str1Arr[$index];
     echo "<br/><br/>";
     echo"<br/> String1  After splitting by '.' is: <br/>";
     printAllArray($dindex,$strDarr); 
       echo "<br/><br/> Q12 </br>";
        echo "<br/><br/> String 1 After removeing HTML tags:<br/>";
        echo strip_tags($string1);

    echo "<br/><br/> "; 
    echo "<br/><br/> Q13 </br>";
     $stok = strtok($string1, " ");               //print the occuranse of PHP using string function 
    
    while ($stok !== false) {
    
      if((strcmp($stok,"PHP"))==0)
      {
          echo "<br/> string found: $stok ";
       }
     $stok = strtok(" \n\t");
    }

   
   echo "<br/><br/> Q14 </br>";
     $slen1=strlen($string1);                     //find length of string 1 &2 
     $slen2=strlen($string2); 
      echo "<br/><br/> Length of string 1 is =$slen1, string2 is= $slen2";
 echo "<br/><br/> Q15 </br>";
      $handle = fopen("/home/webonise/myAssignment/abc.txt", "w") or exit("Unable to open file!");   //file creation and writting 
      fwrite ($handle,$string1);
      flose($handle);

echo "<br/><br/> Q19 </br>";
     echo "</br></br>Differense between dates 12-04-2010 and 12-05-2011 is: </br> ";  //differense between dates.
     $date1 = "2010-04-12";
     $date2 = "2011-05-12";

     $diff = abs(strtotime($date2) - strtotime($date1));

     $years = floor($diff / (365*60*60*24));
     $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
     $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

     printf("%d years, %d months, %d days\n", $years, $months, $days);

echo "<br/><br/> Q20 </br>";
     $add7Date=mktime(0,0,0,date("m"),date("d")+20,date("Y"));           //print date after 20 days.
     echo "<br/><br/>Date after seven 20 day  is: ".date("Y/m/d",$add7Date);
echo "<br/><br/> Q21 </br>";
     echo "<br/><br/> Date in Array format:</br>";
     $today = getdate();
     echo "<pre>"; 
     print_r($today);
     echo "</pre>";
?> 
