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
<body>
    
    <div class="main-container">
        
        <?php 
        include './gauche.php'; 
        ?>
        
        <!-- Section droite avec formulaire -->
        <div class="right-section">
            <div class="login-container">
                <div class="login-header">
                    <h1>Bienvenue sur Supercar</h1>
                    <p>Trouvez de votre voiture de rêve</p>
                </div>
                
                <div class="form-container">
                    <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?php 
                if($_GET['error'] == 1) {
                    echo "Mot de passe incorrect.";
                } elseif($_GET['error'] == 2) {
                    echo "Cet email n'existe pas.";
                } else {
                    echo "Une erreur est survenue.";
                }
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
                    <form method="POST" action="../traitement/traitement_connexion.php">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="Email" 
                                required
                                value=""
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
                        <p>En continuant, vous acceptez les <a href="conditions.php">Conditions d'utilisation</a> de Supercar et reconnaissez avoir lu notre <a href="politiques.php">Politique de confidentialité</a>.</p>
                    </div>
                    
                    <div class="login-link">
                        Pas de compte ? <a href="inscription.php">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script>
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