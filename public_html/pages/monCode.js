            window.addEventListener("load", function() {
            window.document.querySelector("#btn_Envoyer").addEventListener("click", function() {
                  if (window.document.querySelector("#i_nom").value==="" &&
                      window.document.querySelector("#i_prenom").value==="") { 
                  alert("Le nom ou le prénom doivent être remplis");
                  }
                  else if (window.document.querySelector("#i_email").value === "") {
                       alert("l'email doit être rempli");
                   } 
                   
                   else {
                       var question = "souhaitez-vous réellement utiliser l'adresse suivante : "
                                      + window.document.querySelector("#i_email").value;
                              if (confirm(question)) {  
                      window.document.querySelector("#form_contact").submit();
                  }
                   }
              }, false);
          }, false);
          
          
          
          
          