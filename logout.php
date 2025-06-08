<?php
session_start();
session_unset(); // Delete all session variables
session_destroy(); // Destroyes session

header("Location: login.php");
exit;
