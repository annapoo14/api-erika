<?php
// Session dihapus dan logout
session_start();
$_SESSION = [];
session_unset();
session_destroy();


header('location: index.php');
