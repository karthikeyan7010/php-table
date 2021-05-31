<?php
$con=mysqli_connect("localhost","karthi","Password@123","behindfacts");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons ");

echo "<table border='1'>
<tr>
<th>PersonID</th>
<th>LastName</th>
<th>FirstName</th>
<th>Address</th>
<th>City</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['PersonID'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['FirstName'] ."</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
