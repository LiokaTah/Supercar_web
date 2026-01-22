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
    
    <style>
        :root {
            --sc-green: #4CAF50;
            --sc-green-light: #8BC34A;
            --sc-green-dark: #388E3C;
            --sc-gray: #333333;
            --sc-gray-light: #f5f5f5;
            --sc-gray-medium: #757575;
            --sc-orange: #FF9800;
            --sc-blue: #2196F3;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--sc-gray);
            line-height: 1.6;
        }

        /* Header amélioré */
        .navbar {
            background-color: white;
            border-bottom: 4px solid var(--sc-green);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 10px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 5px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .navbar-brand img {
            height: 80px;
            transition: height 0.3s;
        }

        .navbar.scrolled .navbar-brand img {
            height: 60px;
        }

        .nav-link {
            color: var(--sc-gray) !important;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0 5px;
            padding: 8px 16px !important;
            border-radius: 4px;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link:hover {
            color: var(--sc-green) !important;
            background-color: rgba(76, 175, 80, 0.1);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background-color: var(--sc-green);
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .btn-logout {
            background-color: var(--sc-orange);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-logout:hover {
            background-color: #F57C00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Carousel amélioré */
        .carousel-container {
            position: relative;
            overflow: hidden;
            border-bottom: 5px solid var(--sc-green);
        }

        .carousel-item {
            height: 600px;
            background-color: var(--sc-gray);
        }

        @media (max-width: 768px) {
            .carousel-item {
                height: 400px;
            }
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            transform: scale(1);
            transition: transform 8s ease;
        }

        .carousel-item.active img {
            transform: scale(1.05);
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            border-left: 5px solid var(--sc-green);
            padding: 30px;
            bottom: 15%;
            left: 10%;
            right: 10%;
            border-radius: 8px;
            text-align: left;
            backdrop-filter: blur(5px);
            animation: fadeInUp 0.8s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .brand-label {
            color: var(--sc-green-light);
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: inline-block;
            background: rgba(76, 175, 80, 0.1);
            padding: 5px 15px;
            border-radius: 30px;
        }

        .carousel-caption h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-carousel {
            background-color: var(--sc-green);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: 2px solid var(--sc-green);
        }

        .btn-carousel:hover {
            background-color: transparent;
            color: var(--sc-green);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .carousel-control-prev, .carousel-control-next {
            width: 60px;
            height: 60px;
            background-color: rgba(0,0,0,0.5);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.7;
            transition: all 0.3s;
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 1;
            background-color: var(--sc-green);
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        /* Section Bienvenue améliorée */
        .welcome-section {
            padding: 80px 0;
            background-color: var(--sc-gray-light);
            position: relative;
            overflow: hidden;
        }

        .welcome-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--sc-green), var(--sc-blue));
        }

        .welcome-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .welcome-title span {
            color: var(--sc-green);
            position: relative;
        }

        .welcome-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background-color: rgba(76, 175, 80, 0.2);
            z-index: -1;
        }

        .welcome-text {
            font-size: 1.2rem;
            color: var(--sc-gray-medium);
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .stats-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            min-width: 200px;
            transition: all 0.3s;
            border-top: 4px solid var(--sc-green);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--sc-green);
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--sc-gray-medium);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Services section */
        .services-section {
            padding: 80px 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            color: var(--sc-gray);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--sc-green);
        }

        .service-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
            height: 100%;
            margin-bottom: 30px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(76, 175, 80, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 30px auto 20px;
        }

        .service-icon i {
            font-size: 2rem;
            color: var(--sc-green);
        }

        .service-card .card-title {
            color: var(--sc-gray);
            font-weight: 700;
            text-align: center;
            margin-bottom: 15px;
        }

        .service-card .card-text {
            color: var(--sc-gray-medium);
            text-align: center;
            padding: 0 15px 20px;
        }

        /* Footer amélioré */
        .footer {
            background: var(--sc-gray);
            color: white;
            padding: 60px 0 20px;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--sc-green), var(--sc-blue));
        }

        .footer-logo {
            height: 80px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: white;
            position: relative;
            display: inline-block;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--sc-green);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-links a:hover {
            color: var(--sc-green);
            padding-left: 5px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: var(--sc-green);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Animation pour le défilement */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link" href="voiture.php">Voitures</a></li>
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
                    <img src="supercar_originale-removebg-preview.png" alt="SuperCar" class="footer-logo">
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
                <p>© 2025-2027 SuperCar-Web - MCCI Business School[cite: 1, 6]. Tous droits réservés.</p>
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