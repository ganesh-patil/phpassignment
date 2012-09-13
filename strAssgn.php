<?php

     /*  $string1Heredoc = <<<EOD
          PHP parses a file by looking for  one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of 	         the code it finds until it runs into a PHP closing  tag.
      EOD; */

	$string1="PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of 		the code it finds until it runs into a PHP closing <br/> tag.";
	/* echo $string1; */

	$string2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable 		is used.";
	/* echo $string2; */

    
 
    $str1Arr=array();
    $index=0;
    function printAllArray($index,$str1Arr)         //function to print array recursively.
    {
        
      if($index<0) 
      {
         return;
      }
      else{
           printAllArray(--$index,$str1Arr); 
           echo " ";
            echo $str1Arr[$index];
        }
      //echo $str1Arr[$index];
    } 


	$occPhp=strstr($string1,'PHP');              //find the occurance of string 'PHP'
	if($occPhp){
 		echo("string PHP found <br/><br/>");
	}
	else{
 		echo("string PHP not found <br/><br/>");
	}


    
    $findString="PHP";                            //find the position of string 'php' in string 1 
    $phpPos=strpos($string1,$findString);
    if($occPhp!==false){
      
 		echo ("occurance of 'PHP' string is at position  $phpPos <br/>");
       
	}
	else{
 		echo("string PHP not found<br/>");
	}



    $tok = strtok($string1, " ");               //break string and store in array and display using recursive function. 
    
    while ($tok !== false) {
    //echo "Word=$tok<br />";
     $str1Arr[$index++]=$tok;
     $tok = strtok(" \n\t");
    }
    //echo $str1Arr[$index];
     echo"<br/> String1 is: <br/>";
     printAllArray($index,$str1Arr);                    //call to function printAllArray.

     echo "<br/><br/>UPPERCASE of string1 is :<br/>";    //print string 1 in uppercase     
     echo strtoupper($string1);

     $string3=$string1.$string2;
     echo"<br/><br/> combine of string 1 and 2 is:<br/>";
     echo $string3; 

     echo "</br></br> Today's date:<br/>";               //print particular date date.
     echo date("Y/m/d");
     
     $pDate = mktime(0,0,0,1,12,2012);
     echo "<br/><br/>Perticular date  is: ".date("Y/m/d", $pDate);

     $add7Date=mktime(0,0,0,date("m"),date("d")+7,date("Y"));           //print date after seven days.
     echo "<br/><br/>Date after seven days is: ".date("Y/m/d",$add7Date);
      
     $slen=strlen($string1);                                  //split string into 4 patrs;
     $splitLength=$slen/4;
     $spartArray=array();
     $spartArray=str_split($string1,$splitLength);
     echo "<br/>";
     for ($i=0; $i<=3; $i++)
     {
       echo "<br/>The $i part is : $spartArray[$i]";
     }
       


  /*  $stok = strtok($string1, ".");               /divide astring by occurenses of . 
    $strDotArray=array();
    $sindex=0;
    while ($stok !== false) {
    //echo "Word=$tok<br />";
     $strDotArray[$sindex++]=$stok;
     //$stok = strtok(".");
    }
    */
    echo "<br/><br/> "; 

     $stok = strtok($string1, " ");               //print the occuranse of PHP using string function 
    
    while ($stok !== false) {
    //echo "Word=$tok<br />";
     //$str1Arr[$index++]=$tok;
      if((strcmp($stok,"PHP"))==0)
      {
          echo "<br/> string found: $stok ";
       }
     $stok = strtok(" \n\t");
    }

?> 
