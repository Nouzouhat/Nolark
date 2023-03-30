<?php

$pages = array("route.php", "cross.php", "piste.php", "enfants.php","nous-contacter.php","team.php","simulateur.php","chauffeur.php","publique.php");
$noms = array('Route', 'Cross', 'Piste', 'Enfants', 'Nous contacter','Team','Simulateur',"Chauffeur","Publique");
$nbLiens = count($pages); 
for ($i=0; $i < $nbLiens; $i++) {
echo '<li style="margin:2px;"><a href="../pages/', $pages[$i], '">', $noms[$i], '</a></li>';
}
