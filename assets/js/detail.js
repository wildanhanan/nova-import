const container = document.getElementById("detailProduct");

const params = new URLSearchParams(window.location.search);

const id = params.get("id");

loadProduct();

async function loadProduct(){

    const response = await fetch(

        "api/get_product.php?id="+id

    );

    const result = await response.json();

    const product = result.data;

    if(!product){

        container.innerHTML=

        `<div class="alert alert-danger">

        Produk tidak ditemukan.

        </div>`;

        return;

    }

    container.innerHTML=`

<div class="card">

<div class="card-body">

<div class="row">

<div class="col-md-4 text-center">

<img

src="${product.image}"

class="img-fluid"

style="max-height:350px;object-fit:contain;">

</div>

<div class="col-md-8">

<h2>

${product.title}

</h2>

<hr>

<h4 class="text-success">

$${product.price}

</h4>

<p>

<b>Kategori :</b>

${product.category}

</p>

<p>

<b>Rating :</b>

⭐ ${product.rating_rate}

(${product.rating_count} Reviews)

</p>

<p>

${product.description}

</p>

</div>

</div>

</div>

</div>

`;

}