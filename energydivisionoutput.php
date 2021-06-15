<html>
<head>
<title>Audit System</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Feeder Id</th>
<th>Feeder Name</th>
<th>Station Code</th>
<th>Month</th>
<th>Intial Reading</th>
<th>Final reading</th>
<th>Difrrence</th>
<th>Officer Name</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "energyaudit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id feedid, feedname, sname, monthp, inireading, freading, differenceinput, officer FROM divi";
$result = $conn->query($sql);
if($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["feedid"] . "</td><td>". $row["feedname"] . "</td><td>". $row["sname"]. "</td><td>". $row["monthp"]. "</td><td>". $row["inireading"]. "</td><td>". $row["freading"]. "</td><td>". $row["differenceinput"]. "</td><td>". $row["officer"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>