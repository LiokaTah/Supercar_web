<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supercar</title>
</head>
<body></body>
    <div class="main-container">
        <!-- Section gauche  -->
        <div class="left-section">
            <div class="supercar-background">
                <!-- cars supercar simulés -->
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">Golf</div>
                        <div class="car-author">Volkswagen</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">A3</div>
                        <div class="car-author">Audi</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">Série 5</div>
                        <div class="car-author">BMW</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">Class A</div>
                        <div class="car-author">Mercedez-Benz</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">911</div>
                        <div class="car-author">Porche</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">Clio</div>
                        <div class="car-author">Renault</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">106</div>
                        <div class="car-author">Peugeot</div>
                    </div>
                </div>
                
                <div class="car">
                    <div class="car-overlay">
                        <div class="car-title">Berlingo</div>
                        <div class="car-author">Citroen</div>
                    </div>
                </div>
            </div>
            
            <div class="supercar-logo">
                <i class="fab fa-supercar"></i> Supercar
            </div>
            
            <div class="tagline">
                Trouvez votre voiture de rêve chez Supercar
            </div>
        </div>
        
        <!-- Section droite avec formulaire -->
        <div class="right-section">
            <div class="login-container">
                <div class="login-header">
                    <h1>Bienvenue sur Supercar</h1>
                    <p>Trouvez de votre voiture de rêve</p>
                </div>
                
                <div class="form-container">
                    <?php
                    // Traitement PHP du formulaire
                    $error = '';
                    $success = '';
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $email = trim($_POST['email'] ?? '');
                        $password = $_POST['password'] ?? '';
                        
                        // Validation
                        if (empty($email) || empty($password)) {
                            $error = 'Veuillez remplir tous les champs.';
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $error = 'Veuillez entrer une adresse email valide.';
                        } else {
                            // Simulation de connexion
                            if ($email === 'demo@supercar.com' && $password === 'supercar123') {
                                $success = 'Connexion réussie! Redirection en cours...';
                            } else {
                                $error = 'Email ou mot de passe incorrect.';
                            }
                        }
                    }
                    
                    // Affichage des messages
                    if ($error) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 16px; margin-bottom: 20px;">';
                        echo '<i class="fas fa-exclamation-circle me-2"></i>' . $error;
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo '</div>';
                    }
                    
                    if ($success) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 16px; margin-bottom: 20px;">';
                        echo '<i class="fas fa-check-circle me-2"></i>' . $success;
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo '</div>';
                    }
                    ?>
                    
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="Email" 
                                required
                                value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="password-container">
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="form-control" 
                                    placeholder="Créez un mot de passe" 
                                    required
                                >
                                <button type="button" class="toggle-password" id="togglePassword">
                                    <i class="far fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                            <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                        </div>
                        
                        <button type="submit" class="btn-login">Se connecter</button>
                    </form>
                    
                    <div class="terms">
                        <p>En continuant, vous acceptez les <a href="#">Conditions d'utilisation</a> de Supercar et reconnaissez avoir lu notre <a href="#">Politique de confidentialité</a>.</p>
                    </div>
                    
                    <div class="signup-section">
                        <p><a href="inscription.php" class="signup-link">Vous n'avez psa encore de compte?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script>
        // Toggle pour afficher/masquer le mot de passe
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });
        
        // Simulation de redirection après connexion réussie
        <?php if ($success): ?>
        setTimeout(function() {
            window.location.href = 'tableau-de-bord.php';
        }, 1500);
        <?php endif; ?>
        
        // Animation des cars au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const cars = document.querySelectorAll('.car');
            cars.forEach((car, index) => {
                car.style.opacity = '0';
                car.style.transform = 'scale(0.8) translateY(20px)';
                
                setTimeout(() => {
                    car.style.transition = `opacity 0.6s ${index * 0.1}s ease, transform 0.6s ${index * 0.1}s ease`;
                    car.style.opacity = '1';
                    car.style.transform = 'scale(1) translateY(0)';
                }, 100);
            });
            
            // Animation pour le logo et tagline
            const logo = document.querySelector('.supercar-logo');
            const tagline = document.querySelector('.tagline');
            
            logo.style.opacity = '0';
            logo.style.transform = 'translateY(-20px)';
            tagline.style.opacity = '0';
            tagline.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                logo.style.transition = 'opacity 0.8s 0.5s ease, transform 0.8s 0.5s ease';
                logo.style.opacity = '1';
                logo.style.transform = 'translateY(0)';
                
                tagline.style.transition = 'opacity 0.8s 0.7s ease, transform 0.8s 0.7s ease';
                tagline.style.opacity = '1';
                tagline.style.transform = 'translateY(0)';
            }, 300);
        });
        
        // Effet de survol sur les cars
        document.querySelectorAll('.car').forEach(car => {
            car.addEventListener('mouseenter', function() {
                const overlay = this.querySelector('.car-overlay');
                if (overlay) {
                    overlay.style.transform = 'translateY(0)';
                }
            });
            
            car.addEventListener('mouseleave', function() {
                const overlay = this.querySelector('.car-overlay');
                if (overlay) {
                    overlay.style.transform = 'translateY(100%)';
                }
            });
        });
    </script>
</body>
</html>