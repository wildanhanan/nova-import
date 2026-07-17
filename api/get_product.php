<?php

header("Content-Type: application/json");

require_once "db.php";

$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

$stmt = $pdo->prepare(

    "SELECT * FROM products WHERE id=?"

);

$stmt->execute([$id]);

$product = $stmt->fetch();

echo json_encode([

    "success"=>true,

    "data"=>$product

]);