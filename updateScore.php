<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $score = $_POST["score"];
    
    $filename = "score.txt";
    
    // Read the content of the score.txt file
    $file_content = file_get_contents($filename);

    // Split the content into an array of lines
    $lines = explode("\n", $file_content);

    // Find the existing score for the player, if available
    $player_found = false;
    for ($i = 0; $i < count($lines); $i++) {
        if (strpos($lines[$i], $name) !== false) {
            $lines[$i] = $name . ": " . $score.",";
            $player_found = true;
            break;
        }
    }

    // Join the updated lines and write them back to the file
    $updated_content = implode("\n", $lines);
    file_put_contents($filename, $updated_content);
} else {
    http_response_code(405); // Method Not Allowed
}
?>