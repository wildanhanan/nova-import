const params = new URLSearchParams(window.location.search);

const id = params.get("id");

loadProduct();

async function loadProduct(){

    const response = await fetch(

        "api/get_product.php?id=" + id

    );

    const result = await response.json();

    const product = result.data;

    document.getElementById("id").value = product.id;
    document.getElementById("title").value = product.title;
    document.getElementById("price").value = product.price;
    document.getElementById("category").value = product.category;
    document.getElementById("description").value = product.description;

}

document

.getElementById("editForm")

.addEventListener("submit", updateProduct);

async function updateProduct(e){

    e.preventDefault();

    const response = await fetch(

        "api/update_product.php",

        {

            method:"POST",

            headers:{

                "Content-Type":"application/json"

            },

            body:JSON.stringify({

                id:document.getElementById("id").value,

                title:document.getElementById("title").value,

                price:document.getElementById("price").value,

                category:document.getElementById("category").value,

                description:document.getElementById("description").value

            })

        }

    );

    const result = await response.json();

    alert(result.message);

    if(result.success){

        window.location="products.php";

    }

}