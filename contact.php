<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mon Site Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#menus">Menus</a></li>
                <li><a href="index.php#offres">Offres</a></li>
            </ul>
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul class="nav-right">
                <li><a href="index.php#gallery">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php#blog">Blog</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us with any inquiries or questions!</p>
            <div class="contact-container">
                <form class="contact-form" action="contact.php" method="post">
                    <div class="form-group">
                        <label for="full-name">Your Full Name</label>
                        <input type="text" id="full-name" name="full-name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone Number</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message Here</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">Send Now</button>
                </form>
                <div class="map">
                    <!-- Intégration de la carte de localisation -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093796!2d144.95565131531642!3d-37.817327979751554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727e4f52b66552!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1597735904893!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <section id="contact-details">
    <h2>Contact Details</h2>
    
    <div class="contact-info">
        <div class="info-item">
            <img src="location-dot-solid.svg" alt="Location Icon">
            <p>1/A, Street View, New York, United States</p>
        </div>
        <div class="info-item">
            <img src="phone-volume-solid.svg" alt="Phone Icon">
            <p>(123) 456-7890</p>
        </div>
        <div class="info-item">
            <img src="envelope-solid.svg" alt="Email Icon">
            <p>info@example.com</p>
        </div>
    </div>
</section>
h2>
            
        </section>
    </main>

    <footer>
        <!-- Pied de page -->
    </footer>

    <script src="script.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Traitement des données du formulaire
    // Par exemple, vous pouvez envoyer les données par email ou les stocker dans une base de données

    // Exemple d'envoi par email
    $to = "your-email@example.com";
    $subject = "New Contact Message from $fullName";
    $body = "Name: $fullName\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Failed to send message. Please try again later.</p>";
    }
}
?>
