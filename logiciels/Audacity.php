<?php
	$titrePage = "Guide d'installation d'Audacity";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation d'Audacity<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Audacity est un logiciel gratuit, libre ainsi que multi-plateforme disponible sur Windows, Linux et Mac pour enregistrer et modifier des fichiers audio.</p>

<h2><a name="windows">Windows</a></h2>

	<h3><a name="windows-prealables">Préalables</a></h3>
		<p>L'installation de Audacity nécessite Windows 2000 ou plus récent (XP, Vista, 7 et 8).</p>
		<p>L'installateur contient les versions 32 et 64-bit ainsi que toutes les dépendances nécessaires.</p>

	<h3><a name="windows-telechargement">Téléchargement</a></h3>
		<p>Des liens de téléchargement peuvent être trouvés sur <a href="http://audacity.sourceforge.net/download/">cette page</a>.</p>
		<p>En date du 16 Mars 2015, la version la plus récente est la 2.0.6, disponible directement <a href="http://sourceforge.net/projects/audacity/files/audacity-win-2.0.6.exe">ici</a>. Il est nécessaire d'avoir au moins 22.9MB d'espace libre sur son disque dur pour pouvoir compléter le téléchargement.</p>

	<h3><a name="windows-installation">Procédure d'installation</a></h3>
		<p>Lancer l'exécutable. Une fenêtre apparaîtra, offrant de sélectionner langue utilisée par l'installateur. Sélectionner Français pour la langue.</p>
		<img alt="Sélection de la langue" src="../ressources/images/audacity/etape_0.png"/>
		<p>Une fois la langue sélectionnée, choisir <i>Suivant</i> pour continuer l'installation </p>
		<img alt="Installation standard ou personnalisée" src="../ressources/images/audacity/etape_1.png"/>
		<p>Prendre connaissance de la license, puis cliquer sur <i>Suivant</i>.</p>
		<img alt="Accord de license" src="../ressources/images/audacity/etape_2.png"/>
		<p>Choisir un répertoire pour l'installation à l'aide du bouton <i>parcourir</i>. Laisser par défaut si aucun changement n'est nécessaire, puis cliquer sur <i>Suivant</i>.</p>
		<img alt="Choix du répertoire" src="../ressources/images/audacity/etape_3.png"/>
		<p>Sélectionner la case «Create a Desktop icon» si nécessaire, laisser la case <i>Reset Preferences</i> vide, puis cliquer sur <i>Suivant</i>.</p>
		<img alt="Options d'installation" src="../ressources/images/audacity/etape_4.png"/>
		<p>Prendre connaissance des informations montrées à l'écran, puis confirmer à l'aide du bouton <i>Suivant</i>.</p>
		<img alt="Confirmation d'installation" src="../ressources/images/audacity/etape_5.png"/>
		<p>Patienter pendant l'installation du logiciel.</p>
		<img alt="Installation du logiciel" src="../ressources/images/audacity/etape_6.png"/>
		<p>Prendre connaissance des informations de license affichées, puis cliquer sur <i>Suivant</i>.</p>
		<img alt="Confirmation de license" src="../ressources/images/audacity/etape_7.png"/>
		<p>L'installation est complétée, sélectionner la case <i>Launch Audacity</i> si nécessaire, puis cliquer sur <i>Terminer</i>.</p>
	
	

<h2><a name="linux">Linux</a></h2>

	<h3><a name="linux-prealables">Préalables</a></h3>
		<p>L'idéal est de posséder la dernière distribution de GNU/Linux possible.  De plus, le logiciel nécessite au moins 64mo de RAM et un processeur 300Mhz</p>

	<h3><a name="linux-installation">Procédure d'installation</a></h3>
		<p>Ouvrir un Terminal</p>
		<img alt="Terminal" src="../ressources/images/audacity/etape0.png"/>
		<p>Entrer la ligne suivante: <i>sudo apt-get update</i> puis appuyez sur la touche <i>entrer</i>
		<img alt="Ligne 1" src="../ressources/images/audacity/etape1.png"/>
		<p>Entrer la ligne suivante: <i>sudo apt-get install audacity</i> puis appuyez sur la touche <i>entrer</i>
		<img alt="Ligne 2" src="../ressources/images/audacity/etape2.png"/>
		<p>Patienter pendant le téléchargement et l'installation des paquets</p>
		<img alt="Patience....." src="../ressources/images/audacity/etape3.png"/>
		<p>L'installation est terminée</p>

		<h2><a name="voir-aussi">Voir aussi:</a></h2>
		<ul>
			<li><a href="http://audacity.sourceforge.net/">Site officiel d'Audacity</a></li>
			<li><a href="http://manual.audacityteam.org/o/">Un manuel d'utilisation pour Audacity</a></li>
		</ul>

</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>