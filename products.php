<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>

Data Produk

</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">

<link
href="assets/css/style.css"
rel="stylesheet">

</head>

<body>

<div class="container">

<div class="d-flex justify-content-between align-items-center mt-4 mb-4">

<h2>Data Produk</h2>

<a href="index.php"class="btn btn-primary">Import Produk</a>

</div>

    <p>Data dari FakeStore API yang tersimpan di database.</p>
    
<div class="row mb-3">

<div class="col-md-8">

<input

type="text"

id="search"

class="form-control"

placeholder="Cari produk...">

</div>

<div class="col-md-4">

<select

id="category"

class="form-select">

<option value="">

Semua Kategori

</option>

</select>

</div>

</div>

<div id="databaseProducts">

</div>

</div>

<script src="assets/js/products.js"></script>

</body>

<footer class="footer">
    <p>
        © <?= date('Y'); ?> Product Management System | FakeStore API
    </p>
</footer>

</html>