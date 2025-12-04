// 1. LES DONNÉES (Votre base de données de supercars)
const supercars = [
    { id: 1, marque: 'Ferrari', modele: 'SF90 Stradale', prix: 507000, categorie: 'Hypercar', annee: 2020, imageUrl: 'images/sf90.jpg' },
    { id: 2, marque: 'Lamborghini', modele: 'Aventador SVJ', prix: 517770, categorie: 'Hypercar', annee: 2018, imageUrl: 'images/aventador.jpg' },
    { id: 3, marque: 'Porsche', modele: '911 Turbo S', prix: 207000, categorie: 'Sportive', annee: 2021, imageUrl: 'images/911.jpg' },
    { id: 4, marque: 'McLaren', modele: '720S', prix: 284000, categorie: 'Sportive', annee: 2017, imageUrl: 'images/720s.jpg' },
    { id: 5, marque: 'Bugatti', modele: 'Chiron', prix: 3000000, categorie: 'Hypercar', annee: 2016, imageUrl: 'images/chiron.jpg' },
    { id: 6, marque: 'Aston Martin', modele: 'Vantage', prix: 150000, categorie: 'Grand Tourisme', annee: 2018, imageUrl: 'images/vantage.jpg' },
    { id: 7, marque: 'Mercedes-AMG', modele: 'GT R', prix: 170000, categorie: 'Sportive', annee: 2017, imageUrl: 'images/amg_gtr.jpg' },
    // AJOUTEZ PLUS DE VOITURES ICI (Exemples pour la pagination)
    { id: 8, marque: 'Lamborghini', modele: 'Huracan Evo', prix: 250000, categorie: 'Sportive', annee: 2019, imageUrl: 'images/huracan.jpg' },
    { id: 9, marque: 'Ferrari', modele: 'F8 Tributo', prix: 280000, categorie: 'Sportive', annee: 2019, imageUrl: 'images/f8.jpg' },
    { id: 10, marque: 'Koenigsegg', modele: 'Jesko', prix: 2800000, categorie: 'Hypercar', annee: 2021, imageUrl: 'images/jesko.jpg' },
];

// 2. CONFIGURATION DE LA PAGINATION
const voituresParPage = 6; // Nombre de voitures à afficher par page
let pageActuelle = 1;
let voituresFiltrees = supercars;

// 3. FONCTIONS UTILITAIRES

// Crée et retourne le HTML pour une seule carte de supercar
function creerCarteVoiture(voiture) {
    return `
        <div class="supercar-card">
            <img src="${voiture.imageUrl || 'images/placeholder.jpg'}" alt="${voiture.marque} ${voiture.modele}">
            <div class="card-details">
                <h3>${voiture.marque} ${voiture.modele}</h3>
                <p><strong>Catégorie:</strong> ${voiture.categorie}</p>
                <p><strong>Année:</strong> ${voiture.annee}</p>
                <p class="prix">${voiture.prix.toLocaleString('fr-FR')} $</p>
            </div>
        </div>
    `;
}

// Met à jour la galerie avec les voitures de la page actuelle
function afficherVoitures(voitures) {
    const listeVoitures = document.getElementById('liste-voitures');
    const indexDebut = (pageActuelle - 1) * voituresParPage;
    const indexFin = indexDebut + voituresParPage;
    const voituresPourAfficher = voitures.slice(indexDebut, indexFin);

    // Vider la galerie et insérer le nouveau HTML
    listeVoitures.innerHTML = voituresPourAfficher.map(creerCarteVoiture).join('');

    // Mettre à jour le compteur de résultats
    document.getElementById('compteur-voitures').textContent = voitures.length;

    // Mettre à jour la pagination
    mettreAJourPagination(voitures.length);
}


// 4. LOGIQUE DE FILTRAGE
function appliquerFiltres() {
    const form = document.getElementById('formulaire-filtres');
    const marque = form.elements['marque'].value;
    const modele = form.elements['modele'].value.toLowerCase().trim();
    const categorie = form.elements['categorie'].value;
    // Utilisation d'un ternaire pour assurer que la valeur est 0 si vide ou non valide
    const annee = parseInt(form.elements['annee'].value) || 0; 
    const prixMax = parseInt(form.elements['prix'].value) || 5000000;

    voituresFiltrees = supercars.filter(voiture => {
        // Filtre Marque
        if (marque && voiture.marque !== marque) {
            return false;
        }
        
        // Filtre Modèle (recherche partielle)
        if (modele && !voiture.modele.toLowerCase().includes(modele)) {
            return false;
        }
        
        // Filtre Catégorie
        if (categorie && voiture.categorie !== categorie) {
            return false;
        }

        // Filtre Année (min)
        if (annee && voiture.annee < annee) {
            return false;
        }

        // Filtre Prix (max)
        if (voiture.prix > prixMax) {
            return false;
        }

        return true;
    });

    pageActuelle = 1; // Toujours revenir à la première page après un filtrage
    afficherVoitures(voituresFiltrees);
}

// 5. GESTION DE LA PAGINATION
function mettreAJourPagination(nombreTotalVoitures) {
    const totalPages = Math.ceil(nombreTotalVoitures / voituresParPage);
    const btnPrecedent = document.getElementById('page-precedente');
    const btnSuivant = document.getElementById('page-suivante');
    const statut = document.getElementById('statut-pagination');

    statut.textContent = `Page ${pageActuelle} de ${totalPages || 1}`;
    
    // Désactiver/Activer les boutons
    btnPrecedent.disabled = pageActuelle === 1;
    btnSuivant.disabled = pageActuelle === totalPages || totalPages === 0;
}

// Écouteurs d'événements pour la pagination
document.getElementById('page-precedente').addEventListener('click', () => {
    if (pageActuelle > 1) {
        pageActuelle--;
        afficherVoitures(voituresFiltrees);
        window.scrollTo(0, 0); // Remonter en haut de la page
    }
});

document.getElementById('page-suivante').addEventListener('click', () => {
    const totalPages = Math.ceil(voituresFiltrees.length / voituresParPage);
    if (pageActuelle < totalPages) {
        pageActuelle++;
        afficherVoitures(voituresFiltrees);
        window.scrollTo(0, 0); // Remonter en haut de la page
    }
});

// 6. INITIALISATION ET ÉVÉNEMENTS

document.addEventListener('DOMContentLoaded', () => {
    // Remplir les options de filtre 'Marque' dynamiquement
    const marquesUniques = [...new Set(supercars.map(v => v.marque))];
    const selectMarque = document.getElementById('filtre-marque');
    marquesUniques.forEach(marque => {
        const option = document.createElement('option');
        option.value = marque;
        option.textContent = marque;
        selectMarque.appendChild(option);
    });

    // Écouteur pour le formulaire de filtre
    document.getElementById('formulaire-filtres').addEventListener('submit', function(e) {
        e.preventDefault(); // Empêcher le rechargement de la page
        appliquerFiltres();
    });

    // Écouteur pour la réinitialisation des filtres
    document.getElementById('bouton-reinitialiser').addEventListener('click', () => {
        document.getElementById('formulaire-filtres').reset();
        // Mise à jour de l'affichage du prix après reset
        document.getElementById('prix-affichage').textContent = '5,000,000 $';
        appliquerFiltres(); // Appliquer les filtres réinitialisés
    });
    
    // Gestion de l'affichage du prix max (range slider)
    const prixRange = document.getElementById('filtre-prix-max');
    const prixAffichage = document.getElementById('prix-affichage');
    prixRange.addEventListener('input', () => {
        // Mise à jour de l'affichage du prix avec formatage
        prixAffichage.textContent = parseInt(prixRange.value).toLocaleString('fr-FR') + ' $';
    });


    // Afficher la première page de voitures au chargement
    afficherVoitures(supercars);
});