<?php
//define('APP_ROOT_DIR', dirname(__DIR__)."/");
require_once "includes/connection.php";
require_once "includes/functions.php";

getHeaderAdmin();
displayCrud($pdo);


getFooterAdmin();

