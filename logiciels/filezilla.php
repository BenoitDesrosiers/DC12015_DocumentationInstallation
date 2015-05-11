<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Filezilla<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-telechargement"><h3>Téléchargement</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Filezilla est un client FTP(File transfer protocol), multi-plateforme rapide et fiable, muni d'un interface utilisateur graphique simple et facile d'utilisation.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de Filezilla nécessite Windows Vista ou plus récent.</p>
    <p>L'installateur contient les versions 32 et 64-bit ainsi que toutes les dépendances nécessaires.</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="https://filezilla-project.org/download.php">cette page</a>.</p>
    <p>La dernière version de Filezilla est la 3.10.3.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable. Une fenêtre apparaîtra, vous pouvez lire les licenses du logiciel et appuyer sur le bouton I Agree</p>
    <img alt="License" src="https://wiki.filezilla-project.org/wiki/images/b/b2/Installer-license.png"/>
    <p>Ensuite l'instalateur vous demande si vous voulez installer Filezilla pour votre session ou toute les usagers de l'ordinateur.</p>
    <img alt="Installation pour toute les usagers." src="https://wiki.filezilla-project.org/wiki/images/a/a9/Me_or_everyone.png"/>
    <p>La fenêtre suivante vous demande quel parti de Filezilla voulez vous installer. Si vous voulez un raccourci sur votre bureau cocher Desktop icon. Cliquer sur Next</p>
    <img alt="Parti de Filezilla" src="https://wiki.filezilla-project.org/wiki/images/b/bc/Installer-components.png"/>
    <p>Choisir l'endroit pour l'instalation du logiciel puis cliquer sur Next.</p>
    <img alt="Endroit d'instalation" src="https://wiki.filezilla-project.org/wiki/images/7/71/Fzsetup4.png"/>
    <p>Sélectionner le nom que vous voulez retrouver Filezilla dans votre explorateur windows puis cliquer sur Next.</p>
    <img alt="Nom dans menu windows" src="https://wiki.filezilla-project.org/wiki/images/0/08/Fzsetup5.png"/>
    <p>Finalement, après une barre de progession Filezilla sera installer. Si vous ne voulez pas utiliser dès maintenant Filezilla, décocher Start Filezilla now.</p>
    <img alt="Fin instalation" src="https://wiki.filezilla-project.org/wiki/images/d/db/Fzsetupf.png"/>
    

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>Pour installer Filezilla sur Linux(tout dépendant de la version de linux utiliser) il est préférable d'utiliser le gestionnaire de packet fourni par votre Linux. </p>
   
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Dans le terminal : sudo apt-get install filezilla </p>
	<p>L'instalation est gérer automatiquement par le Linux par la suite.</p>
	
	<p>Si vous préferez utiliser un lien de téléchargement direct sur le site de Filezilla. </p>
	<p><a href="https://filezilla-project.org/download.php?show_all=1">Téléchargement pour toute les versions de Linux.</a></p>
	
	


<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="https://filezilla-project.org/">Site officiel de Filezilla</a></li>
        <li><a href="http://doc.ubuntu-fr.org/filezilla">GIMP dans la documentation Ubuntu francophone</a></li>
	</ul>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>