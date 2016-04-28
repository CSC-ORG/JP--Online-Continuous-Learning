<?php

// Inialize session


// Include database connection settings
include "/connect.php";


session_start();


echo $_SESSION['id'] ;


?>