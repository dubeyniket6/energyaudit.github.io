<!DOCTYPE html>
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
<th>Power Capacity</th> 
<th>Date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "energyaudit");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, feedid, feedname, scode, powercapacity, birthday FROM feed";
$result = $conn->query($sql);
if($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["feedid"] . "</td><td>". $row["feedname"] . "</td><td>". $row["scode"]. "</td><td>". $row["powercapacity"]. "</td><td>". $row["birthday"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>



</table>
</body>
</html>