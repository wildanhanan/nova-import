const container = document.getElementById("databaseProducts");
const search = document.getElementById("search");
const category = document.getElementById("category");

let products = [];

loadProducts();

async function loadProducts(){

    const response = await fetch(

        "api/list_products.php"

    );

    const result = await response.json();

    products = result.data;

    loadCategory();

    render(products);

}

function loadCategory(){

    const categories = [...new Set(

        products.map(p=>p.category)

    )];

    category.innerHTML =

        '<option value="">Semua Kategori</option>';

    categories.forEach(cat=>{

        category.innerHTML +=

        `<option value="${cat}">${cat}</option>`;

    });

}

search.addEventListener("keyup", filterProducts);
category.addEventListener("change", filterProducts);

function filterProducts(){

    const keyword = search.value.toLowerCase();

    const cat = category.value;

    let filtered = products.filter(product=>{

        const cocokNama = product.title

        .toLowerCase()

        .includes(keyword);

        const cocokKategori =

        cat=="" ||

        product.category==cat;

        return cocokNama && cocokKategori;

    });

    render(filtered);

}

function render(data){

    container.innerHTML = "";

    if(data.length==0){

        container.innerHTML=

        `<div class="alert alert-warning">

        Tidak ada data.

        </div>`;

        return;

    }

    data.forEach(product=>{

        container.innerHTML += `

<div class="card p-3 mb-3 product-card">

<div class="row">

<div class="col-md-2 text-center">

<img

src="${product.image}"

class="product-image">

</div>

<div class="col-md-10">

<div class="product-title">

${product.title}

</div>

<div class="product-category">

${product.category}

</div>

<div class="product-price">

$${product.price}

</div>

<div>

⭐ ${product.rating_rate}

(${product.rating_count} Reviews)

</div>

<p class="product-description mt-2">

${product.description}

</p>

<div class="mt-3">

<a
href="detail.php?id=${product.id}"
class="btn btn-success btn-sm">
Detail
</a>

<a
href="edit_product.php?id=${product.id}"
class="btn btn-warning btn-sm">
Edit
</a>

<button
class="btn btn-danger btn-sm"
onclick="deleteProduct(${product.id})">
Hapus
</button>

</div>

</div>

</div>

</div>

`;

    });

}

async function deleteProduct(id){

    if(!confirm("Yakin ingin menghapus?")){

        return;

    }

    const response = await fetch(

        "api/delete_product.php",

        {

            method:"POST",

            headers:{

                "Content-Type":"application/json"

            },

            body:JSON.stringify({

                id:id

            })

        }

    );

    const result = await response.json();

    alert(result.message);

    loadProducts();

}