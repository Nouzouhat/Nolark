/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

// Fonction retournant la valeur fixe pour la rémunération
function EvaluerFixe() {
    // Déclaration des constantes
    const fixe = 1100;
    const premPalierAnciennete = 5;
    const secPalierAnciennete = 10;
    const multiPremPalier = 1.03;
    const multiSecPalier = 1.06;
    const anciennete = parseInt(window.document.querySelector("#num_ancien").value);

    // Variable qui contiendra la valeur fixe prenant en compte tous les facteurs 
    var total = fixe;

    // Evaluation de la valeur fixe de rémunération
    if (anciennete >= premPalierAnciennete && anciennete < secPalierAnciennete) {
        total = fixe * multiPremPalier;
    } else if (anciennete >= secPalierAnciennete) {
        total = fixe * multiSecPalier;
    }

    // Retourne la valeur du fixe
    return total;
}

// Fonction qui va évaluer le prix des casques 
function EvaluerComCasques() {
    // Variable qui contiendra la rémunération totale liée aux ventes de casques
    var total = EvaluerComXSpirit() + EvaluerComMultitec() + EvaluerComS20();

    // Retourne la rémunération liée aux casques
    return total;
}

// Fonction qui va évaluer la com concernant les casques XSpirit
function EvaluerComXSpirit() {
    // Prix du casque et récupération du nombre de ventes ainsi que le taux de com
    const prixXSpirit = 350;
    const nbVendus = parseInt(window.document.querySelector("#num_xspirit").value);
    const tauxCom = 0.06;
    const nbVentesPourCom = 50;

    var com = 0;

    // Si assez de casques ont été vendus on applique la com
    if (nbVendus >= nbVentesPourCom) {
        // Calcul de la com
        for (var i = nbVentesPourCom; i < nbVendus; i++) {
            com += prixXSpirit * tauxCom;
        }
    }
    // Retourne la com
    return com;
}

// Fonction qui va évaluer la com concernant les casques Multitec 
function EvaluerComMultitec() {
    // Prix du casque et récupération du nombre de ventes
    const prixMultitec = 180;
    const nbVendus = parseInt(window.document.querySelector("#num_multi").value);
    const nbVentesPalier1 = 20;
    const nbVentesPalier2 = 50;
    const tauxComPalier1 = 0.04;
    const tauxComPalier2 = 0.06;
    const tauxComPalier3 = 0.10;

    var com = 0;

    // Calcul de la com

    // Calcul par rapport au premier palier
    if (nbVendus <= nbVentesPalier1) {
        for (var i = 0; i < nbVendus; i++) {
            com += prixMultitec * tauxComPalier1;
        }
    } else {
        for (var i = 0; i < nbVentesPalier1; i++) {
            com += prixMultitec * tauxComPalier1;
        }
    }

    // Calcul par rapport au second palier
    if (nbVendus > nbVentesPalier1 && nbVendus <= nbVentesPalier2) {
        for (var i = nbVentesPalier1; i < nbVendus; i++) {
            com += prixMultitec * tauxComPalier2;
        }
    } else if (nbVendus > nbVentesPalier2) {
        for (var i = 0; i < nbVentesPalier2 - nbVentesPalier1; i++) {
            com += prixMultitec * tauxComPalier2;
        }
        for (var i = 0; i < nbVendus - nbVentesPalier2; i++) {
            com += prixMultitec * tauxComPalier3;
        }
    }

    // On retourne la com
    return com;
}

// Fonction qui va évaluer la com concernant les casques S20
function EvaluerComS20() {
    // Prix du casque et récupération du nombre de ventes ainsi que le taux de com
    const prixS20 = 140;
    const nbVendus = parseInt(window.document.querySelector("#num_s20").value);
    const tauxCom = 0.02;

    var com = 0;

    // Calcul de la com
    for (var i = 0; i < nbVendus; i++) {
        com += prixS20 * tauxCom;
    }

    // Retourne la com
    return com;
}

function EvaluerKilometres() {
    // Déclaration des constantes
    const tauxIndemnite = 0.15;
    const plafond = 350;
    
    // Récupération du nb de kilometres
    var indemnite = window.document.querySelector("#i_kilometres").value * tauxIndemnite;
    
    // On évalue l'indemnité par rapport au plafond
    if(indemnite<=plafond){
        return indemnite;
    } else {
        return plafond;
    }
}

// Evènement correspondant à un click sur le bouton "estimer"
window.addEventListener("load", function () {
    window.document.querySelector("#btn_calculer").addEventListener("click", function () {
        // Récupération de la rémunération fixe et de celle liée aux ventes de casques
        const fixe = EvaluerFixe();
        const prixCasques = EvaluerComCasques();
        const indemnKilometrique = EvaluerKilometres();

        // Calcul de l'estimation
        const estimation = fixe + prixCasques + indemnKilometrique;

        // Affichage dans le html de l'estimation
        window.document.querySelector("#nihal").innerHTML = estimation.toFixed(2) +" €";
    }, false);
}, false);
