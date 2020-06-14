<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Users Sessions</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
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
<th>Name</th>
<th>Username</th>
<th>Email Address</th>
<th>Timestamp</th>
</tr>
<?php
include 'db.php';
$sql = "SELECT name,username, email,visit FROM login";
$result = $con->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["username"] . "</td><td>" . $row["email"]. "</td><td>"  .$row["visit"].  "</td></tr>" ;
}
echo "</table>";
} 
?>
</table>
</body>
</html>