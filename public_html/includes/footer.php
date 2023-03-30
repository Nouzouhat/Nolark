<?php
setlocale(LC_ALL, 'fr_FR');
$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_NAME');
$pageActuelle = substr($scriptName, strrpos($scriptName, '/') + 1);

if ($pageActuelle == "index.php") {
    

?> 
<p><?php echo strftime("Page chargée le %A %d %B %Y à %Hh%M"); include'includes/infouser.php' ?></p>

<?php
} else
{ ?>
    <p><?php echo strftime("Page chargée le %A %d %B %Y à %Hh%M"); include'../includes/infouser.php' ?></p>
<?php
}

