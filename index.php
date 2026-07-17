<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nova Import</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link href="assets/css/style.css"
        rel="stylesheet">

</head>

<body>

    <div class="container">

        <!-- Header -->
        <div class="import-section">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <div>
                    <h2>Nova Import</h2>
                    <p>
                        Menampilkan data dari FakeStore API
                    </p>
                </div>

                <a href="products.php" class="btn btn-dark">
                    Lihat Data Produk
                </a>

            </div>

            <!-- Form -->
            <div class="row g-3 align-items-end">

                <div class="col-md-6">

                    <label class="form-label">
                        Cari Produk
                    </label>

                    <input
                        type="text"
                        id="keyword"
                        class="form-control"
                        placeholder="Contoh : backpack">

                </div>

                <div class="col-md-2">

                    <label class="form-label">
                        Jumlah
                    </label>

                    <select
                        id="limit"
                        class="form-select">

                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>

                    </select>

                </div>

                <div class="col-md-2 d-grid">

                    <button
                        id="btnSearch"
                        class="btn btn-primary">

                        Cari

                    </button>

                </div>

                <div class="col-md-2 d-grid">

                    <button
                        id="btnSave"
                        class="btn btn-success">

                        Simpan

                    </button>

                </div>

            </div>

        </div>

        <div id="productContainer" class="mt-4">

        </div>

    </div>

    <footer class="footer">

        <p>
            © <?= date('Y'); ?> Product Management System | FakeStore API
        </p>

    </footer>

    <script src="assets/js/app.js"></script>

</body>

</html>