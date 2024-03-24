<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Casques routes</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Prénom Nom" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../styles.css" /> 
        <link rel="stylesheet" href="../contact.css" /> 
        
    </head>
 
    <body>
         <header>
           
            <nav style="display: inline; width: 100%;" >
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                  <?php
            include('C:\wamp64\www\Nolark\public_html\includes\header.php');
           ?>   
                </ul>
            </nav>

        </header>
      
        
        
        <section id="formulaire"> 
           
            
            
        <form id="form_contact" name="form_contact" action="http://btssio.bonaparte.free.fr/testforms.php">
            
        <fieldset id="coordo">  
          
            
        <legend>Pour mieux vous connaitre</legend> 
       
        <p> 
            <label for="i_nom">Votre nom :</label>
            <input type="text" name="i_nom" id="i_nom" size="35">
        </p>
        <p> 
            <label for="i_nom">Votre prénom :</label>
            <input type="text" name="i_nom" id="i_prenom" size="35">
        </p>
        
        <p>
            <label for="i_nom">Votre e-mail :</label>  
            <input type="email" name="i_email" id="i_email" size="35"> 
        </p>
        
        <p>
           <label for="i_nom">Votre url :</label> 
           <input type="url" name="i_url" id="i_url" size="35"> 
        </p>
        
        <label for="i_nom">Vous êtes :</label>
        <select name="lst_type client" id="lst_typeclient"> 
            <option value="1">Etudiant</option> 
            <option value="2">Salarié du privé</option> 
            <option value="3">Salarié du public</option> 
            <option value="4">Chef d'entreprise</option> 
            <option value="5">Journaliste</option> 
            <option value="6">Professionnel(le) du casque</option> 
            <option value="99">Autre statut</option> 
        </select> 
     
        
        <p> 
            <label for="i_nom">Date de naissance :</label>
            <input type="number" name="num_jour" id="num_jour" min="1" max="31"/>
            <input type="number" name="num_mois" id="num_mois" min="1" max="12"/>
            <input type="number" name="num_annéé" id="num_annéé" min="1" max="31"/> 
        </p> 
         
        <fieldset id="marques" >
            
            <legend>Vos marques préférés</legend>  
           
            <table> 
                <tr>
                    <td><input type="checkbox" id="agv" name="agv" value="agv"><label for="agv">agv</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> <label for="vehicle1"> airoh</label><br> </td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> arai</label><br></td>
                </tr>
                
                <tr> 
                 <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Bell</label><br></td>
                 <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> bering</label><br></td>
                 <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> bultaco</label><br></td>
                </tr> 
                
                <tr>
                     <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> caberg</label><br></td>
                     <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> cameron</label><br></td> 
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> chaft</label><br></td>
                </tr> 
                
                <tr>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> darts</label><br></td> 
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> dg</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> diesel</label><br></td> 
                </tr> 
                    
                <tr>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> falco</label><br></td> 
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> fox</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> furygan</label><br></td>
                </tr> 
                
                <tr>
                   <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> givi</label><br></td>   
                   <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> gpa</label><br></td> 
                   <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> grex</label><br></td>
                </tr> 
                
                <tr>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> helstons</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> hjc</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> hokkey</label><br></td>
                </tr> 
                
                <tr>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> ica</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> icon</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> ixon</label><br></td>
                </tr>   
                  
                <tr>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> kenny</label><br></td>
                    <td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> knox</label><br></td>
                </tr>
             </table>        
           </fieldset>

        <p> 
        <fieldset> 
           <label for="i_nom">Votre couleur préféré:</label> 
           <input type="color" name="i_color" id="i_color" size="35"> 
        </fieldset>
        </p>
       
        </fieldset> 
           
        <fieldset> 
            
            <legend>Motif du contact</legend>  
            <p><input type="radio" name="rd_motif" value="deminfo" id="rd_deminfo" /> <label for="rd_deminfo">Demande d'information</label></p>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Réclamation</label><br> 
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Satisfation</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Suivi de commande</label><br> 
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Publicité</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> Autre</label><br>
            <p><label for="area_precisions">Si "Autre", veuillez préciser :</label><br /><textarea name="area_precisions" id="area_precisions" cols="35"></textarea>
               
         </fieldset> 
            
            <fieldset> 
                <input type="button" id="btn_Envoyer" value="Envoyer votre demande de contact">
                <input type="button" value="Effacer les réponses">
            </fieldset>
    </form> 
     </section>
     <script src="monCode.js"></script>     
     </body>
</html> 

<footer>
    <?php
    include('C:\wamp64\www\Nolark\public_html\includes\footer.php');
    ?>

  
</footer>
    

        
        
            
      
 
               
                 
                        
                   
                
                     
                    
                  
                
                
                
                
                
                
                 
                
                
                
                
                
                
                
            
    
  