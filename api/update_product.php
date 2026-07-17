<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (
    !isset($data["id"]) ||
    !isset($data["title"]) ||
    !isset($data["price"]) ||
    !isset($data["category"]) ||
    !isset($data["description"])
) {

    echo json_encode([
        "success" => false,
        "message" => "Data tidak lengkap."
    ]);

    exit;
}

try {

    $stmt = $pdo->prepare("

        UPDATE products

        SET

            title = ?,
            price = ?,
            category = ?,
            description = ?

        WHERE id = ?

    ");

    $stmt->execute([

        $data["title"],
        $data["price"],
        $data["category"],
        $data["description"],
        $data["id"]

    ]);

    echo json_encode([

        "success" => true,

        "message" => "Produk berhasil diperbarui."

    ]);

} catch (PDOException $e) {

    echo json_encode([

        "success" => false,

        "message" => $e->getMessage()

    ]);

}