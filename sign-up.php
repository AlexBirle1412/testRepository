<?php

$myFormInreg = '
<form method="POST" action="">
     Title<br>
     <input type="radio" name="titlu"  value="Mr" >Mr
     <input type="radio" name="titlu"  value="Mrs" >Mrs
     <input type="radio" name="titlu"  value="Miss" >Miss

<br><br> First Name
<input type="text"
       size="48"
       name="fName">

<br><br> Last Name
<input type="text"
       size="48"
       name="lName">

<br><br> Email
<input type="text"
       size="48"
       name="email">

<br><br> Phone Number
<input type="text"
       size="48"
       name="phoneNumber">

<br><br> Password
<input type="text"
       size="48"
       name="pass">

<br><br>Country <br> 
       <select>    
         <option value="Maramures">Maramures</option>  
         <option value="Salaj">Salaj</option>  
         <option value="Bihor">Bihor</option>  
         <option value="Dolj">Dolj</option>    
       </select>

<br><br>       
<input type="checkbox"
       size="40"
       name="terms">
       I agree to the <font color=purple>terms and conditions</font>       
<br><br>
<input type="submit"
       value="Sign-up">
       
<input type="reset"
       value="Reset">       
</form>';

// titlu0 fName lName email phoneNumber pass terms
//isset($_POST['username'],$_POST['password']) 
if (isset($_POST['titlu'],$_POST['fName'],$_POST['lName'],$_POST['email'],$_POST['phoneNumber'],$_POST['pass'],
       $_POST['terms'])){
      
       if( $_POST['titlu'] && $_POST['fName'] && $_POST['lName'] && $_POST['email'] && $_POST['phoneNumber'] 
            && $_POST['pass'] &&  $_POST['terms']){ 
             echo "E OK INREGSITRARE";
              $file = "registration.txt";
              $current = file_get_contents($file);
              // Append a new person to the file
              $titlu = $_POST['titlu'];
              $fName = $_POST['fName'];
              $lName = $_POST['lName'];
              $email = $_POST['email'];
              $phoneNumber = $_POST['phoneNumber'];
              $pass = $_POST['pass'];
              $terms = $_POST['terms'];
    
              $current .=  "$titlu \t";
              file_put_contents($file, $current);

              $current .= "$fName \t";
              file_put_contents($file, $current);

              $current .= "$lName \t";
              file_put_contents($file, $current);

              $current .= "$email \t";
              file_put_contents($file, $current);

              $current .= "$phoneNumber \t";
              file_put_contents($file, $current);

              $current .= "$pass \t";
              file_put_contents($file, $current);

              $current .= "$terms \t";
              file_put_contents($file, $current);

              $current .= "\n";
              file_put_contents($file, $current);
             
          }
          else {
            echo "<font color=red>   Please enter all of the values!</font>  <br><br>";
        }
        echo "$myFormInreg";  
}

else{
       //echo ("Error in form data!"); //AICI INTRA DIN PRIMA
       echo "$myFormInreg";
}

?>