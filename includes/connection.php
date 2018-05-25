<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/03/2018
 * Time: 14:45
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=voyage', 'root', 'root');
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $exception) {
    die($exception->getMessage());
}
