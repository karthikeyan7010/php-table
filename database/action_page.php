<html>
<body>
<?php 
	$product = $_POST["product"];
	$quantity = intval($_POST["quantity"]);
	

	$servername = "localhost";
	$username = "karthi";
	$password = "Password@123";
	$dbname = "karthi";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$stmt = $conn->prepare("INSERT INTO products (name, quantity,) VALUES (?, ?)");
	$stmt->bind_param("si", $product, $quantity);
	$stmt->execute();
	
	$stmt->close();
	$conn->close();
	
	echo "<h1>New records created successfully</h1>"; 
?>
Product: <?php echo $product; ?><br>
Quantity: <?php echo $quantity; ?><br>
</body>
</html> 