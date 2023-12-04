<?php
session_start();
require_once("autoload.php");

$database = new Database("127.0.0.1", "oop", "root", '');
$connect = $database->connectDatabase();
Post::$pdo = $connect;