<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de LibreOffice<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
	<a href="#test"><h3>Vérification de l'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-telechargement"><h3>Téléchargement</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>LibreOffice est une suite bureautique gratuite et libre de droits.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de LibreOffice nécessite Windows XP ou plus récent (Vista, 7 et 8).</p>
    <p>PC Pentium (Pentium III, Athlon ou supérieur</p>
	<p>256 Mo de mémoire vive (512 Mo sont toutefois recommendés</p>
	<p>1.5 Gb d'espace mémoire</p>
	<p>Résolution de 1024x768 ou mieux avec au moins 256 couleurs</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://fr.libreoffice.org/download/libreOffice-stable/">cette page</a>.</p>
    <p>La version stable la plus récente est la 4.3.7, disponible directement. Nous pouvons aussi choisir une version <i>Évolution</i>(ou <i>Fresh</i> en anglais) qui est destinée aux usagers impatients d'utiliser les nouvelles fonctionnalités. Ce n'est pas notre cas</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Télécharger l'exécutable. On vous offre maintenant de faire un don à la fondation de LibreOffice. Une fois téléchargé, lancer l'exécutable</p>
	<p>Cliquer sur suivant</p>
    <p>Choisir <i>Standard</i> pour une installation standard ou <i>Personnalisée</i> pour une installation personnalisée. La suite de ce guide s'applique a une installation personnalisée. Suivant</p>
    <img alt="Installation standard ou personnalisée" src="../ressources/images/libreOffice/libreOffice1.png"/>
    <p>Si vous voulez, vous pouvez changer le répertoire d'installation en cliquant sur modifier et en choisissant un répertoire. Si vous le désirez, vous pouvez aussi ajouter ou retirer des modules optionnels. Suivant</p>
    <img alt="Changement répertoire" src="../ressources/images/libreOffice/libreOffice2.png"/>
    <p>Vous pouvez maintenant décider si vous désirez que ce soient les programmes de LibreOffice qui démarrent au lieu des programmes Microsoft Office lorsque qu'un fichier Microsoft est démarrer. Suivant</p>
    <img alt="Association de fichiers" src="../ressources/images/libreOffice/libreOffice3.png"/>
    <p>Si vous le désirez, vous pouvez créer un icône dans le bureau et demander à LibreOffice lorsque que l'ordinateur ouvre en cliquant dans le carré correspondant. Le premier est recommandé tandis que le deuxième ne l'est pas car cela peut devenir très fatiguant de devoir fermer LibreOffice à tous les démarrages. Installer</p>
    <img alt="Icone dans bureau" src="../ressources/images/libreOffice/libreOffice4.png"/>
    <p>Finalement, cliquer sur "Terminer" pour finir l'installation</p>
	<img alt="Terminer" src="../ressources/images/libreOffice/libreOffice5.png"/>
	
<h3><a name="test">Vérification de l'installation</a></h3>
	<p>Ouvrir LibreOffice</p>
	<p>Créer un document texte en cliquant sur "Document Writer"</p>
	<img alt="Créer document" src="../ressources/images/libreOffice/test1.png"/>
	<p>Écrire un court message"</p>
	<img alt="Court message" src="../ressources/images/libreOffice/test2.png"/>
	<p>Sauvegarder le fichier"</p>
	<img alt="sauvegarder" src="../ressources/images/libreOffice/test3.png"/>
	<img alt="sauvegarder2" src="../ressources/images/libreOffice/test4.png"/>
	<p>Fermer le fichier. Réouvrir LibreOffice</p>
	<p>Cliquer sur le fichier pour le réouvrir</p>
	<img alt="ouvrir fichier" src="../ressources/images/libreOffice/test5.png"/>
	

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>LibreOffice vient par défaut dans Ubuntu depuis Ubuntu 11.04 (C'est à dire tous les Ubuntu encore supportés)</p>
	
<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://fr.libreoffice.org/">Site officiel de LibreOffice</a></li>
</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>