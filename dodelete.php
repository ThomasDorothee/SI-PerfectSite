
<?php
//define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once "includes/connection.php";
require_once "includes/functions.php";
$id = $_GET['id'];

$req = "DELETE FROM 
`articles` 
WHERE 
id = :id;";

$stmt = $pdo->prepare($req);
$stmt->bindValue(':id', $id);
$stmt->execute();
header('Location: admin.php');

