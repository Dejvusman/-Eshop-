let cart = [];

function addToCart(productName, price) {
    cart.push({ name: productName, price: price });
    alert(productName + " byl přidán do košíku!");
    showCart();
}

function showCart() {
    const cartBody = document.getElementById("cartBody");
    cartBody.innerHTML = ""; // Vymažeme předchozí obsah

    let totalPrice = 0;

    cart.forEach((item, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price} Kč</td>
            <td><button onclick="removeFromCart(${index})">Odebrat</button></td>
        `;
        cartBody.appendChild(row);
        totalPrice += item.price;
    });

    document.getElementById("totalPrice").innerText = `Celková cena: ${totalPrice} Kč`;
    document.getElementById("cart").style.display = "block"; // Zobrazíme košík
}

function removeFromCart(index) {
    cart.splice(index, 1); // Odebereme položku z košíku
    showCart(); // Aktualizujeme zobrazení košíku
}

function closeCart() {
    document.getElementById("cart").style.display = "none"; // Skryjeme košík
}
