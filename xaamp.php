<!DOCTYPE html>
<html>
<head>
<?php include('nav.html'); ?>
<br><br><br>

<style>
table {
border-collapse: collapse;
width: 100.10%;
height: 500px;
color: #588c7e;
font-family: 'Times New Roman';
font-size: 25px;
text-align: left;
}
th {
background-color: purple;
color: white;
}

tr:nth-child(even) {background-color: #C6C0EC}
</style>
</head>
<body>
<table>
<tr>
<th> ID </th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "sparks");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, email, balance FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>"
. $row["email"] . "</td><td>". $row["balance"]. "</td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>