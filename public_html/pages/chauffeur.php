<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Casques routes</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Prénom Nom" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../styles.css" /> 
        <link rel="stylesheet" href="../casques.css" />
    </head>
    <body>
       <header>
           
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                  <?php
            include('C:\wamp64\www\Nolark\public_html\includes\header.php');
           ?>   
                </ul>
            </nav>

        </header>
         <section id="formulaire">
            <h1>Simulateur pour les transporteurs :</h1>
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="recueilinfos">
                    <legend>Vos informations : </legend>
                    <p>
                        <label for="nb_accidents">Nombre d'accidents :</label>
                        <input type="number" name="nb_accidents" id="nb_accidents" min="0" max="9" value="0">
                        
                    </p>
                    
                    <p> 
                        <label for="nb_ancien">Nombre d'années d'ancienneté :</label> 
                        <input type="number" name="nb_ancien" id="nb_ancien" min="0" max="50" value="0">
                    </p>
                    <p>
                        <label for="nb_km">Nombre de kilomètres parcourus :</label>
                        <input type="number" name="nb_km" id="nb_km" min="0" max="999999" value="0">
                    </p>
                </fieldset>
                <p id="controles">
                    <input type="reset" id="btn_annuler" value="Effacer les données">
                </p>
            </form>
        <script src="chauffeur.js"></script> 
         <footer>
            <?php
            include('C:\wamp64\www\Nolark\public_html\includes\footer.php');
         ?>
        </footer>
    </body>
</html>
