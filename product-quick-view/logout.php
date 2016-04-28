<?php

// Inialize session
session_start();

// Delete certain session
// Delete all session variables
 session_destroy();

// Jump to login page
header('Location: ../demoPage.php');

?>