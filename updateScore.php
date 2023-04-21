<!DOCTYPE html>
<html>	
	<head>
		<title>Scoreboard</title>
		<link href="intro.css" rel="stylesheet">
	</head>
	<body>
        <?php
            // Check if the request method is POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $score = (int)$_POST["score"];
    
                $filename = "score.txt";
    
                // Read the content of the score.txt file
                $file_content = file_get_contents($filename);

                // Split the content into an array of lines
                $lines = explode("\n", $file_content);

                // Create an associative array with player names as keys and their scores as values
                $scores = [];
                foreach ($lines as $line) {
                    if (!empty($line)) {
                        list($player_name, $player_score) = explode(": ", $line);
                        $player_score = (int)trim($player_score, ",");
                        $scores[$player_name] = $player_score;
                    }
                }

                // Update the player's score if the new score is higher
                if (array_key_exists($name, $scores)) {
                    if ($score > $scores[$name]) {
                        $scores[$name] = $score;
                    }
                }
                else {
                    $scores[$name] = $score;
                }

                // Sort the scores in descending order
                arsort($scores);

                // Write the sorted scores back to the file
                $updated_content = '';
                foreach ($scores as $player_name => $player_score) {
                    $updated_content .= $player_name . ": " . $player_score . ",\n";
                }
                file_put_contents($filename, $updated_content);
            }
            else {
                http_response_code(405); // Method Not Allowed
            }
        ?>
    </body>
</html>