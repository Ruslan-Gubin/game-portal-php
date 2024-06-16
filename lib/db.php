<?php
// declare(strict_types=1);

$dbhost = "MySQL-8.2";
$dbusername = "root";
$dbpassword = "";
$dbname = "game_portal";
$dbport = "3306";

$pdo = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
?>