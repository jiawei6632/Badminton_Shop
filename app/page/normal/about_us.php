<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/normal/about_us.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>

<?php include __DIR__ . '../../../layout/header.php'; ?>

<div class="about-container">
    <section class="about-hero">
        <div class="hero-content">
            <h1>Our Badminton Journey</h1>
            <p>Passion for the sport meets excellence in equipment</p>
        </div>
    </section>

    <section class="about-story">
        <div class="layout-container">
            <div class="section-header">
                <h2>Our Story</h2>
                <div class="divider"></div>
            </div>
            <div class="story-content">
                <div class="story-text">
                    <p>Founded in 2010, SmashZone began as a small badminton equipment shop in Kuala Lumpur. What started as a passion project by former national player Ahmad Farid has grown into Malaysia's premier badminton specialty store.</p>
                    <p>We've supplied equipment to over 50 schools and clubs nationwide, and our team of experts has helped thousands of players find their perfect gear.</p>
                    <p>Every day, we're driven by our mission to help players at all levels perform their best and enjoy this beautiful sport to the fullest.</p>
                </div>
                <div class="story-image">
                    <img src="../images/about/store-front.jpg" alt="SmashZone store front">
                </div>
            </div>
        </div>
    </section>

    <section class="about-values">
        <div class="layout-container">
            <div class="section-header">
                <h2>Our Values</h2>
                <div class="divider"></div>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We stock only authentic, tournament-grade equipment from trusted brands like Yonex, Li-Ning, and Victor.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Expertise</h3>
                    <p>Our staff includes former national players and certified stringers with decades of combined experience.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Passion</h3>
                    <p>We live and breathe badminton, and we're committed to growing the sport at all levels.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-team">
        <div class="layout-container">
            <div class="section-header">
                <h2>Meet The Team</h2>
                <div class="divider"></div>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image">
                        <img src="../images/about/farid.jpg" alt="Ahmad Farid">
                    </div>
                    <h3>Tow Jia Wei</h3>
                    <p class="position">Founder & CEO</p>
                    <p class="bio">Former national player with 15 years of coaching experience. Specializes in racket customization.</p>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="../images/about/sarah.jpg" alt="Sarah Lim">
                    </div>
                    <h3>Soo Bing Cheng</h3>
                    <p class="position">Head of Equipment</p>
                    <p class="bio">Certified Master Stringer with Yonex and Li-Ning. Played competitively for 10 years.</p>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="../images/about/raj.jpg" alt="Raj Kumar">
                    </div>
                    <h3>Choi Kah Wai</h3>
                    <p class="position">Customer Experience</p>
                    <p class="bio">Badminton enthusiast who loves helping players find their perfect gear match.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-cta">
        <div class="layout-container">
            <h2>Ready to Elevate Your Game?</h2>
            <p>Visit our store or browse our online collection</p>
            <div class="cta-buttons">
                <a href="shop.php" class="btn-primary">Shop Now</a>
                <a href="contact.php" class="btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__ . '../../../layout/footer.php'; ?>