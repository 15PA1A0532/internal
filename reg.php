<?php
     require "conn.php";
        
              
  ?>
<!DOCTYPE html>
<html>
<head>
       <title>REGSISTERING</title>  
       <link rel="stylesheet" href="home.css">
    </head>
  <body>
     <form class="form" method="POSt" action="">
  <div class="container">
     <h1>SIGN UP</h1>
     <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
      <div class="clear">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
    
