<!DOCTYPE html>
<html>	
	<head>
		<title>Register</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$file = fopen('file.txt', 'a');
			$text = $name.','.$username.','.$password."\n";
			fwrite($file, $text);
			fclose($file);
			header('Location: login.php');
		?>
	</body>
</html>