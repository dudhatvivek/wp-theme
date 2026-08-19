// ==================================================
// FURNIHOME - SCRIPT
// ==================================================


// ==================================================
// CART DATA
// ==================================================

let cart = [];


// ==================================================
// ADD TO CART
// ==================================================

function addToCart(name, price) {

    cart.push({
        name: name,
        price: price
    });

    updateCart();

    // IMPORTANT:
    // No popup / alert here.
}


// ==================================================
// UPDATE CART
// ==================================================

function updateCart() {

    const cartCount =
        document.getElementById("cartCount");

    const cartItems =
        document.getElementById("cartItems");

    const cartTotal =
        document.getElementById("cartTotal");


    // Cart count

    cartCount.innerText = cart.length;


    // Empty cart

    if (cart.length === 0) {

        cartItems.innerHTML = `

            <p class="empty-cart">
                Your cart is empty.
            </p>

        `;

        cartTotal.innerText = "0";

        return;
    }


    let total = 0;

    let html = "";


    // Products

    cart.forEach(function(item, index) {

        total += item.price;


        html += `

            <div class="cart-item">

                <div>

                    <strong>
                        ${item.name}
                    </strong>

                    <p>
                        ₹${item.price.toLocaleString("en-IN")}
                    </p>

                </div>


                <button
                    class="remove-item"
                    onclick="removeCart(${index})">

                    ×

                </button>

            </div>

        `;

    });


    cartItems.innerHTML = html;


    cartTotal.innerText =
        total.toLocaleString("en-IN");
}


// ==================================================
// REMOVE FROM CART
// ==================================================

function removeCart(index) {

    cart.splice(index, 1);

    updateCart();
}


// ==================================================
// OPEN CART
// ==================================================

function openCart() {

    const cartOverlay =
        document.getElementById("cartOverlay");

    cartOverlay.style.display = "flex";

}


// ==================================================
// CLOSE CART
// ==================================================

function closeCart() {

    const cartOverlay =
        document.getElementById("cartOverlay");

    cartOverlay.style.display = "none";

}


// ==================================================
// CHECKOUT
// ==================================================

function checkout() {


    // Check empty cart

    if (cart.length === 0) {

        alert(
            "Please add a product to your cart first."
        );

        return;
    }


    // Close cart

    closeCart();


    // Open checkout

    const checkoutOverlay =
        document.getElementById(
            "checkoutOverlay"
        );


    checkoutOverlay.style.display = "flex";


    // Show products

    showCheckoutSummary();
}


// ==================================================
// CHECKOUT SUMMARY
// ==================================================

function showCheckoutSummary() {

    const checkoutProducts =
        document.getElementById(
            "checkoutProducts"
        );


    const checkoutTotal =
        document.getElementById(
            "checkoutTotal"
        );


    let html = "";

    let total = 0;


    cart.forEach(function(item) {

        total += item.price;


        html += `

            <div class="checkout-product">

                <span>
                    ${item.name}
                </span>

                <strong>
                    ₹${item.price.toLocaleString("en-IN")}
                </strong>

            </div>

        `;

    });


    checkoutProducts.innerHTML = html;


    checkoutTotal.innerText =
        "₹" + total.toLocaleString("en-IN");
}


// ==================================================
// CLOSE CHECKOUT
// ==================================================

function closeCheckout() {

    const checkoutOverlay =
        document.getElementById(
            "checkoutOverlay"
        );


    checkoutOverlay.style.display = "none";
}


// ==================================================
// PAYMENT METHOD
// ==================================================

function selectPayment(method) {


    const codBox =
        document.getElementById("codBox");


    const onlineBox =
        document.getElementById("onlineBox");


    const onlinePayment =
        document.getElementById(
            "onlinePayment"
        );


    // COD

    if (method === "cod") {

        codBox.classList.add("selected");

        onlineBox.classList.remove("selected");

        onlinePayment.style.display = "none";
    }


    // ONLINE

    if (method === "online") {

        onlineBox.classList.add("selected");

        codBox.classList.remove("selected");

        onlinePayment.style.display = "block";
    }
}


// ==================================================
// PLACE ORDER
// ==================================================

function placeOrder(event) {

    event.preventDefault();


    // Customer information

    const name =
        document.getElementById(
            "customerName"
        ).value.trim();


    const phone =
        document.getElementById(
            "customerPhone"
        ).value.trim();


    const address =
        document.getElementById(
            "customerAddress"
        ).value.trim();


    // Validate name

    if (name === "") {

        alert("Please enter your name.");

        return;
    }


    // Validate phone

    if (!/^[0-9]{10}$/.test(phone)) {

        alert(
            "Please enter a valid 10 digit mobile number."
        );

        return;
    }


    // Validate address

    if (address === "") {

        alert(
            "Please enter your complete address."
        );

        return;
    }


    // Payment method

    const payment =
        document.querySelector(
            'input[name="payment"]:checked'
        );


    if (!payment) {

        alert(
            "Please select a payment method."
        );

        return;
    }


    // ==================================================
    // CASH ON DELIVERY
    // ==================================================

    if (payment.value === "cod") {

        completeOrder(
            name,
            phone,
            address,
            "Cash on Delivery"
        );

        return;
    }


    // ==================================================
    // ONLINE PAYMENT
    // ==================================================

    if (payment.value === "online") {


        const upi =
            document.getElementById(
                "upiId"
            ).value.trim();


        if (upi === "") {

            alert(
                "Please enter your UPI ID."
            );

            return;
        }


        // Basic UPI validation

        if (!upi.includes("@")) {

            alert(
                "Please enter a valid UPI ID."
            );

            return;
        }


        completeOrder(
            name,
            phone,
            address,
            "Online Payment"
        );
    }
}


// ==================================================
// COMPLETE ORDER
// ==================================================

function completeOrder(
    name,
    phone,
    address,
    paymentMethod
) {


    // Calculate total

    let total = 0;


    cart.forEach(function(item) {

        total += item.price;

    });


    // Order number

    const orderNumber =
        "FH" +
        Date.now();


    // ==================================================
    // SHOW ORDER SUCCESS
    // ==================================================

    alert(

        "ORDER PLACED SUCCESSFULLY!\n\n" +

        "Order ID: " +
        orderNumber +
        "\n\n" +

        "Name: " +
        name +
        "\n" +

        "Mobile: " +
        phone +
        "\n\n" +

        "Address: " +
        address +
        "\n\n" +

        "Payment: " +
        paymentMethod +
        "\n\n" +

        "Total: ₹" +
        total.toLocaleString("en-IN")

    );


    // Clear cart

    cart = [];


    // Update cart

    updateCart();


    // Close checkout

    closeCheckout();


    // Reset form

    document.getElementById(
        "checkoutForm"
    ).reset();


    // Reset payment boxes

    document.getElementById(
        "codBox"
    ).classList.remove("selected");


    document.getElementById(
        "onlineBox"
    ).classList.remove("selected");


    document.getElementById(
        "onlinePayment"
    ).style.display = "none";
}


// ==================================================
// SEARCH
// ==================================================

function openSearch() {

    document.getElementById(
        "searchOverlay"
    ).style.display = "flex";
}


function closeSearch() {

    document.getElementById(
        "searchOverlay"
    ).style.display = "none";
}


// ==================================================
// MOBILE MENU
// ==================================================

function toggleMenu() {

    const menu =
        document.getElementById(
            "navMenu"
        );


    menu.classList.toggle("active");
}


// ==================================================
// CLOSE MOBILE MENU WHEN LINK CLICKED
// ==================================================

document.addEventListener(
    "DOMContentLoaded",
    function() {


        const menuLinks =
            document.querySelectorAll(
                ".nav-menu a"
            );


        menuLinks.forEach(
            function(link) {

                link.addEventListener(
                    "click",
                    function() {

                        const menu =
                            document.getElementById(
                                "navMenu"
                            );


                        menu.classList.remove(
                            "active"
                        );

                    }
                );

            }
        );


        // Initial cart

        updateCart();

    }
);


// ==================================================
// NEWSLETTER
// ==================================================

function subscribeNewsletter(event) {

    event.preventDefault();


    const email =
        document.getElementById(
            "newsletterEmail"
        ).value.trim();


    if (email === "") {

        alert(
            "Please enter your email."
        );

        return;
    }


    alert(
        "Thank you!\n\n" +
        email +
        "\n\nhas been subscribed."
    );


    document.getElementById(
        "newsletterEmail"
    ).value = "";
}


// ==================================================
// HEART / WISHLIST
// ==================================================

document.addEventListener(
    "click",
    function(event) {


        if (
            event.target.classList.contains(
                "heart"
            )
        ) {


            if (
                event.target.innerText === "♡"
            ) {

                event.target.innerText = "♥";

            } else {

                event.target.innerText = "♡";

            }

        }

    }
);


// ==================================================
// CLOSE OVERLAY BY CLICKING OUTSIDE
// ==================================================

document.addEventListener(
    "click",
    function(event) {


        const cartOverlay =
            document.getElementById(
                "cartOverlay"
            );


        const checkoutOverlay =
            document.getElementById(
                "checkoutOverlay"
            );


        // Cart

        if (
            event.target === cartOverlay
        ) {

            closeCart();

        }


        // Checkout

        if (
            event.target === checkoutOverlay
        ) {

            closeCheckout();

        }

    }
);