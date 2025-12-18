const supercars = [
    { id: 1, marque: 'Ferrari', modele: 'SF90 Stradale', prix: 507000, annee: 2020, imageUrl: 'https://news.dupontregistry.com/wp-content/uploads/2025/04/download-2025-07-24T144813.052.jpeg' },
    { id: 2, marque: 'Lamborghini', modele: 'Aventador SVJ', prix: 517770, annee: 2018, imageUrl: 'https://www.asphalte.ch/news/wp-content/uploads/2019/03/Lamborghini-Aventador-SVJ-Roadster-750.jpg' },
    { id: 3, marque: 'Porsche', modele: '911 Turbo S', prix: 207000,  annee: 2021, imageUrl: 'https://static.moniteurautomobile.be/imgcontrol/images_tmp/clients/moniteur/c1440-d720/content/medias/images/news/44000/300/10/911_turbos_2002_16_9_1024x576_a3_rgb.jpg' },
    { id: 4, marque: 'BMW', modele: 'M8 Competition', prix: 284000,  annee: 2017, imageUrl: 'https://motorsactu.com/wp-content/uploads/2022/01/Nouvelles-BMW-M8-Competition-2022-6.jpg' },
    { id: 5, marque: 'Toyota', modele: 'Supra', prix: 3000000, annee: 2016, imageUrl: 'images/chiron.jpg' },
    { id: 6, marque: 'Lamborghini', modele: 'Urus', prix: 150000,  annee: 2018, imageUrl: 'images/vantage.jpg' },
    { id: 7, marque: 'Toyota', modele: 'GR Corolla', prix: 170000,  annee: 2017, imageUrl: 'images/amg_gtr.jpg' },
    // AJOUTEZ PLUS DE VOITURES ICI (Exemples pour la pagination)
    { id: 8, marque: 'BMW', modele: 'Z4 M40i', prix: 250000, annee: 2019, imageUrl: 'images/huracan.jpg' },
    { id: 9, marque: 'Ferrari', modele: 'F8 Tributo', prix: 280000,  annee: 2019, imageUrl: 'images/f8.jpg' },
    { id: 10, marque: 'Ford', modele: 'Raptor T6', prix: 2800000,  annee: 2021, imageUrl: 'images/jesko.jphttps://lignonautomobiles.com/wp-content/uploads/2024/07/20240822_073823-scaled.jpg' },
];


const voituresParPage = 6; 
let pageActuelle = 1;
let voituresFiltrees = supercars;

function creerCarteVoiture(voiture) {
    return `
        <div class="supercar-card">
            <img src="${voiture.imageUrl || 'images/placeholder.jpg'}" alt="${voiture.marque} ${voiture.modele}">
            <div class="card-details">
                <h3>${voiture.marque} ${voiture.modele}</h3>

                <p><strong>Année:</strong> ${voiture.annee}</p>
                <p class="prix">${voiture.prix.toLocaleString('fr-FR')} $</p>
            </div>
        </div>
    `;
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


function appliquerFiltres() {
    const form = document.getElementById('formulaire-filtres');
    const marque = form.elements['marque'].value;
    const modele = form.elements['modele'].value.toLowerCase().trim();
    const categorie = form.elements['categorie'].value;
    const annee = parseInt(form.elements['annee'].value) || 0; 
    const prixMax = parseInt(form.elements['prix'].value) || 5000000;

    voituresFiltrees = supercars.filter(voiture => {
        if (marque && voiture.marque !== marque) {
            return false;
        }
        
        if (modele && !voiture.modele.toLowerCase().includes(modele)) {
            return false;
        }
        
        if (annee && voiture.annee < annee) {
            return false;
        }
        if (voiture.prix > prixMax) {
            return false;
        }

        return true;
    });

    pageActuelle = 1; 
    afficherVoitures(voituresFiltrees);
}


function mettreAJourPagination(nombreTotalVoitures) {
    const totalPages = Math.ceil(nombreTotalVoitures / voituresParPage);
    const btnPrecedent = document.getElementById('page-precedente');
    const btnSuivant = document.getElementById('page-suivante');
    const statut = document.getElementById('statut-pagination');

    statut.textContent = `Page ${pageActuelle} de ${totalPages || 1}`;
    

    btnPrecedent.disabled = pageActuelle === 1;
    btnSuivant.disabled = pageActuelle === totalPages || totalPages === 0;
}


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



document.addEventListener('DOMContentLoaded', () => {
    
    const marquesUniques = [...new Set(supercars.map(v => v.marque))];
    const selectMarque = document.getElementById('filtre-marque');
    marquesUniques.forEach(marque => {
        const option = document.createElement('option');
        option.value = marque;
        option.textContent = marque;
        selectMarque.appendChild(option);
    });

    
    document.getElementById('formulaire-filtres').addEventListener('submit', function(e) {
        e.preventDefault(); e
        appliquerFiltres();
    });

   
    document.getElementById('bouton-reinitialiser').addEventListener('click', () => {
        document.getElementById('formulaire-filtres').reset();
      
        document.getElementById('prix-affichage').textContent = '5,000,000 $';
        appliquerFiltres(); 
    });
    
   
    const prixRange = document.getElementById('filtre-prix-max');
    const prixAffichage = document.getElementById('prix-affichage');
    prixRange.addEventListener('input', () => {
     
        prixAffichage.textContent = parseInt(prixRange.value).toLocaleString('fr-FR') + ' $';
    });


   
    afficherVoitures(supercars);
});