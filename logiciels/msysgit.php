<?php
	$titrePage = "Guide d'installation de msysGit";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de msysGit<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#post-installation"><h2>Après l'installation</h2></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>msysGit (abbréviation de <i>Minimal System Git</i>) est un environnement de développement fournissant différents outils permettant de modifier et de compiler le code source du logiciel Git pour Windows (<i>Git for Windows</i>.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Un lien de téléchargement de l'installateur de la plus récente version peut être trouvée tout en bas de <a href="https://msysgit.github.io/">cette page<a>.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable. L'installateur téléchargera lui-même les fichiers nécessaires depuis Git et les installera sur votre ordinateur, dans le dossier de l'utilisateur courant.</p>
    <img alt="Clonage des sources" src="../ressources/images/msysgit/console.png"/>
    <p>Patienter le temps du téléchargement des nombreux fichiers. Lorsque cela sera terminé, l'installateur fabriquera automatiquement les exécutables. Aucune action de l'usager n'est requise.</p>
    <img alt="Construction des fichiers" src="../ressources/images/msysgit/building.png"/>
    <p>Lorsque l'installation sera terminée, une console Bash avec Git s'ouvrira et affichera un message d'accueil. msysGit est prêt à être utilisé.</p>
    <img alt="Installation terminée" src="../ressources/images/msysgit/fini.png"/>

<h3><a name="post-installation">Après l'installation</a></h3>
    <p>Ouvrir git en console Bash. Pour cela, double-cliquer sur le fichier <i>msys.bat</i> qui se trouve dans le dossier <i>msysgit</i>, lui-même dans le dossier de l'utilisateur courant (C:\Users\{Utilisateur}\msysgit\msys.bat). Dans la console qui s'ouvre, entrer la commande suivante:</p>
    <p class="terminal">git status</p>
    <p>Après un délai qui peut varier, la console devrait afficher un message indiquant que toutes les données sont à jour.</p>
    <img alt="Vérification par git status" src="../ressources/images/msysgit/git-status.png"/>
    <p>Si c'est le cas, c'est que l'installation s'est bien déroulée.<p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="https://github.com/msysgit/msysgit">Dépôt git de msysGit</a></li>
        <li><a href="https://git.wiki.kernel.org/index.php/MSysGit:InstallMSysGit">Wiki officiel de Git : Installation de msysGit</li>
        <li><a href="https://msysgit.github.io/">Git pour Windows</a></li>
    </ul>

</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>