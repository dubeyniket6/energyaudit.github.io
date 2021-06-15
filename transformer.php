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

    $feedid = $_POST['feedid'];
    $dtrs = $_POST['dtrs'];
    $area = $_POST['area'];
    $birthday = $_POST['birthday'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `trans`(`feedid`, `dtrs`, `area`, `birthday`) VALUES ('$feedid','$dtrs','$area','$birthday')";
    
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
.trans1{
  text-align: center;
  float: center;
  position: absolute;
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
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
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
<h1>Transformer Add Form</h1>
</div>

<div class="topnav">
  <a href="#">HOME</a>
  <a href="dtroutput.php">Total Transformers</a>
   <a href="#">ABOUT</a>
  <a href="#">CONTACT</a>
</div>
<FORM method=post>
<DIV class=" trans1" style="RIGHT: 50x; LEFT: 150px; POSITION:absolute; TOP: 350px">
<FONT 
face="binnerd" color="#000000" size=6>
<table bordercolor="#000000" border=4 cellspacing=4>
<tr>
<td><FONT 
face="verdana" color="#000000" size=5><b><i>feeder </b></i>
<td><input type="text" name="feedid" required>
</tr>
<tr>
<td><FONT 
face="verdana" color="#000000" size=5><i><b>No. of DTR</b></i>
<td><input type="text" name="dtrs" required>
</tr>

<tr>
<td><FONT 
face="verdana" color="#000000" size=5><i><b>Area</b></i>
<td><input type="text" name="area" required>
</tr>

<tr>
<td>
  <FONT face="verdana" color="#000000" size=5><i><b>Date</b></i><td></b></i>
  <input type="date" id="birthday" name="birthday" required>

  </table>
    <center>
<input type="submit" name="insert" value="submit">
</form>
</center>
</div>
</body>
</html>
