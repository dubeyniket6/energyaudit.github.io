<?php
error_reporting(0);

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = ""; 
    $databaseName = "energyaudit";
    
    // get values form input text and number

    $scode = $_POST['scode'];
    $area = $_POST['area'];
    $powercapacity = $_POST['powercapacity'];
    $officer = $_POST['officer'];
    $birthday = $_POST['birthday'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `sub`(`scode`, `area`, `powercapacity`, `officer`, `birthday`) VALUES ('$scode','$area','$powercapacity','$officer','$birthday')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo '<script>alert("Data Submitted ")</script>';
    }
    
    else{
        echo '<script>alert("Error")</script>';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
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

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the footer */
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
		<a href="file:///C:/xampp/htdocs/index.html">
	<img src="4.png">
		</div>

<div class="header">
  <h1>Substation Add Form</h1>
</div>
<div class="topnav">
  <a href="#">HOME</a>
  <a href="substationoutput.php">Total Substation Form</a>
  <a href="#">ABOUT</a>
  <a href="#">CONTACT</a>

<FORM method=post>
<DIV style="RIGHT: 50x; LEFT: 150px; POSITION:absolute; TOP: 350px">
<center><FONT 
face="binnerd" color="#000000" size=6>
<table bordercolor="#000000" border=4 cellspacing=4>
<tr>
<td><FONT 
face="verdana" color="#000000" size=5>Scode
<td><input type="number" name="scode" required>
</tr>
<tr>
<td><FONT 
face="verdana" color="#000000" size=5>Area
<td><input type="text" name="area" required>
</tr>

<tr>
<td><FONT 
face="verdana" color="#000000" size=5>Powercapacity
<td> <input type="number" name="powercapacity" required>
</tr>

<tr>
<td><FONT 
face="verdana" color="#000000" size=5>officer
<td><input type="text" name="officer" required>
</tr>
</table>
<center>
<form>
  <label for="birthday">Date:</label>
  <input type="date" id="birthday" name="birthday" required>
<input type="submit" name="insert" value="submit">
</form>
</center>

</div>


  
</body>
</html>
