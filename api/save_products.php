<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["products"])) {

    echo json_encode([
        "success" => false,
        "message" => "Tidak ada data."
    ]);

    exit;
}

try {

    $stmt = $pdo->prepare("

        INSERT INTO products(

            product_id,
            title,
            price,
            description,
            category,
            image,
            rating_rate,
            rating_count

        )

        VALUES(

            :product_id,
            :title,
            :price,
            :description,
            :category,
            :image,
            :rating_rate,
            :rating_count

        )

        ON DUPLICATE KEY UPDATE

            title = VALUES(title),
            price = VALUES(price),
            description = VALUES(description),
            category = VALUES(category),
            image = VALUES(image),
            rating_rate = VALUES(rating_rate),
            rating_count = VALUES(rating_count)

    ");

    $jumlah = 0;

    foreach ($data["products"] as $product) {

        $stmt->execute([

            ":product_id" => $product["id"],

            ":title" => $product["title"],

            ":price" => $product["price"],

            ":description" => $product["description"],

            ":category" => $product["category"],

            ":image" => $product["image"],

            ":rating_rate" => $product["rating"]["rate"],

            ":rating_count" => $product["rating"]["count"]

        ]);

        $jumlah++;

    }

    echo json_encode([

        "success" => true,

        "message" => "$jumlah produk berhasil disimpan."

    ]);

} catch (Exception $e) {

    echo json_encode([

        "success" => false,

        "message" => $e->getMessage()

    ]);

}