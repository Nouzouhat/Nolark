<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Casques routes</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Prénom Nom" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../styles.css" /> 
        <link rel="stylesheet" href="../contact.css" />
         <link rel="stylesheet" href="../remuneration.css" />
        
    </head>
    <body>
        <header>
           
            <nav style="display: inline; width: 100%;" >
                <ul>
                    
                  <?php
            include('C:\wamp64\www\Nolark\public_html\includes\header.php');
           ?>   
                </ul>
            </nav>

        </header>
        <h1 style="text-align: center; color:red; font-family:guardian egyptian; font-size: 54px;">Simulateur de calcul pour la force de vente :</h1>
           
                
          
                
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="resultats"> 
                    <legend>Vos résultats : </legend>
                    <p>
                        <label for="num_ancien">Nombre d'années d'ancienneté :</label>
                        <input type="number" name="num_ancien" id="num_ancien" min="0" max="50" value="0">
                    </p>
                    
                    <p>
                        <label for="num_s20">Nombre de S 20 vendus :</label> 
                        <input type="number" name="num_s20" id="num_s20" min="0" max="9999" value="0">
                    </p>
                    
                    <p>
                        <label for="num_xs">Nombre de X-Spirit vendus :</label> 
                        <input type="number" name="num_xs" id="num_xs" min="0" max="9999" value="0">
                    </p>
                    
                    <p>
                        <label for="num_multi">Nombre de Multitec vendus :</label> 
                        <input type="number" name="num_multi" id="num_multi" min="0" max="9999" value="0">
                    </p>
                    
                    

                    <h2 id="remuneration"></h2>
                </fieldset>
                
                <input type="button" id="btn_Envoyer" value="Calculer votre rénumération">
               <input type="reset" name="rst_annuler" id="btn_annuler" value="Effacer les données">
                
                
            </form>
            
        </header>
      <script src="remuneration.js"></script> 
       <footer>
            <?php
            include('C:\wamp64\www\Nolark\public_html\includes\footer.php');
         ?>
        </footer>
      
      </body>
      