let cartItems = [];

function addToCart(productName, price) {
    cartItems.push({ name: productName, price: price });
    updateCart();
}

function updateCart() {
    let cartList = document.getElementById('cart-items');
    let totalPrice = 0;
    cartList.innerHTML = '';
    cartItems.forEach(item => {
        let listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price}`;
        cartList.appendChild(listItem);
        totalPrice += item.price;
    });
    document.getElementById('total-price').textContent = `$${totalPrice}`;
}

function checkout() {
    // You can add additional logic here, like sending cartItems to a server for processing
    alert('Thank you for taking service!');
    // Clear the cart after checkout
    cartItems = [];
    updateCart();
}