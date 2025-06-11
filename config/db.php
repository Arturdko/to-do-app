<?php
$host = "sql300.infinityfree.com";
$db = "if0_39202501_domore_app";
$user = "if0_39202501";
$pass = "2u13no8xdm";


try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Database connection failed: " . $e->getMessage();
}
