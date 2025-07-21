<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/normal/user.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>
    <body>
        <?php include __DIR__ . '../../../layout/header.php'; ?>

        <div class="user-profile-container">
    <div class="profile-sidebar">
        <div class="user-avatar">
            <img src="../images/users/<?php echo isset($user['avatar']) ? $user['avatar'] : 'default-avatar.jpg'; ?>" alt="User Avatar" id="avatarPreview">
            <div class="avatar-upload">
                <input type="file" id="avatarInput" accept="image/*">
                <button onclick="document.getElementById('avatarInput').click()">Change Avatar</button>
            </div>
        </div>
        <nav class="profile-menu">
            <a href="#" class="active" data-tab="profile">Profile</a>
            <a href="#" data-tab="payment-history">Payment History</a>
            <a href="#" data-tab="orders">My Orders</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>

    <div class="profile-content">
        <!-- Profile Information Tab -->
        <div class="tab-content active" id="profile-tab">
            <h2>My Profile</h2>
            <form class="profile-form" id="profileForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone'] ?? ''); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address"><?php echo htmlspecialchars($user['address'] ?? ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current_password">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" name="new_password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="cancel-btn">Cancel</button>
                    <button type="submit" class="save-btn">Save Changes</button>
                </div>
            </form>
        </div>

        <!-- Payment History Tab -->
        <div class="tab-content" id="payment-history-tab">
            <h2>Payment History</h2>
            <div class="payment-history">
                <div class="payment-card">
                    <div class="payment-header">
                        <span class="order-id">Order #1001</span>
                        <span class="payment-date">15 Jan 2023</span>
                        <span class="payment-status completed">Completed</span>
                    </div>
                    <div class="payment-details">
                        <div class="payment-items">
                            <div class="item">
                                <span class="item-name">Yonex Voltric Z-Force II</span>
                                <span class="item-price">$249.99</span>
                            </div>
                            <div class="item">
                                <span class="item-name">Yonex Aerosensa 30</span>
                                <span class="item-price">$29.99</span>
                            </div>
                        </div>
                        <div class="payment-summary">
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span>$279.98</span>
                            </div>
                            <div class="summary-row">
                                <span>Shipping:</span>
                                <span>$5.00</span>
                            </div>
                            <div class="summary-row total">
                                <span>Total:</span>
                                <span>$284.98</span>
                            </div>
                            <div class="summary-row">
                                <span>Payment Method:</span>
                                <span>Credit Card (•••• •••• •••• 4242)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-header">
                        <span class="order-id">Order #0956</span>
                        <span class="payment-date">02 Dec 2022</span>
                        <span class="payment-status completed">Completed</span>
                    </div>
                    <div class="payment-details">
                        <div class="payment-items">
                            <div class="item">
                                <span class="item-name">Li-Ning Pro Jersey</span>
                                <span class="item-price">$49.99</span>
                            </div>
                            <div class="item">
                                <span class="item-name">Yonex Super Grap</span>
                                <span class="item-price">$9.99</span>
                            </div>
                        </div>
                        <div class="payment-summary">
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span>$59.98</span>
                            </div>
                            <div class="summary-row">
                                <span>Shipping:</span>
                                <span>$5.00</span>
                            </div>
                            <div class="summary-row total">
                                <span>Total:</span>
                                <span>$64.98</span>
                            </div>
                            <div class="summary-row">
                                <span>Payment Method:</span>
                                <span>PayPal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders Tab -->
        <div class="tab-content" id="orders-tab">
            <h2>My Orders</h2>
            <div class="orders-list">
                <!-- Order items would be dynamically generated here -->
                <p>Your order history will appear here.</p>
            </div>
        </div>
    </div>
</div>

<script>
// Tab switching functionality
document.querySelectorAll('.profile-menu a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        if(this.getAttribute('data-tab')) {
            // Remove active class from all tabs and links
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.profile-menu a').forEach(link => {
                link.classList.remove('active');
            });
            
            // Add active class to clicked tab and link
            const tabId = this.getAttribute('data-tab') + '-tab';
            document.getElementById(tabId).classList.add('active');
            this.classList.add('active');
        }
    });
});

// Avatar preview
document.getElementById('avatarInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('avatarPreview').src = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>

<?php include __DIR__ . '../../../layout/footer.php'; ?>
</body>
</html>