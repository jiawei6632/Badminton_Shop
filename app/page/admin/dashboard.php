<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/admin/dashboard.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>

<?php include __DIR__ . '../../../layout/header.php'; ?>

<div class="admin-dashboard">
    <div class="dashboard-header">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-stats">
            <div class="stat-card">
                <i class="fas fa-shopping-cart"></i>
                <span class="stat-value">24</span>
                <span class="stat-label">New Orders</span>
            </div>
            <div class="stat-card">
                <i class="fas fa-dollar-sign"></i>
                <span class="stat-value">$3,845</span>
                <span class="stat-label">Today's Sales</span>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <span class="stat-value">156</span>
                <span class="stat-label">Active Users</span>
            </div>
            <div class="stat-card">
                <i class="fas fa-box-open"></i>
                <span class="stat-value">87%</span>
                <span class="stat-label">Stock Available</span>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="dashboard-section">
            <h2>Quick Actions</h2>
            <div class="action-cards">
                <!-- Store Management Card -->
                <a href="store.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Store Management</h3>
                    <p>Manage products, categories, and inventory</p>
                    <div class="card-badge">CRUD</div>
                </a>

                <!-- Order Management Card -->
                <a href="orders.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Order Management</h3>
                    <p>View and update order delivery status</p>
                    <div class="card-badge">Status</div>
                </a>

                <!-- Event Management Card -->
                <a href="events.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Event Management</h3>
                    <p>Create and manage store events</p>
                    <div class="card-badge">CRUD</div>
                </a>

                <!-- Sales Report Card -->
                <a href="reports.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sales Reports</h3>
                    <p>View sales analytics and reports</p>
                    <div class="card-badge">Review</div>
                </a>

                <!-- Staff Management Card -->
                <a href="staff.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Staff Management</h3>
                    <p>Manage staff accounts and permissions</p>
                    <div class="card-badge">CRUD</div>
                </a>

                <!-- System Settings Card -->
                <a href="settings.php" class="action-card">
                    <div class="card-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>System Settings</h3>
                    <p>Configure store settings</p>
                    <div class="card-badge">Config</div>
                </a>
            </div>
        </div>

        <div class="dashboard-section">
            <h2>Recent Activity</h2>
            <div class="activity-log">
                <div class="activity-item">
                    <div class="activity-icon success">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="activity-content">
                        <p>Order #1042 marked as delivered</p>
                        <small>10 minutes ago</small>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon warning">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div class="activity-content">
                        <p>Low stock alert for Yonex Aerosensa 30</p>
                        <small>25 minutes ago</small>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon primary">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    <div class="activity-content">
                        <p>New product added: Victor Thruster K Falcon</p>
                        <small>1 hour ago</small>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon info">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="activity-content">
                        <p>New staff account created for Sarah Lim</p>
                        <small>2 hours ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '../../../layout/footer.php'; ?>