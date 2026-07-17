<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Edit Produk</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
href="assets/css/style.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<a
href="products.php"
class="btn btn-secondary mb-3">

Kembali

</a>

<div class="card p-4">

<h3 class="mb-4">

Edit Produk

</h3>

<form id="editForm">

<input type="hidden" id="id">

<div class="mb-3">

<label>Nama Produk</label>

<input
type="text"
id="title"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="number"
step="0.01"
id="price"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Kategori</label>

<input
type="text"
id="category"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
id="description"
class="form-control"
rows="5"
required></textarea>

</div>

<button
type="submit"
class="btn btn-primary">

Update Produk

</button>

</form>

</div>

</div>

<script src="assets/js/edit_product.js"></script>

</body>

<footer class="footer">
    <p>
        © <?= date('Y'); ?> Product Management System | FakeStore API
    </p>
</footer>

</html>