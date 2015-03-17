<?php
	$titrePage = "Guide d'installation d'Avs4You Video Editor";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation d'Avs4You Video Editor<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Suite de logiciels payante permettant de créer et de modifier des images, des vidéos ainsi que des fichiers audios. Pendant les cours, nous nous concentrerons sur celui-ci: AvsVideo Editor</p>

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
    <p>GIMP vient de base avec plusieurs distributions Linux. Dans ce cas, il n'est pas nécessaire de l'installer. Ce n'est pas le cas d'Ubuntu, qui a cessé de l'inclure au printemps 2010.</p>
    <p>Les packets suivants sont nécessaires au fonctionnement de GIMP:</p>
    <ul>
        <li>gimp-data</li>
        <li>libbabl</li>
        <li>libgegl</li>
        <li>libgimp2</li>
        <li>libilmbase6</li>
        <li>libmng1</li>
        <li>libopenexr6</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>La façon propre d'installer GIMP est de passer par le gestionnaire de paquets de sa distribution.</p>
    <p>Dans le cas d'Ubuntu, on peut passer par la Logithèque Ubuntu ou par un terminal.</p>
    <p>Logithèque Ubuntu: ...<p>
    <p>Terminal: ...<p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="www.gimp.org/">Site officiel de GIMP</a></li>
        <li><a href="http://doc.ubuntu-fr.org/gimp">GIMP dans la documentation Ubuntu francophone</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>