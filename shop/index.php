<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?php bloginfo('name'); ?> | Furniture Store
    </title>

    <?php wp_head(); ?>
	<link rel="stylesheet"
          href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>


<body <?php body_class(); ?>>


<!-- ================= HEADER ================= -->

<header class="header">

    <div class="container navbar">

        <a href="#home" class="logo">
            FURNI<span>HOME</span>
        </a>


        <nav class="nav-menu" id="navMenu">

            <a href="#home">Home</a>

            <a href="#shop">Shop</a>

            <a href="#categories">Categories</a>

            <a href="#about">About</a>

            <a href="#contact">Contact</a>

        </nav>


        <div class="nav-icons">

            <button onclick="openSearch()">
                🔍
            </button>


            <button onclick="openCart()">

                🛒

                <span id="cartCount">
                    0
                </span>

            </button>


            <button
                class="menu-btn"
                onclick="toggleMenu()">

                ☰

            </button>

        </div>

    </div>

</header>



<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="container hero-content">


        <div class="hero-text">

            <p class="small-title">
                PREMIUM FURNITURE
            </p>


            <h1>

                Make Your Home

                <span>
                    Beautiful.
                </span>

            </h1>


            <p>

                Discover premium furniture designed
                to make your home comfortable,
                stylish and beautiful.

            </p>


            <div class="hero-buttons">

                <a
                    href="#shop"
                    class="btn btn-dark">

                    Shop Now →

                </a>


                <a
                    href="#categories"
                    class="btn btn-light">

                    Explore Collection

                </a>

            </div>

        </div>



        <div class="hero-image">

            <img
                src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1000&q=80"
                alt="Modern Sofa">

        </div>


    </div>

</section>



<!-- ================= FEATURES ================= -->

<section class="features">

    <div class="container feature-grid">


        <div class="feature">

            <div class="feature-icon">
                🚚
            </div>

            <div>

                <h3>
                    Free Delivery
                </h3>

                <p>
                    Free delivery on orders above ₹999
                </p>

            </div>

        </div>



        <div class="feature">

            <div class="feature-icon">
                🛡️
            </div>

            <div>

                <h3>
                    Quality Products
                </h3>

                <p>
                    Premium quality furniture
                </p>

            </div>

        </div>



        <div class="feature">

            <div class="feature-icon">
                ↩️
            </div>

            <div>

                <h3>
                    Easy Returns
                </h3>

                <p>
                    7 days easy return policy
                </p>

            </div>

        </div>



        <div class="feature">

            <div class="feature-icon">
                🔒
            </div>

            <div>

                <h3>
                    Secure Payment
                </h3>

                <p>
                    100% secure payment
                </p>

            </div>

        </div>


    </div>

</section>



<!-- ================= CATEGORIES ================= -->

<section
    class="categories"
    id="categories">

    <div class="container">


        <div class="section-heading">

            <p>
                SHOP BY CATEGORY
            </p>

            <h2>
                Find Your Perfect Furniture
            </h2>

        </div>



        <div class="category-grid">


            <div class="category-card">

                <img
                    src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=700&q=80"
                    alt="Sofa">

                <div>

                    <h3>
                        Sofas
                    </h3>

                    <a href="#shop">
                        Shop Now →
                    </a>

                </div>

            </div>



            <div class="category-card">

                <img
                    src="https://images.unsplash.com/photo-1532372320572-cda25653a26d?auto=format&fit=crop&w=700&q=80"
                    alt="Chair">

                <div>

                    <h3>
                        Chairs
                    </h3>

                    <a href="#shop">
                        Shop Now →
                    </a>

                </div>

            </div>



            <div class="category-card">

                <img
                    src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=700&q=80"
                    alt="Bedroom">

                <div>

                    <h3>
                        Bedroom
                    </h3>

                    <a href="#shop">
                        Shop Now →
                    </a>

                </div>

            </div>



            <div class="category-card">

                <img
                    src="https://images.unsplash.com/photo-1556912167-f556f1f39fdf?auto=format&fit=crop&w=700&q=80"
                    alt="Dining">

                <div>

                    <h3>
                        Dining
                    </h3>

                    <a href="#shop">
                        Shop Now →
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- ================= PRODUCTS ================= -->

<section
    class="products"
    id="shop">

    <div class="container">


        <div class="section-heading">

            <p>
                OUR COLLECTION
            </p>

            <h2>
                Best Selling Furniture
            </h2>

        </div>



        <div class="product-grid">


            <!-- PRODUCT 1 -->

            <div class="product-card">

                <div class="product-image">

                    <span class="sale">
                        SALE
                    </span>


                    <button class="heart">
                        ♡
                    </button>


                    <img
                        src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=700&q=80"
                        alt="Luxury Sofa">

                </div>


                <div class="product-info">

                    <p class="category">
                        SOFA
                    </p>

                    <h3>
                        Modern Luxury Sofa
                    </h3>

                    <div class="rating">
                        ★★★★★
                    </div>

                    <div class="price">

                        ₹24,999

                        <del>
                            ₹32,999
                        </del>

                    </div>


                    <button
                        class="add-cart"
                        onclick="addToCart(
                            'Modern Luxury Sofa',
                            24999
                        )">

                        Add to Cart

                    </button>

                </div>

            </div>



            <!-- PRODUCT 2 -->

            <div class="product-card">

                <div class="product-image">

                    <button class="heart">
                        ♡
                    </button>


                    <img
                        src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?auto=format&fit=crop&w=700&q=80"
                        alt="Lounge Chair">

                </div>


                <div class="product-info">

                    <p class="category">
                        CHAIR
                    </p>

                    <h3>
                        Comfort Lounge Chair
                    </h3>

                    <div class="rating">
                        ★★★★★
                    </div>

                    <div class="price">
                        ₹8,999
                    </div>


                    <button
                        class="add-cart"
                        onclick="addToCart(
                            'Comfort Lounge Chair',
                            8999
                        )">

                        Add to Cart

                    </button>

                </div>

            </div>



            <!-- PRODUCT 3 -->

            <div class="product-card">

                <div class="product-image">

                    <span class="sale">
                        SALE
                    </span>


                    <button class="heart">
                        ♡
                    </button>


                    <img
                        src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=700&q=80"
                        alt="King Bed">

                </div>


                <div class="product-info">

                    <p class="category">
                        BEDROOM
                    </p>

                    <h3>
                        Luxury King Bed
                    </h3>

                    <div class="rating">
                        ★★★★★
                    </div>

                    <div class="price">

                        ₹39,999

                        <del>
                            ₹49,999
                        </del>

                    </div>


                    <button
                        class="add-cart"
                        onclick="addToCart(
                            'Luxury King Bed',
                            39999
                        )">

                        Add to Cart

                    </button>

                </div>

            </div>



            <!-- PRODUCT 4 -->

            <div class="product-card">

                <div class="product-image">

                    <button class="heart">
                        ♡
                    </button>


                    <img
                        src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=700&q=80"
                        alt="Coffee Table">

                </div>


                <div class="product-info">

                    <p class="category">
                        TABLE
                    </p>

                    <h3>
                        Modern Coffee Table
                    </h3>

                    <div class="rating">
                        ★★★★★
                    </div>

                    <div class="price">
                        ₹6,499
                    </div>


                    <button
                        class="add-cart"
                        onclick="addToCart(
                            'Modern Coffee Table',
                            6499
                        )">

                        Add to Cart

                    </button>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- ================= OFFER ================= -->

<section class="offer">

    <div class="container offer-box">


        <div>

            <p>
                LIMITED TIME OFFER
            </p>

            <h2>

                Get Up To

                <span>
                    40% OFF
                </span>

            </h2>

            <p>
                Upgrade your home with our premium
                furniture collection.
            </p>


            <a
                href="#shop"
                class="btn btn-dark">

                Shop Sale →

            </a>

        </div>


        <img
            src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80"
            alt="Furniture">

    </div>

</section>



<!-- ================= ABOUT ================= -->

<section
    class="about"
    id="about">

    <div class="container about-grid">


        <img
            src="https://images.unsplash.com/photo-1618220179428-22790b461013?auto=format&fit=crop&w=900&q=80"
            alt="Furniture Interior">


        <div>

            <p class="small-title">
                ABOUT FURNIHOME
            </p>


            <h2>
                Furniture That Makes
                Your House Feel Like Home.
            </h2>


            <p>
                At FurniHome, we believe furniture is
                more than just something you put inside
                your house.
            </p>


            <p>
                Our collection combines modern design,
                premium materials and affordable prices.
            </p>


            <a
                href="#shop"
                class="btn btn-dark">

                Discover More →

            </a>

        </div>


    </div>

</section>



<!-- ================= NEWSLETTER ================= -->

<section class="newsletter">

    <div class="container">

        <p>
            JOIN OUR NEWSLETTER
        </p>


        <h2>
            Get 10% Off Your First Order
        </h2>


        <p>
            Subscribe for exclusive offers and
            new arrivals.
        </p>


        <form
            onsubmit="subscribeNewsletter(event)">

            <input
                type="email"
                id="newsletterEmail"
                placeholder="Enter your email"
                required>


            <button type="submit">

                Subscribe

            </button>

        </form>

    </div>

</section>



<!-- ================= FOOTER ================= -->

<footer id="contact">

    <div class="container footer-grid">


        <div>

            <h2 class="footer-logo">
                FURNI<span>HOME</span>
            </h2>


            <p>
                Premium furniture for modern homes.
            </p>


            <div class="social">

                <a href="#">
                    f
                </a>

                <a href="#">
                    𝕏
                </a>

                <a href="#">
                    ◎
                </a>

                <a href="#">
                    ▶
                </a>

            </div>

        </div>



        <div>

            <h3>
                Quick Links
            </h3>

            <a href="#home">
                Home
            </a>

            <a href="#shop">
                Shop
            </a>

            <a href="#categories">
                Categories
            </a>

            <a href="#about">
                About
            </a>

        </div>



        <div>

            <h3>
                Customer Service
            </h3>

            <a href="#">
                My Account
            </a>

            <a href="#">
                Orders
            </a>

            <a href="#">
                Shipping
            </a>

            <a href="#">
                Returns
            </a>

        </div>



        <div>

            <h3>
                Contact
            </h3>

            <p>
                📍 Gujarat, India
            </p>

            <p>
                📞 +91 63546 78064
            </p>

            <p>
                ✉️ dudhatvivek70@gmail.com
            </p>

        </div>


    </div>


    <div class="copyright">

        © 2026 FurniHome.
        All Rights Reserved.

    </div>

</footer>



<!-- ================= CART ================= -->

<div
    class="cart-overlay"
    id="cartOverlay">


    <div class="cart-box">


        <button
            class="close-cart"
            onclick="closeCart()">

            ×

        </button>


        <h2>
            Your Cart
        </h2>


        <div id="cartItems">
        </div>


        <div class="cart-total">

            Total:

            ₹<span id="cartTotal">
                0
            </span>

        </div>


        <button
            class="checkout"
            onclick="checkout()">

            Checkout

        </button>


    </div>

</div>



<!-- ================= CHECKOUT ================= -->

<div
    class="cart-overlay"
    id="checkoutOverlay">


    <div class="checkout-box">


        <button
            class="close-cart"
            onclick="closeCheckout()">

            ×

        </button>


        <h2>
            Checkout
        </h2>


        <p class="checkout-subtitle">
            Enter your delivery details
        </p>



        <!-- ORDER SUMMARY -->

        <div class="checkout-summary">

            <h3>
                Your Order
            </h3>


            <div id="checkoutProducts">
            </div>


            <div class="checkout-total">

                <span>
                    Total
                </span>

                <strong id="checkoutTotal">
                    ₹0
                </strong>

            </div>

        </div>



        <!-- CUSTOMER DETAILS -->

        <form
            id="checkoutForm"
            onsubmit="placeOrder(event)">


            <h3>
                Delivery Details
            </h3>


            <input
                type="text"
                id="customerName"
                placeholder="Full Name"
                required>


            <input
                type="tel"
                id="customerPhone"
                placeholder="Mobile Number"
                pattern="[0-9]{10}"
                maxlength="10"
                required>


            <textarea
                id="customerAddress"
                placeholder="Full Address"
                required></textarea>



            <!-- PAYMENT -->

            <h3>
                Payment Method
            </h3>


            <div class="payment-options">


                <label
                    class="payment-option"
                    id="codBox">


                    <input
                        type="radio"
                        name="payment"
                        value="cod"
                        onclick="selectPayment('cod')">


                    <div>

                        <strong>
                            Cash on Delivery
                        </strong>

                        <small>
                            Pay when your order arrives
                        </small>

                    </div>

                </label>



                <label
                    class="payment-option"
                    id="onlineBox">


                    <input
                        type="radio"
                        name="payment"
                        value="online"
                        onclick="selectPayment('online')">


                    <div>

                        <strong>
                            Online Payment
                        </strong>

                        <small>
                            Pay using UPI
                        </small>

                    </div>

                </label>


            </div>



            <!-- ONLINE PAYMENT -->

            <div
                id="onlinePayment"
                class="online-payment">


                <label>
                    UPI ID
                </label>


                <input
                    type="text"
                    id="upiId"
                    placeholder="example@upi">


                <p>
                    Enter your UPI ID to continue.
                </p>


            </div>



            <button
                type="submit"
                class="place-order">

                Place Order

            </button>


        </form>


    </div>

</div>



<!-- ================= SEARCH ================= -->

<div
    class="search-overlay"
    id="searchOverlay">


    <button
        onclick="closeSearch()"
        class="close-search">

        ×

    </button>


    <div class="search-box">

        <input
            type="text"
            placeholder="Search furniture...">


        <button>
            Search
        </button>

    </div>

</div>



<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
</body>

</html>