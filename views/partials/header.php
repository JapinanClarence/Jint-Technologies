<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jint Technologies</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <header>
        <!-- Top Nav -->
        <nav class="top__nav">
            <div class="top__nav-links container">
                <a href="/services" class="top__nav-link">
                    Services
                </a>
                <a href="/products" class="top__nav-link">
                    Products
                </a>
                <a href="/about" class="top__nav-link">
                    About
                </a>
                <a href="/login" class="top__nav-link">
                    Login
                </a>
                <a href="/signup" class="top__nav-link">
                    Signup
                </a>
            </div>
        </nav>
        <!-- Top Nav -->

        <!-- Main Nav -->
        <div class="main__nav">
            <div class="container">
                <div class="main__nav-wrapper">
                    <a href="/">
                        <img src="../assets/images/Jint Web Logo.png" alt="Jint Technologies Logo"
                            class="main__nav-logo">
                    </a>

                    <!-- Search Bar -->
                    <div class="main__nav-search-bar">
                        <form action="" method="get">
                            <input type="text" name="search-item" class="main__nav-search-field"
                                placeholder="Search something here...">
                        </form>

                        <button class="btn btn-search">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon search-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>

                    <div class="main__nav-cart-account">

                        <!-- CART -->
                        <a class="cart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            <span class="values-badge full-round">5</span>

                        </a>
                        <div class="main__nav-cart-items hidden">
                            <span>Recently Added Products</span>
                            <div class="cart-item">
                                <img src="../assets/images/products/sample-product.png" class="cart-item-image" alt="">
                                <span class="cart-item-description">
                                    ASUS ROG FALCHION NX 65% WIRELESS...
                                </span>
                                <span class="cart-item-price">₱6,350.00</span>
                            </div>
                            <div class="cart-item">
                                <img src="../assets/images/products/sample-product.png" class="cart-item-image" alt="">
                                <span class="cart-item-description">
                                    ASUS ROG FALCHION NX 65% WIRELESS...
                                </span>
                                <span class="cart-item-price">₱6,350.00</span>
                            </div>
                            <div class="cart-item">
                                <img src="../assets/images/products/sample-product.png" class="cart-item-image" alt="">
                                <span class="cart-item-description">
                                    ASUS ROG FALCHION NX 65% WIRELESS...
                                </span>
                                <span class="cart-item-price">₱6,350.00</span>
                            </div>
                            <div class="cart-item">
                                <img src="../assets/images/products/sample-product.png" class="cart-item-image" alt="">
                                <span class="cart-item-description">
                                    ASUS ROG FALCHION NX 65% WIRELESS...
                                </span>
                                <span class="cart-item-price">₱6,350.00</span>
                            </div>
                            <div class="cart-item">
                                <img src="../assets/images/products/sample-product.png" class="cart-item-image" alt="">
                                <span class="cart-item-description">
                                    ASUS ROG FALCHION NX 65% WIRELESS...
                                </span>
                                <span class="cart-item-price">₱6,350.00</span>
                            </div>
                            <button class="btn view-cart-btn">View My Shopping Cart</button>
                        </div>


                        <!-- Profile -->
                        <div class="main__nav-account">
                            <img src="../assets/images/default-profile.png" alt="Profile Image"
                                class="full-round profile-img">
                            <span class="username flex">John Doe <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="icon dropdown-icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Main Nav -->

    </header>