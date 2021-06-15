<?php
$connect=mysqli_connect("localhost","root","", "energyaudit") or die("Connection Failed");

if(!empty($_POST['save']))    
{
$username=$_POST['un'];
$password=$_POST['pw'];

$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($connect, $query); 
$count=mysqli_num_rows($result);

if($count>0)
{
  header("Location:links1.php");
  
}

else

{
  echo '<script>alert("Invalid Credentials")</script>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.example1 {
  background-image: url("pexels-abhiram-prakash-915972.jpg");
  background-color: #cccccc;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.logo img {
  border-radius: 50%;
    height: 150px;
    width: auto;
}

.logo {

    padding-top: 20px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    height: 150px;
}

.menu-bg .logo {
    padding-top: 50px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
  box-sizing: border-box;
float: center;
}


* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color:	#8a2be2
  text-align: center;
}

.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<div class="example1">
<body>
<div class="logo">
		<a href="file:///C:/xampp/htdocs/index.html"></a>
	<img src="4.png">
		</div>

<div class="header">
  <h1><center>Login Page</center></h1>
</div>

<form method="post">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <div class="header"></div>
  </br>
  </br>

   <div class="container">
   Enter UserName <input type="text" name="un" required />
<br/> 

Enter Password <input type="text" name="pw" required/>

<br/> 
<input type="submit" name="save" value="Login"/>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>






