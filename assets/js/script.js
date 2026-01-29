// 1. LES DONNÉES (Ajout de la propriété 'pays' pour correspondre au HTML)
const supercars = [
    { id: 1, marque: 'Suzuki', modele: 'Swift', prix: 507000, pays: 'Japon', annee: 2016, imageUrl: 'https://image-cdn.beforward.jp/large/202503/10340218/BX112503_a0a5ce.jpg'},
    { id: 2, marque: 'Toyota', modele: 'Corolla', prix: 517770, pays: 'Japon', annee: 2013, imageUrl: 'https://elikkia.com/public/uploads/all/B5VGg6sESSmAr5DLQnF8w7Pmr5uAqu01bMu7fvW5.jpg' },
    { id: 4, marque: 'Chevrolet', modele: 'Sonic', prix: 284000, pays: 'Amérique', annee: 2015, imageUrl: 'https://i.gaw.to/vehicles/photos/06/37/063738_2015_chevrolet_Sonic.jpg?1024x640' },
    { id: 5, marque: 'Suzuki', modele: 'Grand Vitara ', prix: 3000000, pays: 'Japon', annee: 2010, imageUrl: 'https://mkt-vehicleimages-prd.autotradercdn.ca/photos/chrome/Expanded/White/2010SUZ002a/2010SUZ002a01.jpg' },
    { id: 6, marque: 'Nissan', modele: 'Tiida', prix: 150000, pays: 'Japon', annee: 2008, imageUrl: 'https://i1.autocango.com/used/0/48319840/new/1_new.webp?x-image-process=image/resize,h_900/imageslim' },
    { id: 7, marque: 'Toyota', modele: 'Yaris', prix: 170000, pays: 'Japon', annee: 2011, imageUrl: 'https://toyotacanada.scene7.com/is/image/toyotacanada/264249_2011_Toyota_Yaris_Sedan_04' },
    { id: 8, marque: 'Nissan', modele: 'Juke', prix: 250000, pays: 'Japon', annee: 2020, imageUrl: 'https://www.largus.fr/images/styles/max_1300x1300/public/images/nissan-juke-2019-11_2.jpg?itok=lpAfgJS5' },
    { id: 9, marque: 'Chevrolet', modele: 'Aveo', prix: 280000, pays: 'Corée du Sud', annee: 2010, imageUrl: 'https://i.gaw.to/vehicles/photos/01/86/018687_2010_Chevrolet_Aveo.jpg?1024x640' },
    { id: 10, marque: 'Toyota', modele: 'Hilux', prix: 2800000, pays: 'Japon', annee: 2015, imageUrl: 'https://occasion.automobile.tn/2020/08/52618_0pdrzg51p2pstcy6vw62ovubb_max.jpg' },
     { id: 11, marque: 'Nissan', modele: 'Qashqai', prix: 300000, pays: 'États-Unis', annee: 2009, imageUrl: 'https://images.caradisiac.com/logos-ref/modele/modele--nissan-qashqai/S6-modele--nissan-qashqai.jpg' },
     { id: 12, marque: 'Chevrolet', modele: 'Cruze', prix: 180000, pays: 'Japon', annee: 2017, imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNASo_DxjBJh1lmwhedNPotvwJmzg2CdcOzw&s' },
     { id: 13, marque: 'Suzuki', modele: 'XL7', prix: 500000, pays: 'Japon', annee: 2009, imageUrl: 'https://images.autoboom.co.il/2uNW8ZNlt2T8pjFd22JeGnEf2tvLyLkUsP4PE0D2M20/fit/1800/1800/sm/0/Z3M6Ly9hdXRvYm9vbS1pbWFnZXMvMDAwLzAwMC8xNTgvMTU4NTc2LmpwZw.webp' },
    


         // je v encore ajouter d'autre (vs inquietez pas hihi);
    { id: 14, marque: 'Nissan', modele: 'Altima', prix: 195000, pays: 'Japon', annee: 2011, imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_qcekfF8yTV5JowhHgotWsNSykoJzKl9p4g&s' },
    { id: 15, marque: 'Suzuki', modele: 'Jimny', prix: 110000, pays: 'Etats Unis', annee: 2002, imageUrl: 'https://assets.carandclassic.com/uploads/cars/suzuki/C1872948/2002-suzuki-jimny-13-jlx-82-680f47a88e2ed.jpg?fit=fillmax&h=800&ixlib=php-4.1.0&q=85&w=800&s=d41e4aad0da8745e8721ac4d2b8c2f76' },
    { id: 16, marque: 'Toyota', modele: 'RAV4', prix: 225000, pays: 'Japon', annee: 2009, imageUrl: 'https://i.gaw.to/vehicles/photos/01/12/011234_2009_Toyota_Sienna.jpg?1024x640https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdMa-4O_2-6pKcIxZuxNIXbVFmeIyPnfgeqw&s' },
    { id: 17, marque: 'Nissan', modele: 'Armada', prix: 300000, pays: 'Japon', annee: 2011, imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEtLztjEbOdZfz1_A5fgzXIHxLJ8FPrHj3-w&s' },
    { id: 18, marque: 'Nissan', modele: 'Altima', prix: 195000, pays: 'Japon', annee: 2011, imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_qcekfF8yTV5JowhHgotWsNSykoJzKl9p4g&s' },
    { id: 19, marque: 'Suzuki', modele: 'Jimny', prix: 110000, pays: 'Etats Unis', annee: 2002, imageUrl: 'https://assets.carandclassic.com/uploads/cars/suzuki/C1872948/2002-suzuki-jimny-13-jlx-82-680f47a88e2ed.jpg?fit=fillmax&h=800&ixlib=php-4.1.0&q=85&w=800&s=d41e4aad0da8745e8721ac4d2b8c2f76' },
    { id: 20, marque: 'Toyota', modele: 'RAV4', prix: 225000, pays: 'Japon', annee: 2009, imageUrl: 'https://i.gaw.to/vehicles/photos/01/12/011234_2009_Toyota_Sienna.jpg?1024x640https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdMa-4O_2-6pKcIxZuxNIXbVFmeIyPnfgeqw&s' },
    { id: 21, marque: 'Nissan', modele: 'Armada', prix: 300000, pays: 'Japon', annee: 2011, imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEtLztjEbOdZfz1_A5fgzXIHxLJ8FPrHj3-w&s' },
];


const voituresParPage = 4; 
let pageActuelle = 1;
let voituresFiltrees = [...supercars];  


function creerCarteVoiture(voiture) {
    return `
        <div class="supercar-card">
            <img src="${voiture.imageUrl || 'images/placeholder.jpg'}" alt="${voiture.marque} ${voiture.modele}">
            <div class="card-details">
                <h3>${voiture.marque} ${voiture.modele}</h3>
                <p><strong>Pays:</strong> ${voiture.pays}</p>
                <p><strong>Année:</strong> ${voiture.annee}</p>
                <p class="prix">${voiture.prix.toLocaleString('fr-FR')} Rs</p>
            </div>
        </div>
    `;
}
function creerCarteVoiture(voiture) {
    return `
        <div class="supercar-card">
            <img src="${voiture.imageUrl || 'images/placeholder.jpg'}" alt="${voiture.marque} ${voiture.modele}">
            <div class="card-details">
                <h3>${voiture.marque} ${voiture.modele}</h3>
                <p><strong>Pays:</strong> ${voiture.pays || 'N/A'}</p>
                <p><strong>Année:</strong> ${voiture.annee}</p>
                <p class="prix">${voiture.prix.toLocaleString('fr-FR')} Rs</p>
                
                <div class="actions-achat">
                    <button onclick="acheterVoiture('${voiture.marque} ${voiture.modele}')" class="btn-acheter">
                        Acheter
                    </button>
                    <button onclick="reserverEssai('${voiture.marque} ${voiture.modele}')" class="btn-reserver">
                        Réserver
                    </button>
                </div>
            </div>
        </div>
    `;
}

// Fonctions pour gérer les clics
function acheterVoiture(nom) {
    alert(`Félicitations ! Votre demande d'achat pour la ${nom} a été envoyée. Notre service financier vous contactera sous 24h.`);
}

function reserverEssai(nom) {
    alert(`Réservation confirmée pour la ${nom}. Un conseiller vous appellera pour fixer l'heure de votre essai.`);
}

function afficherVoitures(voitures) {
    const listeVoitures = document.getElementById('liste-voitures');
    const indexDebut = (pageActuelle - 1) * voituresParPage;
    const indexFin = indexDebut + voituresParPage;
    const voituresPourAfficher = voitures.slice(indexDebut, indexFin);

    listeVoitures.innerHTML = voituresPourAfficher.map(creerCarteVoiture).join('');
    document.getElementById('compteur-voitures').textContent = voitures.length;

    mettreAJourPagination(voitures.length);
}

// 3. LOGIQUE DE FILTRAGE
function appliquerFiltres() {
    const form = document.getElementById('formulaire-filtres');
    
    // CORRECTION ICI : Utilisation des bons 'name' du HTML
    const marque = form.elements['marque'].value;
    const modele = form.elements['modele'].value.toLowerCase().trim();
    const pays = form.elements['pays_origine'].value; 
    const anneeMin = parseInt(form.elements['annee'].value) || 0; 
    const prixMax = parseInt(form.elements['prix_max'].value) || 50000000;

    voituresFiltrees = supercars.filter(voiture => {
        if (marque && voiture.marque !== marque) return false;
        if (modele && !voiture.modele.toLowerCase().includes(modele)) return false;
        if (pays && voiture.pays !== pays) return false;
        if (anneeMin && voiture.annee < anneeMin) return false;
        if (voiture.prix > prixMax) return false;
        return true;
    });

    pageActuelle = 1; 
    afficherVoitures(voituresFiltrees);
}

// 4. PAGINATION
function mettreAJourPagination(nombreTotalVoitures) {
    const totalPages = Math.ceil(nombreTotalVoitures / voituresParPage) || 1;
    const btnPrecedent = document.getElementById('page-precedente');
    const btnSuivant = document.getElementById('page-suivante');
    const statut = document.getElementById('statut-pagination');

    statut.textContent = `Page ${pageActuelle} de ${totalPages}`;
    btnPrecedent.disabled = pageActuelle === 1;
    btnSuivant.disabled = pageActuelle === totalPages;
}

// 5. INITIALISATION
document.addEventListener('DOMContentLoaded', () => {
    
    // Remplissage dynamique des marques
    const marquesUniques = [...new Set(supercars.map(v => v.marque))].sort();
    const selectMarque = document.getElementById('filtre-marque');
    marquesUniques.forEach(marque => {
        const option = document.createElement('option');
        option.value = marque;
        option.textContent = marque;
        selectMarque.appendChild(option);
    });

    // Événement Submit
    document.getElementById('formulaire-filtres').addEventListener('submit', function(e) {
        e.preventDefault(); 
        appliquerFiltres();
    });

    // Événement Reset
    document.getElementById('bouton-reinitialiser').addEventListener('click', () => {
        setTimeout(() => {
            document.getElementById('prix-affichage').textContent = '50 000 000 Rs';
            appliquerFiltres();
        }, 10);
    });

    // Range Slider Prix
    const prixRange = document.getElementById('filtre-prix-max');
    const prixAffichage = document.getElementById('prix-affichage');
    prixRange.addEventListener('input', () => {
        prixAffichage.textContent = parseInt(prixRange.value).toLocaleString('fr-FR') + ' Rs';
    });

    // Boutons de navigation
    document.getElementById('page-precedente').addEventListener('click', () => {
        if (pageActuelle > 1) {
            pageActuelle--;
            afficherVoitures(voituresFiltrees);
            window.scrollTo(0, 0);
        }
    });

    document.getElementById('page-suivante').addEventListener('click', () => {
        const totalPages = Math.ceil(voituresFiltrees.length / voituresParPage);
        if (pageActuelle < totalPages) {
            pageActuelle++;
            afficherVoitures(voituresFiltrees);
            window.scrollTo(0, 0);
        }
    });

    afficherVoitures(supercars);
});