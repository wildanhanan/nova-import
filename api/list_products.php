<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once "db.php";

try {

    $stmt = $pdo->query("

        SELECT *

        FROM products

        ORDER BY id DESC

    ");

    echo json_encode([

        "success" => true,

        "data" => $stmt->fetchAll()

    ]);

} catch (Exception $e) {

    echo json_encode([

        "success" => false,

        "message" => $e->getMessage()

    ]);

}
