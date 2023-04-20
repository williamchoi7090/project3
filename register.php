<!DOCTYPE html>
<html>	
	<head>
		<title>Register</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
	    <form method="post" action="register-submit.php">
            <div class= "mine">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input class="register-btn" type="submit" value="Register">
            <div>
        </form>
        <div class="intro">
            <h2><a href='intro.html'>Back to intro page!</a></h2>
        </div>
	</body>
</html>