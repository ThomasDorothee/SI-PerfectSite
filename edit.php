<?php
require_once "includes/connection.php";
require_once "includes/functions.php";

getHeaderAdmin();
update($pdo);
getFooterAdmin();