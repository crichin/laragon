<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mon Site Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error {
            color: red;
        }
    </style>
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
                <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="full-name">Your Full Name</label>
                        <input type="text" id="full-name" name="full-name" value="<?php echo isset($full_name) ? htmlspecialchars($full_name) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email Address</label>
                        <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone Number</label>
                        <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message Here</label>
                        <textarea id="message" name="message" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                    </div>
                    <button type="submit" name="submit">Send Now</button>
                </form>
                <div class="map">
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
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section menu-links">
                <h3>Menu Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menus">Menus</a></li>
                    <li><a href="#offres">Offres</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section support">
                <h3>Support</h3>
                <ul>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms & Conditions</a></li>
                    <li><a href="#law">Law and Influence</a></li>
                    <li><a href="#order">Order & Pre-Order</a></li>
                    <li><a href="#refund">Refund Policy</a></li>
                </ul>
            </div>
            <div class="footer-section newsletter">
                <h3>Join Our Newsletter</h3>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Mon Site Web | Designed by Moi
        </div>
    </footer>

    <div class="success-message" id="successMessage">
        Message envoyé avec succès !
    </div>

    <script>
        // Simulation de réussite de la connexion après 10 secondes
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            successMessage.style.opacity = '1';
            setTimeout(function() {
                successMessage.style.opacity = '0';
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 1000); // Attendre 1 seconde après la disparition du message
            }, 5000); // Afficher le message pendant 5 secondes
        }, 10000); // Attendre 10 secondes avant d'afficher le message
    </script>
</body>
</html>

<?php
include_once 'db_connect.php'; // Inclure le fichier de connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $full_name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Préparation de la requête SQL d'insertion avec des paramètres
    $sql = "INSERT INTO lara (full_name, email, phone, message) VALUES (?, ?, ?, ?)";

    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres avec les valeurs postées
    $stmt->bind_param("ssss", $full_name, $email, $phone, $message);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "<p style='color: green;'>Message envoyé avec succès !</p>";
    } else {
        echo "<p style='color: red;'>Erreur lors de l'insertion dans la base de données.</p>";
    }

    // Fermeture du statement
    $stmt->close();
}

// Fermeture de la connexion
$conn->close();
?>