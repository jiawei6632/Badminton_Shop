<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="app/css/layout.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>
    <body>
        <header>
            <div class="layout-container">
                <div class="header-container">
                    <div class="logo">
                        <img src="../../../app/images/badminton_logo.png" alt="SmashZone Logo">
                        <h1>Smash<span>Zone</span></h1>
                    </div>
                    
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="../../../app/page/normal/shop.php">Shop</a></li>
                            <li><a href="../../../app/page/normal/about.php">About</a></li>
                            <li><a href="../../../app/page/normal/contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    
                    <div class="header-actions">
                        <div class="header-search-box">
                            <input type="text" placeholder="Search products...">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        <a href="../../../app/page/normal/user.php" class="user-icon">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="cart.php" class="cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-count">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>