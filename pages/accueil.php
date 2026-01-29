<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/fonts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supercar Accueil</title>
    <link rel="stylesheet" href="../assets/css/accueil.css">
</head>
<body>
    <!-- Header avec navigation -->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../image/supercar_originale-removebg-preview.png" alt="SuperCar" height="80">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacter-nous</a></li>
                    <li class="nav-item"><a class="nav-link" href="#policies">Politiques</a></li>
                    <li class="nav-item"><a class="nav-link" href="page_voiture.php">Voitures</a></li>
                    <li class="nav-item ms-3">
                        <a class="btn-logout" href="../traitement/deconnexion.php">
                            <i class="bi bi-box-arrow-right"></i> Se déconnecter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel principal -->
    <div class="carousel-container">
        <div id="supercarCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#supercarCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#supercarCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#supercarCarousel" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <!-- Japon -->
                <div class="carousel-item active">
                    <img src="../image/image.avif" alt="Marque Japonaise">
                    <div class="carousel-caption">
                        <h5 class="brand-label">PROVENANCE : JAPON</h5>
                        <h2>Découvrez nos modèles Toyota & Honda</h2>
                        <p>Importation directe avec garantie SuperCar. Fiabilité et innovation à votre service.</p>
                        <a href="#cars" class="btn-carousel">Voir nos modèles japonais</a>
                    </div>
                </div>

                <!-- Allemagne -->
                <div class="carousel-item">
                    <img src="../image/image.avif" alt="Marque Allemande">
                    <div class="carousel-caption">
                        <h5 class="brand-label">PROVENANCE : ALLEMAGNE</h5>
                        <h2>Le prestige de BMW & Mercedes-Benz</h2>
                        <p>La performance et le luxe réunis. Excellence allemande à votre portée.</p>
                        <a href="#cars" class="btn-carousel">Découvrir les allemandes</a>
                    </div>
                </div>

                <!-- France -->
                <div class="carousel-item">
                    <img src="../image/image.avif" alt="Marque Française">
                    <div class="carousel-caption">
                        <h5 class="brand-label">PROVENANCE : FRANCE</h5>
                        <h2>Élégance avec Peugeot & Renault</h2>
                        <p>Le confort idéal pour les routes de l'Île Maurice. Design et praticité.</p>
                        <a href="#cars" class="btn-carousel">Explorer les françaises</a>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#supercarCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#supercarCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <!-- Section Bienvenue -->
    <section class="welcome-section">
        <div class="container">
            <h1 class="welcome-title text-center fade-in">Bienvenue chez <span>SuperCar</span></h1>
            <p class="welcome-text text-center fade-in">Votre partenaire de confiance pour l'achat de véhicules neufs depuis 2009[cite: 29]. Nous nous engageons à vous offrir les meilleures solutions automobiles adaptées à vos besoins.</p>
            
            <div class="stats-container fade-in">
                <div class="stat-item">
                    <div class="stat-number">14+</div>
                    <div class="stat-label">Années d'expérience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5000+</div>
                    <div class="stat-label">Clients satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Modèles disponibles</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Garantie assurée</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title fade-in">Nos Services</h2>
            
            <div class="row">
                <div class="col-md-4 fade-in" style="animation-delay: 0.1s;">
                    <div class="card service-card">
                        <div class="service-icon">
                            <i class="bi bi-car-front"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Achat de Véhicules Neufs</h5>
                            <p class="card-text">Large sélection de véhicules neufs des meilleures marques mondiales, importés directement pour vous.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 fade-in" style="animation-delay: 0.2s;">
                    <div class="card service-card">
                        <div class="service-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Garantie & Entretien</h5>
                            <p class="card-text">Services après-vente complets avec garantie prolongée et entretien régulier pour votre tranquillité d'esprit.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 fade-in" style="animation-delay: 0.3s;">
                    <div class="card service-card">
                        <div class="service-icon">
                            <i class="bi bi-currency-exchange"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Financement Adapté</h5>
                            <p class="card-text">Solutions de financement sur mesure pour rendre votre projet automobile accessible et abordable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="../image/supercar_originale-removebg-preview.png" alt="SuperCar" class="footer-logo">
                    <p>Votre partenaire automobile de confiance depuis 2009, offrant les meilleurs véhicules neufs avec un service exceptionnel.</p>
                    
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="footer-title">Liens Rapides</h5>
                    <ul class="footer-links">
                        <li><a href="#services">Nos Services</a></li>
                        <li><a href="#cars">Nos Véhicules</a></li>
                        <li><a href="#policies">Politiques de confidentialité</a></li>
                        <li><a href="#contact">Contactez-nous</a></li>
                        <li><a href="../traitement/deconnexion.php">Espace client</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h5 class="footer-title">Contact</h5>
                    <ul class="footer-links">
                        <li><i class="bi bi-geo-alt me-2"></i> Rue John Kennedy, Port-Louis, Île Maurice</li>
                        <li><i class="bi bi-telephone me-2"></i> +230 123 4567</li>
                        <li><i class="bi bi-envelope me-2"></i> contact@supercar.mu</li>
                        <li><i class="bi bi-clock me-2"></i> Lundi - Vendredi: 9h00 - 17h00</li>
                        <li><i class="bi bi-clock me-2"></i> Samedi: 9h00 - 12h00</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>© 2025-2027 SuperCar-Web - MCCI Business School. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Animation de la navbar au scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animation d'apparition des éléments au scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInOnScroll = function() {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        };

        // Initialisation
        window.addEventListener('scroll', fadeInOnScroll);
        fadeInOnScroll(); // Vérifie au chargement
        
        // Animation du zoom sur les images du carousel
        const carouselItems = document.querySelectorAll('.carousel-item');
        carouselItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                const img = this.querySelector('img');
                img.style.transform = 'scale(1.1)';
            });
            
            item.addEventListener('mouseleave', function() {
                const img = this.querySelector('img');
                img.style.transform = 'scale(1.05)';
            });
        });
        
        // Changement automatique du carousel
        let carouselInterval;
        
        function startCarousel() {
            carouselInterval = setInterval(() => {
                const carousel = document.getElementById('supercarCarousel');
                const bsCarousel = new bootstrap.Carousel(carousel);
                bsCarousel.next();
            }, 5000);
        }
        
        function stopCarousel() {
            clearInterval(carouselInterval);
        }
        
        // Démarrer le carousel automatique
        startCarousel();
        
        // Arrêter le carousel au survol
        const carousel = document.getElementById('supercarCarousel');
        carousel.addEventListener('mouseenter', stopCarousel);
        carousel.addEventListener('mouseleave', startCarousel);
    </script>
</body>
</html>