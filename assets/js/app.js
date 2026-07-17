const container = document.getElementById("productContainer");
const btnSearch = document.getElementById("btnSearch");
const btnSave = document.getElementById("btnSave");

let currentProducts = [];

btnSearch.addEventListener("click", loadProducts);
btnSave.addEventListener("click", saveProducts);

async function loadProducts() {

    const keyword = document
        .getElementById("keyword")
        .value
        .trim()
        .toLowerCase();

    const limit = parseInt(
        document.getElementById("limit").value
    );

    try {

        const response = await fetch(
            "https://fakestoreapi.com/products"
        );

        const products = await response.json();

        let filtered = products;

        if (keyword !== "") {

            filtered = products.filter(product =>

                product.title.toLowerCase().includes(keyword)

            );

        }

        filtered = filtered.slice(0, limit);

        currentProducts = filtered;

        renderProducts(filtered);

    } catch (error) {

        alert("Gagal mengambil data dari FakeStore API.");

        console.log(error);

    }

}

function renderProducts(products) {

    container.innerHTML = "";

    if (products.length === 0) {

        container.innerHTML = `
            <div class="alert alert-warning">
                Produk tidak ditemukan.
            </div>
        `;

        return;

    }

    products.forEach(product => {

        container.innerHTML += `

<div class="card p-3 product-card">

<div class="row align-items-center">

<div class="col-md-2 text-center">

<div class="d-flex align-items-center mt-3">

<input
type="checkbox"
class="product-check me-2"
id="product${product.id}"
value="${product.id}">

<label
for="product${product.id}"
class="fw-semibold mb-0">

Pilih Produk

</label>

</div>

<br>

<img
src="${product.image}"
class="product-image">

</div>

<div class="col-md-10">

<div class="product-title">

${product.title}

</div>

<div class="product-category">

Kategori :
<b>${product.category}</b>

</div>

<div class="product-price">

$${product.price}

</div>

<div>

⭐ ${product.rating.rate}

(${product.rating.count} Reviews)

</div>

<p class="product-description mt-2">

${product.description}

</p>

</div>

</div>

</div>

`;

    });

}

async function saveProducts() {

    const checked = document.querySelectorAll(".product-check:checked");

    if (checked.length === 0) {

        alert("Pilih minimal satu produk.");

        return;

    }

    let selected = [];

    checked.forEach(check => {

        const id = parseInt(check.value);

        const product = currentProducts.find(p => p.id === id);

        if (product) {

            selected.push(product);

        }

    });

    try {

        const response = await fetch(

            "api/save_products.php",

            {

                method: "POST",

                headers: {

                    "Content-Type": "application/json"

                },

                body: JSON.stringify({

                    products: selected

                })

            }

        );

        const result = await response.json();

        alert(result.message);

    } catch (error) {

        console.log(error);

    }

}
