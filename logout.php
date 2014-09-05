<?php
require_once "libs/UserManager.php";

$um = new UserManager();
$um->logout();
header('location: login.php');

?>
