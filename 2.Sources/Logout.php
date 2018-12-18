<?php
session_start();

session_destroy();
echo "<center>";
echo "Please click <a href="index.php">home</a> to home.";
echo "</center>";
?>