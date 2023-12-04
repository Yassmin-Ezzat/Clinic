<?php
require '../controller/Router.php';
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_log("route.php executed: " . $_SERVER['REQUEST_URI']);
Routere::handle( path:$_SERVER['REQUEST_URI']);

?>