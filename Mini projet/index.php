<!DOCTYPE html>
<html>
<head>
	<title>Formulaire PHP</title>
</head>
<body>
	<form action="submit.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<input type="submit" value="Submit">
	</form>
	<div id="result"></div>
	<script src="script.js"></script>
</body>
</html>
