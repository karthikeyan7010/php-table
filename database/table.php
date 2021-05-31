<?php
$con=mysqli_connect("localhost","karthi","Password@123","karthi");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM products ");

echo "<table border='1'>
<tr>
<th>name</th>
<th>quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";




echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>