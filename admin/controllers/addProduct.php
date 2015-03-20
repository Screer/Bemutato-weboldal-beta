<?php

$pageTitle = "Termék hozzáadása";

if (isset($_POST['productSubmit'])) {
  
	$productName = $_POST['name'];
	$productPrice = $_POST['price'];

	
	// db-be írás:
	$query = "INSERT INTO productlist (name,price) VALUES ('$productName', '$productPrice');";
	$result = $db->query($query);
	if ($db->errno) {
		die($db->error);
	}
	
	$_SESSION['msg'] = 'Termék rögzítve.';
		
	header("Location: $HOST/admin/?q=termekek");
	exit;
}

?>