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
        <!-- Section gauche avec cars Superar -->
    <?php 
        include './gauche.php'; 
    ?>
    
        <!-- Section droite avec formulaire -->
        <div class="right-section">
            <div class="signup-container">
                <div class="signup-header">
                    <h1>Rejoignez Superar</h1>
                    <p>Découvrez des vos voitures</p>
                </div>
                <div class="form-container">
                    <form id="signupForm" action="../traitement/traitement_inscription.php" method="post">
                        <div class="form-group">
                            <label for="email" class="form-label">Adresse email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="votre@email.com" 
                                required
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
                                    placeholder="Créez un mot de passe sécurisé" 
                                    required
                                >
                                <button type="button" class="toggle-password" id="togglePassword">
                                    <i class="far fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                            <div class="password-strength">
                                <div class="strength-meter" id="strengthMeter"></div>
                            </div>
                            <div class="password-hints">
                                <ul>
                                    <li id="lengthHint">Au moins 8 caractères</li>
                                    <li id="uppercaseHint">Une lettre majuscule</li>
                                    <li id="numberHint">Un chiffre</li>
                                    <li id="specialHint">Un caractère spécial</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                            <input 
                                type="password" 
                                id="confirm_password" 
                                name="confirm_password" 
                                class="form-control" 
                                placeholder="Retapez votre mot de passe" 
                                required
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="first_name" class="form-label">Prénom</label>
                            <input 
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                class="form-control" 
                                placeholder="Votre prénom" 
                                required
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name" class="form-label">Nom</label>
                            <input 
                                type="text" 
                                id="last_name" 
                                name="last_name" 
                                class="form-control" 
                                placeholder="Votre nom" 
                                required
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="contact" class="form-label">Contact</label>
                            <input 
                                type="text" 
                                id="contact" 
                                name="contact" 
                                class="form-control" 
                                placeholder="Votre numéro de téléphone" 
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label">Statut</label>
                            <div class="status-options-horizontal">
                                <div class="status-option-horizontal">
                                    <input type="radio" id="status_admin_h" name="status" value="Admin" required>
                                    <label for="status_admin_h" class="status-label-horizontal">
                                        <i class="fas fa-user-shield me-2"></i>
                                        Admin
                                    </label>
                                </div>
                                <div class="status-option-horizontal">
                                    <input type="radio" id="status_client_h" name="status" value="Client" required>
                                    <label for="status_client_h" class="status-label-horizontal">
                                        <i class="fas fa-user me-2"></i>
                                        Client
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="terms-checkbox">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms" class="terms-text">
                                J'accepte les <a href="#">Conditions d'utilisation</a> de Superar et reconnais avoir lu la <a href="#">Politique de confidentialité</a>.
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-login">
                            <i class="fas fa-user-plus me-2"></i> Créer un compte
                        </button>
                    </form>
                    
                    <div class="login-link">
                        Déjà un compte ? <a href="login.php">Se connecter</a>
                    </div>
                    
                    <div class="espace"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script>
       
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
        
       
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthMeter = document.getElementById('strengthMeter');
            const lengthHint = document.getElementById('lengthHint');
            const uppercaseHint = document.getElementById('uppercaseHint');
            const numberHint = document.getElementById('numberHint');
            const specialHint = document.getElementById('specialHint');
            
            let strength = 0;
            let color = '#dc3545';
            
            // Vérifications
            const hasLength = password.length >= 8;
            const hasUppercase = /[A-Z]/.test(password);
            const hasNumber = /\d/.test(password);
            const hasSpecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
            
            // Mise à jour des indications
            lengthHint.classList.toggle('valid', hasLength);
            uppercaseHint.classList.toggle('valid', hasUppercase);
            numberHint.classList.toggle('valid', hasNumber);
            specialHint.classList.toggle('valid', hasSpecial);
            
            // Calcul de la force
            if (hasLength) strength += 25;
            if (hasUppercase) strength += 25;
            if (hasNumber) strength += 25;
            if (hasSpecial) strength += 25;
            
            // Couleur en fonction de la force
            if (strength <= 25) {
                color = '#dc3545';
            } else if (strength <= 50) {
                color = '#ffc107';
            } else if (strength <= 75) {
                color = '#20c997';
            } else {
                color = '#198754';
            }
            
            // Mise à jour de la barre
            strengthMeter.style.width = strength + '%';
            strengthMeter.style.backgroundColor = color;
        });
        
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
            const logo = document.querySelector('.superar-logo');
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
        

        document.getElementById('signupForm').addEventListener('submit', function(e) {
    // 1. On empêche l'envoi immédiat pour faire les vérifications
    e.preventDefault();
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    
    
    if (password !== confirmPassword) {
        alert('Les mots de passe ne correspondent pas.');
        return; // On arrête tout ici
    }
    
    // 3. Si tout est bon, on affiche l'alerte
    alert('Inscription en cours... validation de vos données.');

    // 4. AU LIEU de window.location.href, on utilise submit() !
    // Cela envoie le formulaire proprement vers l'action définie (traitement_inscription.php)
    // avec toutes les données en méthode POST.
    this.submit(); 
});
    </script>
</body>
</html>