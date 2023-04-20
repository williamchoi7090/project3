<!DOCTYPE html>
<html>	
	<head>
		<title>Login</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
    <?php
        session_destroy();
    ?>  
        <form method="post" action="login-submit.php">
            <div class= "mine">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input class="submit-login" type="submit" value="Login">
            </div>
        </form>
        <div class="intro2">
            <h2><a href='intro.html'>Back to intro page!</a></h2>
        </div>
    </body>
</html>