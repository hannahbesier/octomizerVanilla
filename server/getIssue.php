<?php
header("Content-Type: application/json; charset=utf-8");

require_once __DIR__ . "/database.php";
try {
    $stmt =  $pdo->query('SELECT name, markdown FROM "Issue" WHERE id=6');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($result);
} catch (PDOException $error) {
    http_response_code(500);
    echo json_encode(["error" => "Data not loaded"]);
}
