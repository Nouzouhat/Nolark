<script>
         window.addEventListener("load", function()  { 
          
          window.document.querySelector("#btn_calculer").addEventListener("click", function() { 
         // Déclaration des constantes
                //(Déclenche une erreur dans NetBeans, ne pas en tenir compte !)
                const fixe = 1100.0;
                
                // Déclaration des variables
                var nbAncien = parseInt(window.document.querySelector("#num_ancien").value);
                var nbS20 =  parseInt(window.document.querySelector("#num_s20").value);
                var nbXS =  parseInt(window.document.querySelector("#num_xspirit").value);
                var nbMulti =  parseInt(window.document.querySelector("#num_multi").value);
                var remuneration = fixe + recupPrimeAnciennete(nbAncien, fixe)
                                   + recupComS20(nbS20) + recupComXS(nbXS)
                                   + recupComMulti(nbMulti);
                           
                           //affichage du résultat
                           window.document.querySelector("#remuneration").inner HTML =
                                                         "La rémunération sera de : " + remuneration + " €";
                                             }, false);
                                         }, false);
                
                
      </script>
  