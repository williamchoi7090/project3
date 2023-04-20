<!DOCTYPE html>
<html>	
	<head>
		<title>Result</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
    <div class="name">
    <?php
        $name = $_GET['name'];
        echo 'Welcome '.$name.'!</br></br>'
    ?>
    </div>
    <div class="score">
    <?php
        $score = $_GET['finalGeneration'];
        echo "Score for ".$name." is: " . $score;
    ?>
    </div>
	</body>
</html>