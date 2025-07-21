<?php
// index.php - Main homepage for the badminton shop
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmashZone - Premium Badminton Equipment</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Main content styles */
        .hero {
            background: linear-gradient(rgba(29, 53, 87, 0.8), rgba(29, 53, 87, 0.8)), 
                        url('images/badminton-hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 1rem;
            margin-bottom: 3rem;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #e63946;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        .btn {
            display: inline-block;
            background-color: #e63946;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #c1121f;
            transform: translateY(-2px);
        }
        
        .featured-products {
            max-width: 1200px;
            margin: 0 auto 3rem;
            padding: 0 1rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: #1d3557;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .product-image {
            height: 200px;
            background-color: #f1faee;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .product-image img {
            max-height: 80%;
            max-width: 80%;
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #1d3557;
        }
        
        .product-price {
            font-weight: bold;
            color: #e63946;
            margin-bottom: 1rem;
        }
        
        .product-rating {
            color: #ffc107;
            margin-bottom: 1rem;
        }
        
        .add-to-cart {
            width: 100%;
            padding: 0.5rem;
            background-color: #1d3557;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .add-to-cart:hover {
            background-color: #14213d;
        }
    </style>
</head>
<body>
    <?php include 'app/layout/header.php'; ?>
    
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h2>Premium Badminton Equipment</h2>
            <p>Shop the latest rackets, shuttles, and apparel from top brands like Yonex, Victor, and Li-Ning</p>
            <a href="../../../app/page/normal/shop.php" class="btn">Shop Now</a>
        </section>
        
        <!-- Featured Products -->
        <div class="container">
        <section class="featured-products">
            <h2 class="section-title">Featured Products</h2>
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/racket1.png" alt="Yonex Astrox 99">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Yonex Astrox 99</h3>
                        <div class="product-price">RM199.99</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/shuttle1.png" alt="Yonex Aerosensa 30">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Yonex Aerosensa 30</h3>
                        <div class="product-price">RM29.99</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/shoes1.png" alt="Victor P9200">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Victor P9200</h3>
                        <div class="product-price">RM29.99</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/bag1.png" alt="Li-Ning Pro Bag">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Li-Ning Pro Bag</h3>
                        <div class="product-price">RM9.99</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                
            </div>
        </section>
        </div>
    </main>
    
    <?php include 'app/layout/footer.php'; ?>
    
    <!-- Simple JavaScript for mobile menu toggle -->
    <script>
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            const nav = document.querySelector('nav');
            nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>
</html>