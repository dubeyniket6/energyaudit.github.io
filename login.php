<?php
include("connect.php");
?>

<?php

$uname=$_POST['uname'];
$pass=$_POST['psw'];
$error="";
$success="";

if(isset($_POST['submit']))

{
  if($uname ==  "admin")
  {
    if($pass== "password")
    {
      $error = "";
      $success = "welcome Admin";

    }
    else
    {
      $error = "Invalid password ";
      $success = "";
    }
  }
  else
  {
    $error = "Invalid username";
      $success = "";
  }
}
?>
  <form method="post">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <header><div class="header"></div>
   <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
 
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">submit</button 
    <input type="submit" name="submit" > </button>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <button class="cancelbtn" onclick="document.location='file:///C:/Users/Niket%20Dubey/OneDrive/Desktop/electric/index.html'">Cancel</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>
</header>




<!-- $query="INSERT INTO ENERGYAUDIT VALUES ('$un','$ps')";
$data=mysqli_query($conn,$query);
if($data)
{
  echo"data inserted";
}

else
{
  failed;
}
?>
 -->








