<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/normal/shop.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>

    <?php include __DIR__ . '../../../layout/header.php'; ?>
<div class="container">
<div class="shop-container">
    <div class="shop-header">
        <h1>Our Products</h1>
        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" placeholder="Search products..." id="searchInput">
                <button onclick="searchProducts()"><i class="fas fa-search"></i></button>
            </div>
            <div class="category-filter">
                <select id="categorySelect" onchange="filterProducts()">
                    <option value="all">All Categories</option>
                    <option value="shuttlecock">Shuttlecocks</option>
                    <option value="racket">Rackets</option>
                    <option value="shoes">Shoes</option>
                    <option value="apparel">Apparel</option>
                    <option value="accessories">Accessories</option>
                </select>
            </div>
        </div>
    </div>

    <div class="products-grid">
        <!-- Product 1 - Shuttlecock -->
        <div class="product-card" data-category="shuttlecock">
            <div class="product-badge">Best Seller</div>
            <img src="../images/products/shuttlecock-yonex.jpg" alt="Yonex Aerosensa 30 Shuttlecock">
            <div class="product-info">
                <span class="product-category">Shuttlecock</span>
                <h3>Yonex Aerosensa 30</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(48)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$29.99</span>
                    <span class="original-price">$34.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 2 - Racket -->
        <div class="product-card" data-category="racket">
            <img src="../images/products/racket-voltric.jpg" alt="Yonex Voltric Z-Force II">
            <div class="product-info">
                <span class="product-category">Racket</span>
                <h3>Yonex Voltric Z-Force II</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>(36)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$249.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 3 - Shoes -->
        <div class="product-card" data-category="shoes">
            <div class="product-badge">New</div>
            <img src="../images/products/shoes-65z2.jpg" alt="Yonex Power Cushion 65Z2">
            <div class="product-info">
                <span class="product-category">Shoes</span>
                <h3>Power Cushion 65Z2</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(52)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$159.99</span>
                    <span class="original-price">$179.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 4 - Apparel -->
        <div class="product-card" data-category="apparel">
            <img src="../images/products/jersey-lining.jpg" alt="Li-Ning Badminton Jersey">
            <div class="product-info">
                <span class="product-category">Apparel</span>
                <h3>Li-Ning Pro Jersey</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>(28)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$49.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 5 - Accessories -->
        <div class="product-card" data-category="accessories">
            <img src="../images/products/grip-yonex.jpg" alt="Yonex Super Grap">
            <div class="product-info">
                <span class="product-category">Accessories</span>
                <h3>Yonex Super Grap</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>(112)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$9.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 6 - Shuttlecock -->
        <div class="product-card" data-category="shuttlecock">
            <img src="../images/products/shuttlecock-lining.jpg" alt="Li-Ning A+60 Shuttlecock">
            <div class="product-info">
                <span class="product-category">Shuttlecock</span>
                <h3>Li-Ning A+60</h3>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>(24)</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$26.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function filterProducts() {
    const category = document.getElementById('categorySelect').value;
    const products = document.querySelectorAll('.product-card');
    
    products.forEach(product => {
        if (category === 'all' || product.dataset.category === category) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

function searchProducts() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const products = document.querySelectorAll('.product-card');
    
    products.forEach(product => {
        const productName = product.querySelector('h3').textContent.toLowerCase();
        if (productName.includes(searchTerm)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}
</script>

<?php include __DIR__ . '../../../layout/footer.php'; ?>

</html>