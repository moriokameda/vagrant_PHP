<?php
ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=dotinstall_poll_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'vader60');

session_start();

require_once (__DIR__ . '/functions.php');
