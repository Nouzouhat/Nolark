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
            <h1>Simulateur avant les vacances d'avril :</h1>
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="simulation">
                    <legend>Votre simulation : </legend>
                    <p><label for="num_poids">Votre poids :</label> <input type="number" name="num_poids" id="num_poids" min="0" max="200" value="0" /></p>
                    <fieldset id="sexe">
                        <legend>Votre sexe : </legend> 
                        <p>
                            <input type="radio" name="rd_sexe" value="homme" id="rd_sexehomme" checked="checked" />
                            <label for="rd_sexehomme">Homme</label>
                        </p>
                        
                        <p>
                            <input type="radio" name="rd_sexe" value="femme" id="rd_sexefemme" />
                            <label for="rd_sexefemme">Femme</label>
                        </p>
                    </fieldset>
                    <p>
                        <label for="num_verre">Nombre de verres bus :</label>
                        <input type="number" name="num_verre" id="num_verre" min="0" max="25" value="0" />
                    </p>
                </fieldset>
                
                <p id="controles"><input type="reset" name="rst_annuler" id="btn_annuler" value="Effacer les données"></p>
                
            </form> 
        </section> 
        
        <script src="publique.js"></script>
         <footer>
            <?php
            include('C:\wamp64\www\Nolark\public_html\includes\footer.php');
         ?>
        </footer>
    </body>
</html>
