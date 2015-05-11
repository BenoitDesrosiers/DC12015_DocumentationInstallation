<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de GIMP<h1>

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
    <p>SQLiteStudio est une interface graphique au système de gestionaire de base de données SQLite</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>l'interpréteur Java est recomander pour avoir des performance.</p>
    <p>L'archive contien les librairie nécessaire au fonctionnement de SQLiteStudio.</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://sqlitestudio.pl/?act=download">cette page</a>.</p>
    <p>En date du 9 mai 2015, la version la plus récente est la 2.8.14, disponible directement <a href="http://sqlitestudio.pl/files/sqlitestudio3/complete/win32/sqlitestudio-3.0.5.zip">ici</a>. Il est nécessaire d'avoir au moins 10MB d'espace libre sur son disque dur pour pouvoir compléter le téléchargement.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Extraire le contenue de l'archive dans un dossier comme votre dossier personnel ou dans ProgramFiles.</p>
    <p>Il ne vous reste qu'à faire un racourci vers le bureau en cliquant droit sur SQLiteStudio.exe et cliquer sur envoyer vers puis sur bureau.</p>
    <p>L'installation est terminé.</p>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>SQLiteStudio n'est pas présent dans les dépots Ubuntu, il faut donc le télécharger depuis le site web officiel.</p>
    <p>Les librairie suivantes sont nécessaires au fonctionnement de SQLiteStudio:</p>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Télécharger l'archive de SQLiteStudio à cette <a href="http://sqlitestudio.pl/files/sqlitestudio3/complete/linux64/sqlitestudio-3.0.5.tar.xz">adresse</a> ou sur <a href="http://sqlitestudio.pl/?act=download">la page de téléchargement</a>.</p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
    <p>Extraire le contenue de l'archive dans un dossier auquel vous pouvez accedé facilement.</p>
    <h4>Terminal</h4>
    <p>la décompression peut se faire avec un terminal en utilisant la commande.</p>
    <p class="terminal">/chemain/vers/archive.extension decompress /chemain/vers/cible</p>
    <p>Vous avez terminer l'instalation de SQLiteStudio.</p>
    <h4>Terminé</h4>
    <p>Pour lancer SQLiteStudio assurez vous que vous avez mis le droit a l'exécution sur le fichier SqliteStudio.sh.</p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://sqlitestudio.pl">Site officiel de SQLiteStudio</a></li>
        <li><a href="http://sqlite.org/">Site de SQLite</a></li>
    </ul>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>
