let carts = document.querySelectorAll('.add-product');

let products = [
    {
        name: "Basen 1",
        price: 399,
        image: "images/products-page/basen1_1.jpg",
        inCart: 0
    },
    {
        name: "Basen 2",
        price: 279,
        image: "images/products-page/basen2_1.jpg",
        inCart: 0
    },
    {
        name: "Basen 3",
        price: 349,
        image: "images/products-page/basen3_1.jpg",
        inCart: 0
    }
];

for (let i = 0; i < carts.length; i++)
{
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.nav-link.cart span').textContent = productNumbers;
    }

}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector('.nav-link.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector('.nav-link.cart span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems !== null) {

        if (cartItems[product.name] === undefined) {
            cartItems = {
                ...cartItems,
                [product.name]: product
            };
        }
        cartItems[product.name].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.name]: product
        };
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}


function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');

    if (cartCost !== null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }

}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let productContainer = document.querySelector('.products');

    let cartCost = localStorage.getItem('totalCost');
    cartCost = parseInt(cartCost);

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map((item) => {
            productContainer.innerHTML +=
            `
            <div class='product_con w-100 d-flex'>
            <div class="product">
                <button type="button" class="remove" data-target="${item.name}"></button>
                <img src="${item.image}" alt="">
                <span class="product-name">${item.name}</span>
            </div>
            <div class="product-price">${item.price},00 PLN</div>
            <div class="quantity">
                <button type="button" class="decrement" data-target="${item.name}"></button> 
                <span>${item.inCart}</span>
                <button type="button" class="increment" data-target="${item.name}"></button>
            </div>
            <div class="total-price">
                ${item.inCart * item.price},00 PLN
            </div></div>
            `;
        });
        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">RAZEM</h4>
                <h4 class="basketTotal">${cartCost},00 PLN</h4>
            </div>
        `;

    }
}

function generateAlert() {
    $('#alert').toast('show');
}

onLoadCartNumbers();
displayCart();

let btn_remove = document.querySelectorAll(".remove");
let btn_increment = document.querySelectorAll(".increment");
let btn_decrement = document.querySelectorAll(".decrement");

document.addEventListener("DOMContentLoaded", () => {

    console.log("DOM wczytany, można działać...");

    btn_remove.forEach(function (elem) {
        elem.addEventListener("click", (e) => {

            let elem = e.target;
            let product_name = $(elem).attr('data-target');

            let product = {
                name: product_name
            };

            console.log("Kliknięto przycisk remove");

            let cartItems = localStorage.getItem("productsInCart");
            cartItems = JSON.parse(cartItems);

            let cartCost = localStorage.getItem('totalCost');
            cartCost = parseInt(cartCost);

            let productNumbers = localStorage.getItem('cartNumbers');
            productNumbers = parseInt(productNumbers);

            //usuniecie total cost o cene produktu razy ilosc produktu w koszyku
            localStorage.setItem("totalCost", cartCost - (cartItems[product.name].inCart * cartItems[product.name].price));

            // usuniecie ilosci produktu z koszyka
            localStorage.setItem("cartNumbers", productNumbers - cartItems[product.name].inCart);
            document.querySelectorAll('.nav-link.cart span').textContent = productNumbers - cartItems[product.name].inCart;

            // usuniecie ilosci produktu do 0
            cartItems[product.name].inCart = 0;
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            
            // usuniecie produktu na stale z localStorage - nie dziala 
            delete cartItems[product.name];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            
        });
    });

    btn_increment.forEach(function (elem) {
        elem.addEventListener("click", (e) => {

            let elem = e.target;
            let product_name = $(elem).attr('data-target');

            let product = {
                name: product_name
            };

            console.log("Kliknięto przycisk increment");

            let cartItems = localStorage.getItem("productsInCart");
            cartItems = JSON.parse(cartItems);

            let cartCost = localStorage.getItem('totalCost');
            cartCost = parseInt(cartCost);

            let productNumbers = localStorage.getItem('cartNumbers');
            productNumbers = parseInt(productNumbers);

            //aktualizacja total cost o cene produktu razy ilosc produktu w koszyku - zwiekszenie total cost 
            localStorage.setItem("totalCost", cartCost + cartItems[product.name].price);

            // dodanie ilosci produktu do koszyka
            productNumbers += 1;
            localStorage.setItem("cartNumbers", productNumbers);
            document.querySelectorAll('.nav-link.cart span').textContent = productNumbers;

            // dodanie w obiekcie produktu + 1 inCart
            cartItems[product.name].inCart += 1;
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            // 

        });
    });

    btn_decrement.forEach(function (elem) {
        elem.addEventListener("click", (e) => {

            let elem = e.target;
            let product_name = $(elem).attr('data-target');

            let product = {
                name: product_name
            };

            console.log("Kliknięto przycisk decrement");

            let cartItems = localStorage.getItem("productsInCart");
            cartItems = JSON.parse(cartItems);

            let cartCost = localStorage.getItem('totalCost');
            cartCost = parseInt(cartCost);

            let productNumbers = localStorage.getItem('cartNumbers');
            productNumbers = parseInt(productNumbers);

            if (cartItems[product.name].inCart > 1)
            {

                //aktualizacja total cost o cene produktu razy ilosc produktu w koszyku - zmniejszenie total cost
                localStorage.setItem("totalCost", cartCost - cartItems[product.name].price);

                // odejmowanie ilosci produktu z koszyka
                productNumbers -= 1;
                localStorage.setItem("cartNumbers", productNumbers);
                document.querySelectorAll('.nav-link.cart span').textContent = productNumbers;

                // odjecie w obiekcie produktu - 1 inCart
                cartItems[product.name].inCart -= 1;
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            } else {
                $('.toast').toast();
                this.generateAlert();
            }

        });
    });

});

