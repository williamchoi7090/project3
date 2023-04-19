<!DOCTYPE html>
<html>	
	<head>
		<title>Scoreboard</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$filecontents = file_get_contents('score.txt');
		?>
		<div class= "score2">
			<h3>Scoreboard</h3>
		</div>
		<div class= "score2">
			<pre><h3><?=$filecontents?></h3></pre>
		</div>
    </body>
</html>