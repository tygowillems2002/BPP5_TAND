<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to the index.php page
header("Location: ../../website/index.php");
exit();
?>