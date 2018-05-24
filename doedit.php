
<?php
//define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once "includes/connection.php";
require_once "includes/functions.php";

if (!isset($_POST['id']) || !isset($_POST['title']) || !isset($_POST['img'])) {
    header('Location: admin.php?error=nopostdataedit');
    exit;
}
$req = "UPDATE 
  `articles` 
SET 
  `title` = :title, 
  `p` = :p,
  `category` = :category, 
  `img` = :img,
  `author` = :author, 
  `thedate` = :thedate
WHERE 
id = :id
;";
$stmt = $pdo->prepare($req);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':p', $_POST['p']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':author', $_POST['author']);
$stmt->bindValue(':thedate', $_POST['thedate']);
$stmt->execute();
header('Location: read.php?id='.$_POST['id']);