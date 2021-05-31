<html>
<body>
<?php 
	$PersonID =$_POST["PersonID"];
	$LastName = $_POST["LastName"];
	$FirstName = $_POST["FirstName"];
	$Address = $_POST["Address"];
	$City = $_POST["City"];
	
$conn = new mysqli('localhost','karthi','Password@123','behindfacts');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else {
		$stmt = $conn->prepare("INSERT INTO Persons (PersonID, LastName, FirstName, Address, City) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $PersonID, $LastName,$FirstName,$Address,$City );
		$execval = $stmt->execute();
		echo $execval;
		echo "success";
		$stmt->close();
		$conn->close();
	}
?>
</body>
</html> 