<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect the user to the homepage or another appropriate page
header("Location: intro.html");
exit();
?>