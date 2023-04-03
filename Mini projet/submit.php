<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];

$sql = "SELECT * FROM identifiants WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "Email déjà existant dans la base de données";
} else {
	$sql = "INSERT INTO identifiants (email) VALUES ('$email')";
	if (mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
		echo "Success - ID: $id, Email: $email";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>