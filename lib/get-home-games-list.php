<?php 
require_once "lib/db.php";

$url = $_SERVER['REQUEST_URI'];

$limit = 4;

$sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';

if ($url === '/trending.php') {
  $sql = 'SELECT * FROM trending ORDER BY id DESC';
} 


$query = $pdo->prepare($sql);
$query->execute();
$games = $query->fetchAll(PDO::FETCH_OBJ);

?>