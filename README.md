# Nova Import

Nova Import adalah aplikasi **Web Mobile** berbasis **PHP, JavaScript, Bootstrap, dan MySQL** yang memungkinkan pengguna mengambil data produk dari **FakeStore API**, kemudian menyimpan dan mengelolanya melalui REST API yang dibuat sendiri.

Proyek ini dikembangkan sebagai tugas mata kuliah **Pemrograman Mobile**, dengan tujuan mengimplementasikan konsep integrasi antara **Platform API Eksternal**, **REST API**, dan **Database Server**.

---

## ✨ Fitur

- Menampilkan daftar produk dari FakeStore API
- Pencarian produk berdasarkan nama
- Mengatur jumlah produk yang ditampilkan (Limit)
- Memilih produk menggunakan checkbox
- Menyimpan produk ke database (Import)
- Menampilkan data produk yang telah tersimpan
- Melihat detail produk
- Mengubah data produk
- Menghapus data produk
- Tampilan responsif menggunakan Bootstrap

---

## 🛠 Teknologi yang Digunakan

### Frontend

- HTML5
- CSS3
- Bootstrap 5
- JavaScript (Fetch API)

### Backend

- PHP Native

### Database

- MySQL

### Platform API

- FakeStore API

---

## 📂 Struktur Project

```
NovaImport
│
├── api/
│   ├── config.php
│   ├── db.php
│   ├── list_products.php
│   ├── get_product.php
│   ├── save_products.php
│   ├── update_product.php
│   └── delete_product.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── index.php
├── products.php
├── detail.php
├── edit_product.php
└── README.md
```

---

## 🔗 Platform API

**FakeStore API**

Dokumentasi:

https://fakestoreapi.com/

Endpoint yang digunakan:

```
https://fakestoreapi.com/products
```

---

## ⚙️ Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/NovaImport.git
```

### 2. Masuk ke Folder Project

```bash
cd NovaImport
```

### 3. Import Database

Import file SQL ke MySQL menggunakan phpMyAdmin.

### 4. Konfigurasi Database

Ubah file

```
api/config.php
```

sesuai konfigurasi database Anda.

Contoh:

```php
define('DB_HOST', 'YOUR_DB_HOST');
define('DB_NAME', 'YOUR_DB_NAME');
define('DB_USER', 'YOUR_DB_USER');
define('DB_PASS', 'YOUR_DB_PASSWORD');
```

### 5. Jalankan Project

Jika menggunakan XAMPP:

```
http://localhost/NovaImport
```

Jika menggunakan hosting:

```
https://yourdomain.com/
```

---

## 📌 REST API Endpoint

| Method | Endpoint | Fungsi |
|---------|----------|--------|
| GET | `/api/list_products.php` | Menampilkan seluruh produk |
| GET | `/api/get_product.php?id={id}` | Menampilkan detail produk |
| POST | `/api/save_products.php` | Menyimpan produk |
| POST | `/api/update_product.php` | Mengubah produk |
| POST | `/api/delete_product.php` | Menghapus produk |

---

## 🗄 Database

Nama Database

```
fake_store_db
```

Tabel utama

```
products
```

---

## 📸 Tampilan Aplikasi

Tambahkan screenshot berikut pada repository GitHub:

- Halaman Home
- Daftar Produk dari API
- Halaman Products
- Detail Produk
- Edit Produk
- Hapus Produk

---

## 👨‍💻 Pengembang

**Wildan Hanan**

Program Studi Teknik Informatika

Universitas Duta Bangsa Surakarta

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan tugas mata kuliah **Pemrograman Mobile**.

Data produk berasal dari **FakeStore API** dan hanya digunakan untuk tujuan edukasi.

---

## 🙏 Ucapan Terima Kasih

Terima kasih kepada:

- FakeStore API sebagai penyedia data produk.
- Dosen Mata Kuliah Pemrograman Mobile.
- Seluruh pihak yang telah mendukung proses pengembangan aplikasi Nova Import.
