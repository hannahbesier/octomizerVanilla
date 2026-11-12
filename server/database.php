<?php
require_once __DIR__ . '/config.php';
$host = env("HOST");
$dbname = env("DBNAME");
$user = env("USER");
$password = env("PASSWORD");


$dsn = "pgsql:host=$host;dbname=$dbname;channel_binding=require;sslmode=require";

try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Verbindung zu Neon erfolgreich!";

} catch (error) {
}
