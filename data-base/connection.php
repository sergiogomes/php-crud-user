<?php

$utf8 = header("Content-Type: text/html; charset=utf-8");
$link = new mysqli('127.0.0.1', 'root', 'root', 'DB_PHP_CRUD_SYSTEM', '8889');
$link->set_charset('utf-8');
