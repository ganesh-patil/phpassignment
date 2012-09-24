<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="/css/format.css" type="text/css" />
        
      <?php 
        echo$_GET['id'];
        $name1= $_GET['name'];
        echo $_GET['age'];
        echo $_GET['gender'];
        echo $_GET['email'];
        echo $_GET['address'];
      ?>

     </head>
<body>
<div class="center" >
<h1> Employee Registration</h1>

<form name="empRecord" enctype='multipart/form-data'  action="http://corephp.webonise.com/employeeserver.php" method="post">

          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
          <label for="name">Name</label>
           <input type="text" name="name" id="name" value="<?php echo $_GET['name']; ?> " /><br /><br/>
         
         <label for="age">Age</label>
         <input type="text" name="age" id="age" value="<?php echo $_GET['age']; ?> "/> <br /> <br />
         
         
         <label for="gender">Gender</label>
         <input type="radio" name="gender" id="g_male" value="male" /> Male
         <input type="radio" name="gender" id="g_female" value="female"/>Female<br/></br>
         
         <label for="email">Email</label>
         <input type="text" name="email" id="email" value="<?php echo $_GET['email']; ?> " /> <br /><br />
         
         <label for="Address">Address</label>
         <!--<input type="text" name="address" id="address" /> <br /><br /> -->
         <textarea name="address" rows="2" cols="20" id="address" class="input" WRAP> </textarea> <br/></br>
         
         <label for="pin">Pin</label>
         <input type="text" name="pincode" id="pincode" /> <br /><br />
         
         <lable for "etechnology">Known Technology</lable>
         <input type="checkbox" name="etechnology" value="c">C
         <input type="checkbox" name="etechnology" value="c++">C++
         <input type="checkbox" name="etechnology" value="java">Java<br/><br/>
         
         <label for="Description">Description</label>
         <textarea name="description" rows="2" cols="20" id="description" class="input" WRAP> </textarea> <br/></br>
         
         
         <lable for="picture">Profile Picture</lable>
         <input type=file name=upfile><br/><br/>
        	
         
         
         <input type="submit" value="Submit" onclick=" return check()" />
          
        
         
         <script type="text/javascript">
         
           function check()
           {
               var name=document.getElementById('name').value;
               var numericExpression1=/^[0-9]+$/;
               var age=document.getElementById('age');
               var email=document.getElementById('email').value;
               var atpos=email.indexOf("@");
               var dotpos=email.lastIndexOf(".");
               var address=document.getElementById('address').value;
               var numericExpression=/^[0-9]+$/;
               var pincode=document.getElementById('pincode');
               var description=document.getElementById('description').value;
               
               if(name.length==0) //validation for name field;
               {
                 alert("Name Is NULL!!!");
                 return false;
               }
               else
               {
                 //alert(name);
                 //return true;
               }
 
             
                
               
                if(age.value.length==0) //validation for age  field;
               {
                 alert("Age is Null!!!");
                 return false;
               }
               if(age.value.match(numericExpression1))
               {
                   //alert(strval);
               }
               else
               {
                   alert("Age is wrong!!");
                   return false
               }
              
               
               
               if(document.getElementById('g_male').checked) {
                   //Male radio button is checked
                   //alert("male selcted");
                  }else if(document.getElementById('g_female').checked) {
                 //Female is checked
                   //alert("female selected");
                   }
                   else
                   {
                      alert("gender not selected ");
                      return false;
                   }
               
               
                if(email.length==0) //validation for email field;
               {
                 alert("Email Is NULL!!!"); //check for Null
                 return false;
               }
               
               if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
               {
                  alert("Email is not valid!!");
                  return false;
               }
               else
               {
                 //alert(email);
                 //return true;
               }
               
                
                if(address==null || address==" ") //validation for Address field;
               {
                 alert("Addess is Null!!!");
                 return false;
               }
               else
               {
                 //alert(address);
                 //return true;
               }
               
                
               //var strval=documnent.getElementById('pincode').value;
               
                if(pincode.value.length==0) //validation for Pincode field;
               {
                 alert("Pincode is Null!!!");
                 return false;
               }
               if(pincode.value.length!=6)
               {
                 alert("pincode is wrong");
                 return false;
               }
               if(strnMatch.value.match(numericExpression))
               {
                   //alert(strval);
               }
               else
               {
                   alert("pincode is wrong!!");
                   return false
               }
               
               if(description==null || description==" ") //validation for Address field;
               {
                 alert("description is Null!!!");
                 return false;
               }
               else
               {
                 alert(description);
                 //return true;
               }
              
               /*
               strdesc=document.getElementById('description').value;
                if(strdesc.length==0) //validation for description field;
               {
                 alert("description is Null!!!");
                 return false;
               }
               else
               {
                 alert(strdesc);
                 //return true;
               } */
               
               return true;
           }  
         </script>
           


</form>

</div>
</body>
</html>
