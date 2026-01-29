<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Supercar</title>
    <link rel="stylesheet" href="style33.css"> 
</head>
<body>

    <header>
        <div class="logo-container">
           <img src="images/supercar_originale-removebg-preview.png" alt="Supercar" class="logo">
           
        </div>
    </header>

    <main>
       <section id="filtres-recherche">
    <h2 align="center">Les voitures</h2>
    <form id="formulaire-filtres">
        
        <div class="filtre-groupe">
            <label for="filtre-marque">Marque :</label>
            <select id="filtre-marque" name="marque">
                <option value="">Toutes</option>
                </select>
        </div>

        <div class="filtre-groupe">
            <label for="filtre-modele">Modèle :</label>
            <input type="text" id="filtre-modele" name="modele" placeholder="Ex: Aventador">
        </div>

        <div class="filtre-groupe">
            <label for="filtre-pays">Pays d'origine :</label>
            <select id="filtre-pays" name="pays_origine">
                <option value="">Tous les pays</option>
                <option value="Italie">Italie</option>
                <option value="Allemagne">Allemagne</option>
                <option value="États-Unis">Chine</option>
                <option value="Japon">Japon</option>
                </select>
        </div>

        <div class="filtre-groupe">
            <label for="filtre-annee">Année de Sortie :</label>
            <input type="number" id="filtre-annee" name="annee" min="1990" max="2025" placeholder="Ex: 2018">
        </div>

        <div class="filtre-groupe">
    <label>Budget (Rs) :</label>
    <div class="budget-inputs">
        <input type="number" id="filtre-prix-min" name="prix_min" placeholder="Min (ex: 100000)" min="0">
        <input type="number" id="filtre-prix-max" name="prix_max" placeholder="Max (ex: 500000)" min="0">
    </div>
</div>
        
        <button type="submit" id="bouton-appliquer" class="btn-primary">Appliquer les Filtres</button>
        <button type="reset" id="bouton-reinitialiser" class="btn-secondary">Réinitialiser</button>
    </form>
</section>
        
        <hr>

        <section id="galerie-supercars">
            <h2>Toutes les Voitures (<span id="compteur-voitures">0</span> résultats)</h2>
            <div id="liste-voitures" class="grille-supercars">
                </div>
        </section>

        <section id="zone-pagination">
            <button id="page-precedente" disabled class="btn-pagination">◀ Précédent</button>
            <span id="statut-pagination">Page 1 de 1</span>
            <button id="page-suivante" disabled class="btn-pagination">Suivant ▶</button>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Supercar Project - Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script> 
</body>
</html>