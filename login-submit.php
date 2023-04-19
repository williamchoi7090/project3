<!DOCTYPE html>
<html>	
	<head>
		<title>Login</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
        <?php
            $username = $_GET["username"];
            $password = $_GET["password"];

            $file = "file.txt";
            $users = file($file);

            foreach ($users as $user) {
                $user = rtrim($user);
                $userinfo = explode(",", $user);

                if ($username == $userinfo[1] && $password == $userinfo[2]) {
                    header('Location: https://codd.cs.gsu.edu/~tnguyen565/WebPro/PW/PW3/');
                    exit();
                }
            }
        ?>
        <div class="error">
        <h2>Error!</h2>
        <p>Invalid username or password.</p>
        <p>Please go back and try again.</p>
        <div class="intro3">
        <p><a href='login.php'>Back to login page!</a></p>
        </div>
        </div>
	</body>
</html>