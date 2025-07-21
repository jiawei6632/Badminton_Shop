<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../../../app/css/layout.css">
        <link rel="stylesheet" href="../../../app/css/normal/contact.css">
        <title>SmashZone - Badminton Equipment Shop</title>
    </head>
    <body>
        <?php include __DIR__ . '../../../layout/header.php'; ?>

        <section class="contact-hero">
            <div class="hero-content">
                <h1>Get In Touch</h1>
                <p>We'd love to hear from you! Reach out for inquiries, feedback, or support.</p>
            </div>
        </section>

        <div class="container">
            <div class="contact-container">
                <section class="contact-main">
                    <div class="layout-container">
                        <div class="contact-grid">
                            <div class="contact-form">
                                <h2>Send Us a Message</h2>
                                <form action="process_contact.php" method="POST">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <select id="subject" name="subject" required>
                                            <option value="" disabled selected>Select a subject</option>
                                            <option value="product">Product Inquiry</option>
                                            <option value="order">Order Support</option>
                                            <option value="feedback">Feedback</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="message" rows="5" required></textarea>
                                    </div>
                                    <button type="submit" class="submit-btn">Send Message</button>
                                </form>
                            </div>

                            <div class="contact-info">
                                <h2>Contact Information</h2>
                                <div class="info-card">
                                    <div class="info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Visit Us</h3>
                                        <p>123 Badminton Court,<br>Sports City, 50250<br>Kuala Lumpur, Malaysia</p>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Call Us</h3>
                                        <p>+60 3-1234 5678<br>Mon-Fri: 9am-6pm<br>Sat-Sun: 10am-4pm</p>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Email Us</h3>
                                        <p>info@smashzone.com<br>support@smashzone.com</p>
                                    </div>
                                </div>
                                <div class="social-links">
                                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7925599123456!2d101.686582!3d3.139003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMDgnMjAuNCJOIDEwMcKwNDEnMTEuNyJF!5e0!3m2!1sen!2smy!4v1234567890123!5m2!1sen!2smy" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </section>
            </div>
        </div>

        <?php include __DIR__ . '../../../layout/footer.php'; ?>
    </body>
</html>
       
