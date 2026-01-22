<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperCar - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --sc-green: #4CAF50; 
            --sc-gray: #333333;  
        }

        body { font-family: 'Segoe UI', sans-serif; }

        .navbar { background-color: white; border-bottom: 4px solid var(--sc-green); }
        .nav-link { 
            color: var(--sc-gray) !important; 
            font-weight: 600; 
            text-transform: uppercase;
        }
        .nav-link:hover { color: var(--sc-green) !important; }

        
        .carousel-item {
            height: 500px;
            background-color: var(--sc-gray);
        }
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            opacity: 0.8;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            border-top: 5px solid var(--sc-green);
            padding: 20px;
            bottom: 20%;
        }
        .brand-label {
            color: var(--sc-green);
            font-weight: bold;
            letter-spacing: 2px;
        }

        .footer { background: var(--sc-gray); color: white; padding: 20px 0; }
    </style>
</head>
<body>
<a href="../traitement/deconnexion.php">Se deconnecter</a>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="supercar_originale-removebg-preview.png" alt="SuperCar" height="70">
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacter-nous</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Politiques et confidentialités</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Voiture</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="supercarCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="photo_japon.jpg" alt="Marque Japonaise">
                <div class="carousel-caption">
                    <h5 class="brand-label">PROVENANCE : JAPON</h5>
                    <h2>Découvrez nos modèles Toyota & Honda</h2>
                    <p>Importation directe avec garantie SuperCar.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="photo_allemagne.jpg" alt="Marque Allemande">
                <div class="carousel-caption">
                    <h5 class="brand-label">PROVENANCE : ALLEMAGNE</h5>
                    <h2>Le prestige de BMW & Mercedes-Benz</h2>
                    <p>La performance et le luxe réunis.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="photo_france.jpg" alt="Marque Française">
                <div class="carousel-caption">
                    <h5 class="brand-label">PROVENANCE : FRANCE</h5>
                    <h2>Élégance avec Peugeot & Renault</h2>
                    <p>Le confort idéal pour les routes de l'Île Maurice.</p>
                </div>
            </div>

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#supercarCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#supercarCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container my-5 text-center">
        <h1 style="color: var(--sc-gray)">Bienvenue chez <span style="color: var(--sc-green)">SuperCar</span></h1>
        [cite_start]<p>Votre partenaire de confiance pour l'achat de véhicules neufs depuis 2009[cite: 29].</p>
    </div>

    <footer class="footer text-center">
        [cite_start]<p>© 2025-2027 SuperCar-Web - MCCI Business School[cite: 1, 6].</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>