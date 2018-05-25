<?php
if (!isset($_POST['title']) || empty($_POST['title']) ) {
header('Location: add.php?error=nopostdata');
exit;
}
//define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once "includes/connection.php";
require_once "includes/functions.php";
$req = "INSERT INTO
`articles`
(`category`, `p`,`author`,`thedate`,`title`,`img`)
VALUES
(:category, :p, :author, :thedate, :title, :img)
;";
$stmt = $pdo->prepare($req);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':p', $_POST['p']);
$stmt->bindValue(':author', $_POST['author']);
$stmt->bindValue(':thedate', $_POST['thedate']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();
header('Location: read.php?id='.$pdo->lastInsertId());