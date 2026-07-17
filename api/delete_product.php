<?php

header("Content-Type: application/json");

require_once "db.php";

$data=json_decode(

    file_get_contents("php://input"),

    true

);

if(!isset($data["id"])){

    echo json_encode([

        "success"=>false,

        "message"=>"ID tidak ditemukan."

    ]);

    exit;

}

$stmt=$pdo->prepare(

    "DELETE FROM products WHERE id=?"

);

$stmt->execute([

    intval($data["id"])

]);

echo json_encode([

    "success"=>true,

    "message"=>"Produk berhasil dihapus."

]);