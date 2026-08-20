<?php
session_start();

session_unset();
session_destroy();

header("Location: pro3.7.php");
exit();
?>