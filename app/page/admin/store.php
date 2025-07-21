<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/admin/store.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>

<?php include __DIR__ . '../../../layout/header.php'; ?>

<div class="store-management">
    <div class="management-header">
        <h1>Product Management</h1>
        <div class="action-buttons">
            <button class="btn-primary" id="addProductBtn">
                <i class="fas fa-plus"></i> Add Product
            </button>
        </div>
    </div>

    <div class="search-filters">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search products...">
            <button onclick="searchProducts()"><i class="fas fa-search"></i></button>
        </div>
        <div class="filter-group">
            <select id="statusFilter">
                <option value="all">All Statuses</option>
                <option value="active">Active Only</option>
                <option value="disabled">Disabled Only</option>
            </select>
            <select id="categoryFilter">
                <option value="all">All Categories</option>
                <option value="shuttlecock">Shuttlecocks</option>
                <option value="racket">Rackets</option>
                <option value="shoes">Shoes</option>
                <option value="apparel">Apparel</option>
                <option value="accessories">Accessories</option>
            </select>
        </div>
    </div>

    <div class="products-table-container">
        <table class="products-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data - replace with PHP database fetch -->
                <tr>
                    <td>PRD1001</td>
                    <td>Yonex Aerosensa 30</td>
                    <td>Shuttlecock</td>
                    <td>Yonex</td>
                    <td>$29.99</td>
                    <td>48</td>
                    <td><span class="status-badge active">Active</span></td>
                    <td class="action-buttons">
                        <button class="btn-edit" onclick="editProduct('PRD1001')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-disable" onclick="toggleProductStatus('PRD1001', 'active')">
                            <i class="fas fa-ban"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PRD1002</td>
                    <td>Li-Ning Pro Jersey</td>
                    <td>Apparel</td>
                    <td>Li-Ning</td>
                    <td>$49.99</td>
                    <td>32</td>
                    <td><span class="status-badge active">Active</span></td>
                    <td class="action-buttons">
                        <button class="btn-edit" onclick="editProduct('PRD1002')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-disable" onclick="toggleProductStatus('PRD1002', 'active')">
                            <i class="fas fa-ban"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>PRD1003</td>
                    <td>Victor Thruster K Falcon</td>
                    <td>Racket</td>
                    <td>Victor</td>
                    <td>$229.99</td>
                    <td>15</td>
                    <td><span class="status-badge disabled">Disabled</span></td>
                    <td class="action-buttons">
                        <button class="btn-edit" onclick="editProduct('PRD1003')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-enable" onclick="toggleProductStatus('PRD1003', 'disabled')">
                            <i class="fas fa-check"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <button class="page-btn" disabled><i class="fas fa-chevron-left"></i></button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>

<!-- Add/Edit Product Modal -->
<div class="modal" id="productModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="modalTitle">Add New Product</h2>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <form id="productForm" enctype="multipart/form-data">
            <input type="hidden" id="productId">
            <div class="form-row">
                <div class="form-group">
                    <label for="productName">Product Name*</label>
                    <input type="text" id="productName" required>
                </div>
                <div class="form-group">
                    <label for="productSku">SKU*</label>
                    <input type="text" id="productSku" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="productCategory">Category*</label>
                    <select id="productCategory" required>
                        <option value="">Select Category</option>
                        <option value="shuttlecock">Shuttlecock</option>
                        <option value="racket">Racket</option>
                        <option value="shoes">Shoes</option>
                        <option value="apparel">Apparel</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="productBrand">Brand*</label>
                    <select id="productBrand" required>
                        <option value="">Select Brand</option>
                        <option value="yonex">Yonex</option>
                        <option value="lining">Li-Ning</option>
                        <option value="victor">Victor</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="productPrice">Price*</label>
                    <input type="number" id="productPrice" step="0.01" min="0" required>
                </div>
                <div class="form-group">
                    <label for="productStock">Stock Quantity*</label>
                    <input type="number" id="productStock" min="0" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea id="productDescription" rows="4"></textarea>
            </div>
            
            <div class="form-group">
                <label for="productImages">Product Images</label>
                <input type="file" id="productImages" multiple accept="image/*">
                <div class="image-preview" id="imagePreview"></div>
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn-cancel" onclick="closeModal()">Cancel</button>
                <button type="submit" class="btn-save">Save Product</button>
            </div>
        </form>
    </div>
</div>

<script>
// Modal Functions
function openModal(isEdit = false, productId = '') {
    const modal = document.getElementById('productModal');
    const title = document.getElementById('modalTitle');
    
    if(isEdit) {
        title.textContent = 'Edit Product';
        document.getElementById('productId').value = productId;
        // Here you would fetch product data and populate the form
        // For demo, we're just setting some values
        document.getElementById('productName').value = 'Sample Product';
        document.getElementById('productSku').value = 'PRD' + Math.floor(1000 + Math.random() * 9000);
        document.getElementById('productCategory').value = 'racket';
        document.getElementById('productBrand').value = 'yonex';
        document.getElementById('productPrice').value = '199.99';
        document.getElementById('productStock').value = '25';
        document.getElementById('productDescription').value = 'Sample product description';
    } else {
        title.textContent = 'Add New Product';
        document.getElementById('productForm').reset();
        document.getElementById('imagePreview').innerHTML = '';
    }
    
    modal.style.display = 'block';
}

function closeModal() {
    document.getElementById('productModal').style.display = 'none';
}

// Product Management Functions
function editProduct(productId) {
    openModal(true, productId);
}

function toggleProductStatus(productId, currentStatus) {
    const newStatus = currentStatus === 'active' ? 'disabled' : 'active';
    if(confirm(`Are you sure you want to ${newStatus === 'active' ? 'enable' : 'disable'} this product?`)) {
        // AJAX call to update status
        alert(`Product ${productId} status changed to ${newStatus}`);
        // Reload or update the table
    }
}

function searchProducts() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const statusFilter = document.getElementById('statusFilter').value;
    const categoryFilter = document.getElementById('categoryFilter').value;
    
    // AJAX call to search products with filters
    alert(`Searching for: ${searchTerm}, Status: ${statusFilter}, Category: ${categoryFilter}`);
    // Update table with search results
}

// Image Preview
document.getElementById('productImages').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    
    if(this.files) {
        Array.from(this.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.classList.add('preview-thumbnail');
                preview.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    }
});

// Event Listeners
document.getElementById('addProductBtn').addEventListener('click', () => openModal(false));
document.getElementById('productForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Handle form submission (add/edit product)
    alert('Product saved successfully!');
    closeModal();
});

// Close modal when clicking outside
window.addEventListener('click', function(e) {
    const modal = document.getElementById('productModal');
    if(e.target === modal) {
        closeModal();
    }
});
</script>

<?php include __DIR__ . '../../../layout/footer.php'; ?>